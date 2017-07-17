<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Film_info;
use zgldh\QiniuStorage\QiniuStorage;

class Film_infoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $db = \DB::table('film_info');
        $where = [];
        //var_dump($request->input('name'));die;
        if($request->has('title')){
            $name=$request->input('title');
            $list=$db->where('title','like',"%{$name}%");
            $where['name']=$name;
        }

            $list=$db->paginate(7);
       
        return view('admin.Film_info.index',['data'=>$list,'where'=>$where]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $type=\DB::table("film_type")->select('id','type')->get();
        
        return view("admin.Film_info.create",['type'=>$type]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //上传视频
        $v_file = $request->file("video_name");
        $v_filename = time().rand(1000,9999).".".$v_file->getClientOriginalExtension();

        $pipeline = "a";  //建立队列
        $fops = 'avthumb/m3u8/noDomain/1/segtime/15/vb/240k'.$v_file; //切片处理
        $policy = array(
           'persistentOps' => $fops,
           'persistentPipeline' => $pipeline
        );

        $v_disk = \Storage::disk('qiniu');
        $v_filePath = $v_file->getRealPath();
        $in = $v_disk->put($v_filename,fopen($v_filePath,'r+'));
        $v_path = 'Http://oslflcaj7.bkt.clouddn.com/'.$v_filename;


        $time=date('Y-m-d H:i:s');
        $input = $request->only(['title','type_id','director','actor','firsttime','duration','region','language','introduction','limit','score','status','click']);
        $input['addtime'] = $time;
        $input['edittime'] = $time;

        $input['video_address'] = $v_path;
        $id=Film_info::insertGetid($input);

        return redirect('/admin/film_info');
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
        $type=\DB::table("film_type")->select('id','type')->get();

        $time=date('Y-m-d H-i-s');
        $ob = Film_info::where('id',$id)->first();
        $ob['edittime']=$time;
        return view('admin.Film_info.edit',['data'=>$ob,'type'=>$type]);
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

        $time=date('Y-m-d H:i:s');
        $input['edittime']=$time;
        $input = $request->only('title','type_id','director','actor','firsttime','duration','region','language','introduction','limit','score','status','click');

        $id = Film_info::where("id",$id)->update($input);
        if($id>0){
            return redirect('/admin/film_info');
        }else{
            echo "修改成功";
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
       // $key = Film_info->where("id",$id)->get('')
        Film_info::where("id",$id)->delete();
        //\Storage::delete($key);
        return redirect('/admin/film_info');
    }
}
