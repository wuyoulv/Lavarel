<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\User_vip;

class User_vipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         /**
        $user = User_vip::get();//取stu表的一条数据
        return view('admin/User_vip/index',['list'=>$user]);
        */
        $db = \DB::table("User_vip");
       
       //判断并封装搜索条件
       $params = array();
       if(!empty($_GET['userid'])){
           $db->where("userid","like","%{$_GET['userid']}%");
           $params['userid'] = $_GET['userid']; //维持搜索条件
       }
       
       // $list = $db->get(); //获取全部
       $list = $db->orderBy("id",'desc')->paginate(1); //5条每页浏览
        
       return view("admin.User_vip.index",['list'=>$list,'params'=>$params]);
   }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view("admin.User_vip.add");
       // return "加载添加表单!";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$input = $request->all(); //获取所有参数信息
        //unset($input['_token']);//移除_token参数
        //下面语句等价于上面两句
        $input = $request->only(['userid','role',]);
        //print_r($input);
        $id = \DB::table("user_vip")->insertGetId($input);
        //return "添加的id:".$id;
        if($id>0){
            return redirect('admin/user_vip');
            //echo "成功";
        }else{
            echo "添加失败";
        }
        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $re=User_vip::find($id);
        //echo "<pre>";
        //var_dump($re);
        return view('admin.user_vip.edit',['user'=>$re]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->only(['userid','role']);
        $id = User_vip::where("id",$id)->update($input);
        
        if($id>0){
            return redirect('admin/user_vip');
            echo "修改成功!";
        }else{            
            return "失败!";
            //echo "失败!";
            
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        \DB::table('user_vip')->where('id', $id)->delete();
        //return redirect()->route('/stu');
        return redirect('admin/user_vip');
    }
}

