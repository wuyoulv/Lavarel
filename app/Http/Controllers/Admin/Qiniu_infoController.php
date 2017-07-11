<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Qiniu_info;
use zgldh\QiniuStorage\QiniuStorage;
use Qiniu\Storage\UploadManager;
use Qiniu\Auth;


class Qiniu_infoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //$qiniu_info=Qiniu_info::all();
        $db=\DB::table('qiniu_info');
        $where=[];

        if($request->has('name')){
            $name=$request->input("name");
            $db->where("fname","like","%{$name}%");
            $where['name']=$name;
        }

        $list=$db->paginate(5);
        return view('admin.Qiniu_info.index',['data'=>$list,'where'=>$where]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.Qiniu_info.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        if($request->file("fname")){
            $file = $request->file("fname");

            $accessKey = 'DJU-o5zoEXEAJczLhXJ-ZiojvMGPXwWb5RSxoKGE';
            $secretKey = 'e0iOnN2JihZbjgV7LLra5tdI2h5BVRthln8PDVQZ';
            // 构建鉴权对象
            $auth = new Auth($accessKey, $secretKey);
            // 要上传的空间
            $bucket = 'yeyu';

            // $pipeline = "a";

            // $fops = 'avthumb/m3u8/noDomain/1/segtime/15/vb/240k'.$file;

            // $policy = array(
            //   'persistentOps' => $fops,
            //   'persistentPipeline' => $pipeline
            // );   
            // 生成上传 Token
            $token = $auth->uploadToken($bucket);


            $filename = time().rand(1000,9999).".".$file->getClientOriginalExtension();
            //$disk = \Storage::disk('qiniu');
            $filePath = $file->getRealPath();
            //dd($filePath);

            $uploadMgr = new UploadManager();

            list($ret, $err) = $uploadMgr->putFile($token,$filename,$filePath);
           // var_dump($in);
            $path = 'Http://oslflcaj7.bkt.clouddn.com/'.$filename;
            //dd($path);
            if ($err !== null) {
                return response()->json(['ResultData'=>'失败','info'=>'失败']);
             } else{
                $time=date('Y-m-d H:i:s');
                $input = $request->only(['description']);
                $input['fname'] = $path;
                $input['createtime'] = $time;
                $id = Qiniu_info::insertGetid($input);
                //return "添加的Id".$id;
                return redirect('/admin/qiniu_info');
                }        

        }else{
            return back()->with("文件格式不正确");
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ob = Qiniu_info::where("id",$id)->first();
        //var_dump($ob);
        return view("admin.Qiniu_info.edit",['data'=>$ob]);
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
        $input = $request->only(['uid','fname','key','createtime','description']);
        $id = Qiniu_info::where("id",$id)->update($input);
        if($id>0){
            return redirect('/admin/qiniu_info');
        }else{
            echo "修改失败";
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
        Qiniu_info::where("id",$id)->delete();
        return redirect('/admin/qiniu_info');
    }
}
