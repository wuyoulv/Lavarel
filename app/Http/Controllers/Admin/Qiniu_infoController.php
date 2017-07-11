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
            $filename = time().rand(1000,9999).".".$file->getClientOriginalExtension();
            $disk = \Storage::disk('qiniu');
            $filePath = $file->getRealPath();
            $in = $disk->put('$filename',fopen($filePath,'r+'));
            $path = $disk->downloadUrl($in); 
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
