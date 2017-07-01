<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Model\Ad;

class AdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /**
        $user = ad::get();//取stu表的一条数据
        return view('admin.ad.index',['list'=>$user]);
        */
        $db = \DB::table("ad");
       
       //判断并封装搜索条件
       $params = array();
       if(!empty($_GET['title'])){
           $db->where("title","like","%{$_GET['title']}%");
           $params['title'] = $_GET['title']; //维持搜索条件
       }
       
       // $list = $db->get(); //获取全部
       $list = $db->orderBy("id",'desc')->paginate(5); //5条每页浏览 
       return view("admin.ad.index",['list'=>$list,'params'=>$params]);
   }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view("admin.ad.add");
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
        $input = $request->only(['userid','title','picname','addtime','deadline','status']);
        //print_r($input);
        $id = \DB::table("ad")->insertGetId($input);
        //return "添加的id:".$id;
        if($id>0){
            return redirect('admin/admin/ad');
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
        //echo "ddddddddddddddddddddddddd";
         $ob = \DB::table("ad")->where("id","=",$id)->first();
        //print_r($ob);
         return view("admin.ad.edit",['vo'=>$ob]);
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
        $input = $request->only(['title','picname','addtime','deadline','status']);
        $id = \DB::table("ad")->where("id",$id)->update($input);
        
        if($id>0){
            return redirect('admin/admin/ad');
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
        \DB::table('ad')->where('id', $id)->delete();
        //return redirect()->route('/stu');
        return redirect('admin/admin/ad');
    }

    //执行上传
    public function upload(Request $request)
    {
        return 1;
        //判断是否是一个有效上传文件
        if ($request->file('ufile') && $request->file('ufile')->isValid()) {
            //获取上传文件信息
            $file = $request->file('ufile');
            $ext = $file->extension(); //获取文件的扩展名
            //随机一个新的文件名
            $filename = time().rand(1000,9999).".".$ext;
            //移动上传文件
            $file->move("./public/upload/",$filename);
                                
            return response($filename); //输出
            exit();
        }else{
            //闪存信息
            return redirect('demo/upload')->with('status', '请选择上传文件!');
        }
    }
    //搜索 分页
    public function indexs()
    {

        
        $user = ad::get();//取stu表的一条数据
        return view('admin.ad.index',['list'=>$user]);
        
        $db = \DB::table("ad");
       
       //判断并封装搜索条件
       $params = array();
       if(!empty($_GET['titil'])){
           $db->where("titil","like","%{$_GET['titil']}%");
           $params['titil'] = $_GET['titil']; //维持搜索条件
       }
       
       // $list = $db->get(); //获取全部
       $list = $db->orderBy("id",'desc')->paginate(5); //5条每页浏览
        
       return view("admin.ad.index",['list'=>$list,'params'=>$params]);
        

    }

    
   
}

