<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list=User::get();
        return view("admin.user.index",["list"=>$list]);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.user.add");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $input = $request->only(['account','picname','password','name','birthday','sex','tel','email','address','months','money','role','buy_time','dead_line','login_time','last_time']);
        $id = User::insertGetId($input);
        //$input['buy_time',''];
        /* $input['buy_time']=date("Y-m-d H:i:s",time());
        $input['dead_line']=date("Y-m-d H:i:s",time());
        $input['login_time']=date("Y-m-d H:i:s",time());
        $input['last_time']=date("Y-m-d H:i:s",time()); */
        if($id>0){
            echo "修改成功!";
        }else{
            echo "失败!";
        }
        /* $InsertNotice = new User;
        $InsertNotice ->notice_title =$request->notice_title;
        $InsertNotice ->notice_content = $request ->notice_content;
        $InsertNotice ->notice_time =$request->notice_time;
        $InsertNotice->save();
        return redirect("admin/notice"); */
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
        $re=User::find($id);
        //echo "<pre>";
        //var_dump($re);
        return view('admin.user.edit',['user'=>$re]);
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
        $input = $request->only(['account','picname','name','birthday','sex','tel','email','address','months','money','role','buy_time','dead_line','login_time','last_time']);
        $id = User::where("id",$id)->update($input);
        
        if($id>0){
            return redirect('admin/user');
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
        User::delete($id);
        return redirect("admin/user");
    }
}
