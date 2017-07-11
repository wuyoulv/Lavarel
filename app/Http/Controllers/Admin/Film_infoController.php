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
        if($request->file("picname")){
            $file = $request->file("picname");
            $filename = time().rand(1000,9999).".".$file->getClientOriginalExtension();
            $disk = \Storage::disk('qiniu');
            $in = $disk->put("$filename",$request->file('picname'));
            $path = $disk->downloadUrl($in); 
        }else{
            return back()->with("文件格式不正确");
        }


        $time=date('Y-m-d H:i:s');
        $input = $request->only(['title','type_id','director','actor','firsttime','duration','region','language','introduction','limit','score','status','click']);
        $input['addtime'] = $time;
        $input['edittime'] = $time;

        $input['pic_address'] = $path;
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
        $time=date('Y-m-d H-i-s');
        $ob = Film_info::where('id',$id)->first();
        $ob['edittime']=$time;
        return view('admin.Film_info.edit',['data'=>$ob]);
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
        $input = $request->only('title','pic_address','type_id','director','actor','firsttime','duration','region','language','introduction','limit','score','status','click','addtime','edittime');
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
        Film_info::where("id",$id)->delete();
        return redirect('/admin/film_info');
    }
}
