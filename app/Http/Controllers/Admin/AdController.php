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
        /*
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
        //定义一个空数组
        $array= [];
        //获取除图片外的信息
        $data = $request->only(['userid','title','desc','web_address','addtime','deadline','status']);
        //$picname = $data['picname'];
        //echo "<pre>";
        //print_r($data);
        //判断是否是有效的文件
        if ($request->file('picname') && $request->file('picname')->isValid()){
            //获取上传文件信息
            $file = $request->file('picname');
            //echo "<pre>";
            //print_r($file);
            $ext = $file->extension(); //获取文件的扩展名
            //随机一个新的文件名
           
            $filename = time().rand(1000,9999).".".$ext;
            
            $array['picname'] = $filename;
            //echo "<pre>";
            //print_r($array);
            //拼接两个信息            
            $info = array_merge($data,$array);
            //echo "<pre>";
            //print_r($info);
            //添加进数据库
            Ad::insertGetId($info);
            //print_r($array);
            //移动图片
            //echo "<pre>";
            //print_r($filename);
            $file->move("./uploads/",$filename);
            //$file->move("./uploads/s_".$filename,$fileneme)->resize(100,100);
            //$img1->save("./uploads/s_".$filename);                   
            //return response($filename); //输出
            
        } 


        
         return redirect('admin/admin/ad');
       
    }
    /*
    //七牛云图片上传实验
    public function store(Request $request)
    {
        if($request->hasFile('picname')){
            $file = $request->file('picname');
            $disk = \Storage::disk('qiniu');
            $fileName = md5($file->getClientOriginalName().time().rand()).'.'.$file->getClientOriginalExtension();
            $boll = $disk->put('iwanli/image_'.$fileName,file_get_contents($file->getRealPath()));
            if($boll){
                $path = $disk->downloadUrl('iwanli/image_'.$fileName);
                return '上传成功，图片url:'.$path;
            }
            return '上传失败';
        }
        return '没有文件';
    }
    */
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

         $array= [];
        //获取除图片外的信息
        $data = $request->only(['userid','title','desc','web_address','addtime','deadline','status']);
        //$picname = $data['picname'];
        //echo "<pre>";
        //print_r($data);
        if(!empty($request->file('picname'))){
        //判断是否是有效的文件
        if ($request->file('picname') && $request->file('picname')->isValid()){
            //获取上传文件信息
            $file = $request->file('picname');
            //echo "<pre>";
            //print_r($file);
            $ext = $file->extension(); //获取文件的扩展名
            //随机一个新的文件名
           
            $filename = time().rand(1000,9999).".".$ext;
            
            $array['picname'] = $filename;
            //echo "<pre>";
            //print_r($array);
            //拼接两个信息            
            $info = array_merge($data,$array);
            //echo "<pre>";
           // print_r($info);
             AD::where('id',$id)->update($info);
            //添加进数据库
            //Ad::insertGetId($info);
            //print_r($array);
            //移动图片
            //echo "<pre>";
            //print_r($filename);
            $file->move("./uploads/",$filename);
             return redirect('admin/admin/ad');
        }

      }else{
        //return 1;
        AD::where('id',$id)->update($data);
        return redirect('admin/admin/ad');
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
      
    }
  
}

