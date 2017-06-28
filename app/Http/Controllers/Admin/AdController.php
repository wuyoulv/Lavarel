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
        $user = Ad::get();
       
       return view('admin.ad.index',['list'=>$user]);
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
            return redirect('admin/ad');
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
        $ob = \DB::table("ad")->where("id","=",$id)->first();
        //print_r($ob);
        return view("ad.edit",['stu'=>$ob]);
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
        $input = $request->only(['name','age','sex','classid']);
        $id = \DB::table("ad")->where("id",$id)->update($input);
        if($id>0){
            echo "修改成功!";
        }else{
            echo "失败!";
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
        \DB::table('stu')->where('id', $id)->delete();
        //return redirect()->route('/stu');
        return redirect('stu');
    }
}

