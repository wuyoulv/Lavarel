<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use iscms\Alisms\SendsmsPusher as Sms;
use App\Model\User;
use App\Model\Login;
//use App\Model\Login;


class HomeRegisterController extends Controller
{
    public function __construct(Sms $sms)
    {
         $this->sms=$sms;
    }
    
    //显示注册页面
    public function index()
    {
        return view('home.register.index');
    }
    
    /**
     * 发送手机验证码
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     * @author zhangyuchao
     */
    public function sendMobileCode(Request $request)
    {
        // 去用户登录表里边查询
        $result = User::find(['account' => $request['tel']]);
        if ($result) {
            // 返回错误信息
            return responseMsg('手机号码已注册!', 400);
        }
        // 调用发送验证码 代码片段
        $smsResult = $this->codeSnippet->mobileCodeForSms($request['tel'], config('subassembly.autograph'), config('subassembly.template_id'));
        if (!is_bool($smsResult)) {
            return responseMsg($smsResult, 400);
        }
        return responseMsg('验证码已发送!');

    }
    
    /**
     * 用户注册
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     * @author zhangyuchao
     */
    public function ccreateUser(Request $request)
    {
        // 密码处理
        $password = trim($request['password']);
        // 俩次密码判断
        if ($password != $request['rel_password']) {
            // 返回错误信息
            return responseMsg('两次密码输入不一致', 400);
        }

        
    
        // 从redis里获取手机验证码
        $code = \Redis::get(STRING_USER_VERIFY_CODE_ . $request['tel']);
        // 拼装需要保存的数据
        $request['account'] = $request['tel'] = trim($request['tel']);
        
        // redis里的验证码是否存在
        if (empty($code)) {
            // 返回错误信息
            return responseMsg('验证码已失效', 400);
        }
        // 判断验证码是否正确
        if ($code != $request['code']) {
            // 返回错误信息
            return responseMsg('验证码错误', 400);
        }
        // 密码加密
        $request['password'] = Md5($password);
        // 拼装各个表需要的数据
        $request['login_ip'] = $request['last_login_ip'] = $request['register_ip'] = $request->getClientIp();
        // 初始化昵称
        $request['name'] = 'nickname';
        try {
            // 开始事物
            \DB::beginTransaction();
            // 向用户注册原始表 添加一条数据
            $registerResult = $this->register->insert($request->all());
            // 判断用户注册原始是否成功
            if (empty($registerResult)) {
                // 抛出异常
                throw new Exception(config('log.systemLog')[3]);
            }
            // 用户注册原始表的ID是用户基本表、用户登录索引表的user_id
            $request['user_id'] = $registerResult->id;
            // 向用户基本表添加一条数据
            $userInfoResult = $this->userInfo->insert($request->all());
            // 判断用户基本信息 是否成功
            if (empty($userInfoResult)) {
                // 抛出异常
                throw new Exception(config('log.systemLog')[4]);
            }
            // 向用户登录索引表添加一条数据
            $indexUserResult = $this->indexUserLogin->insert($request->all());
            // 判断登录索引表是否成功
            if (empty($indexUserResult)) {
                // 抛出异常
                throw new Exception(config('log.systemLog')[5]);
            }
            // 全部正确 事物提交
            \DB::commit();
            // 记录登录类型
            $request['third_party'] = 1;
            // 记录用户登录日志
            $logUserLoginResult = $this->logUserLogin->insert($request->all());
            // 用户登录日志记录失败 改为记录文件日志
            if (empty($logUserLoginResult)) {
                // 拼装系统日志信息
                $logMessage = Common::logMessageForOutside(config('log.systemLog')[6]);
                // 写入系统日志
                $this->log->writeSystemLog($logMessage);
            }
            // 存入用户登录信息
            \Session::put('user', $indexUserResult);
            // 存入用户基本信息
            \Session::put('userInfo', $userInfoResult);

            // 返回注册成功提示
            return responseMsg('注册成功', 200);
        } catch (Exception $e) {
            // 事物回滚
            \DB::rollBack();
            // 组装填写log日志
            $logMessage = Common::logMessageForOutside($e->getMessage());
            // 写入log日志
            $this->log->writeSystemLog($logMessage);
            // 返回失败信息
            return responseMsg('注册失败', 400);
        }


    }
    
    
    public function sendSms(Request $request){
        
        $user=Login::where('account','=',$account)->get();
        if(!empty($user)){
            //return back()->with('status','此账号已存在！');
            return json_encode(['info' => '此账号已存在！']);
        }
        $phone = $request ->input('account'); // 用户手机号，接收验证码
        $name = '兄弟连';  // 短信签名,可以在阿里大鱼的管理中心看到
        $num = rand(100000, 999999); // 生成随机验证码
        session()->put('num',$num);
        $smsParams = [
            'number' => "$num"
        ];
        $content = json_encode($smsParams); // 转换成json格式的
        $code = "SMS_75835101";   // 阿里大于(鱼)短信模板ID
        //$request ->session()->put('alidayu',$num);  // 存入session 后面做数据验证

        $result=$this->sms->send($phone,$name,$content,$code);
        //echo "<pre>";
        //var_dump($result);die;
        //echo "验证码：".session('alidayu').'<br/>';
        if(property_exists($request,'result')){
           // 使用PHP函数json_encode方法将给定数组转化为JSON：
            return json_encode(['ResultData' => '成功', 'info' => '已发送']);
        }else{
            return json_encode(['ResultData' => '失败', 'info' => '重复发送']);
        }
        
    }
     
     /**
     * 用户注册
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     * @author zhangyuchao
     */
    public function createUser(Request $request)
    {
        $account=$request->input('account');
        $password=$request->input('password');
        $repassword=$request->input('repassword');
        
        $code=$request->input('code');
        
        if(!$password==$repassword){
            return back()->with('两次密码输入不一致');
        }
        $user=Login::where('account','=',$account)->get();
        if(!empty($user)){
            return back()->with('此账号已存在！');
        }
        if(session()->get('num')!=$code){
            return back()->with('验证码错误！');
        }
        //$input = $request->only(['account','picname','password','name','birthday','sex','tel','email','address','months','money','role','buy_time','dead_line','login_time','last_time']);
        
        try {
            // 开始事物
            \DB::beginTransaction();
            // 向用户注册原始表 添加一条数据
            $res1 = User::insertGetId(['account'=>$account,'password'=>Md5($password),'tel'=>$account,'buy_time'=>null,'dead_line'=>null,'login_time'=>null,'last_time'=>null]);
            $res2 = Login::insertGetId(['account'=>$account,'password'=>Md5($password)]);
            //$res2 = \DB::table('login')->insertGetId(['account'=>$account,'password'=>$password]);
            if($res1 && $res2){
                // 全部正确 事物提交
                \DB::commit();
            }
            // 存入用户登录信息
            session()->put('adminn',$account);
            // 存入用户基本信息
            return redirect("a/home");
            
        } catch (Exception $e) {
            // 事物回滚
            \DB::rollBack();
            return '注册失败';
        }
        
    }
}
