<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Film_info;

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

            $list=$db->paginate(3);
       
        return view('admin.Film_info.index',['data'=>$list,'where'=>$where]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.Film_info.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->only(['title','picname','type','director','actor','firsttime','duration','region','language','introduction','limit','score','status','click','addtime','lasttime']);
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
        $ob = Film_info::where('id',$id)->first();
        //var_dump($ob);
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
        $input = $request->only('title','picname','type','director','actor','firsttime','duration','region','language','introduction','limit','score','status','click','addtime','lasttime');
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
