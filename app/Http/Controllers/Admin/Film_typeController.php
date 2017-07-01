<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Film_type;
class Film_typeController extends Controller
{	
	

	//显示全部分类
    public function index(Request $request){
    	$db = \DB::table('film_type');
    	$where = [];
    	if($request->has('type')){
    		$type = $request->input('type');
    		$db->where("type","like","%{$type}%"); 
    		$where['type'] = $type;

    	}
		$list = $db->paginate(10);
    	return view('admin.Film_type.index',['list'=>$list,'where'=>$where]);
	}
	


	public function create(){
		return view('admin.Film_type.info');
	}
	public function info(Request $request){
		$time =date("Y-m-d H:i:s");
		$data = $request->only('type');
		$data['addtime'] = $time;
		$data['edittime'] = $time;
		$id = Film_type::insertGetId($data);
		if($id>0){
            $info = "分类添加成功！";
        }else{
            $info = "分类添加失败！";
        }
        
        //return view("admin.stu.info",['info'=>$info]);
        return redirect("admin/type")->with("err",$info);
	}
	//删除分类
	public function delete($id){
		$delete = Film_type::find($id);
		$delete->delete();
		return redirect('/admin/type');
	}
	//编辑分类
	public function edit($id){

		$edite = Film_type::where('id',$id)->get();
		return view('admin.Film_type.edit',['edit'=>$edite,'id'=>$id]);

	}
	public function update(Request $request){

		$data = $request->only('id','type');
		$time =date("Y-m-d H:i:s");
		$type = $data['type'];
		$id = $data['id'];
		var_dump($id.'111111');
		//限制分类名不能为空
		if(!empty($data['type'])){
			$update = Film_type::find($id);
			$update->type=$type;
			$update->edittime=$time;
			$update->save();
			return redirect('/admin/type');
		}else{
			return redirect('/admin/type')->with('err','添加失败');
		}
		
	}
	
}
