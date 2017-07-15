<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Film_type;
use Illuminate\Support\Facades\Input;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
class Film_typeController extends Controller
{	
	

	//显示全部分类
    public function index(Request $request){
    	$db = film_type::all();
    	
    	//重组数组格式
    	foreach($db as $key=>$val){
  		
    		if(empty($val->type_pid)){
    			$arr[]=$db[$key];
    			foreach($db as $m=>$n){
    				if($val->id == $n->type_pid){
    					$db[$m]->type = '├─ '.$db[$m]->type;
    					$arr[]=$db[$m];
    				}
    			}
    		}
    	}
    	
    	
         //获取当前的分页数
        $currentPage = LengthAwarePaginator::resolveCurrentPage();

        //实例化
        $collection = new Collection($arr);

        //每页显示多少个数据
        $perPage =10;

        //获取当前需要显示的数据列表
        $currentPagearr = $collection->slice(($currentPage-1) * $perPage, $perPage)->all();

        //创建一个新的分页方法
        $paginatedarr= new LengthAwarePaginator($currentPagearr, count($collection), $perPage);

        // return view('search', ['results' => $paginatedarr]);
        $paginatedarr = $paginatedarr->setPath(url('admin/type'));

    	$where = [];
    	if($request->has('type')){
    		$type = $request->input('type');
    		$db->where("type","like","%{$type}%"); 
    		$where['type'] = $type;

    	}

    	return view('admin.Film_type.index',['list'=>$paginatedarr,'where'=>$where]);
	}

	public function create(){
		//查询出主分类
		$db = Film_type::where('type_pid','=',null)->get();
		return view('admin.Film_type.info',['list'=>$db]);
	}
	public function info(Request $request){
		$time =date("Y-m-d H:i:s");
		$data = $request->only(['type','type_pid']);

		$data['addtime'] = $time;
		$data['edittime'] = $time;
		$pid = $request->input('type_pid');
		if($pid){
			$data['type_pid'] = $pid;
		}
		$input = Input::all();
		//验证规则
		$rules = [
			'type'=>'required',
		];
		//提示信息
		$message = [
            'type.required'=>'分类名称不能为空！',
        ];
        //创建validator表单验证
		$validator = \Validator::make($input,$rules,$message);
		//判断是否验证通过
		if($validator->passes()){
			$id = Film_type::insertGetId($data);
			if($id>0){
		            $info = "分类添加成功！";
		       }else{
		            $info = "分类添加失败！";
		    }
	        return redirect("admin/type")->with("err",$info);
		}else{
			return back()->withErrors($validator);
		}

	
	}
	//删除分类
	public function delete($id){
		$type_pid = Film_type::select('type_pid')->where('id',$id)->get();
		$delete = Film_type::find($id);

		foreach($type_pid as $key=>$val){
			if($val->type_pid){
				$delete->delete();
			}else{
				$delete->delete();
				$array = ['type_pid'=>null];
				$pid = Film_type::where('type_pid',$id)->update($array);
				
			}
		}
	
		return redirect('/admin/type');
	}
	//编辑分类
	public function edit($id){

		$edite = Film_type::where('id',$id)->get();
		$type = Film_type::select('id','type_pid','type')->where('type_pid','=',null)->get();

		return view('admin.Film_type.edit',['edit'=>$edite,'type'=>$type,'id'=>$id]);

	}
	public function update(Request $request){

		$data = $request->only('id','type','type_pid');
		$data['edittime'] =date("Y-m-d H:i:s");
		// $type = $data['type'];
		$id = $data['id'];
		if($request->input('type_pid')==0){
			$data['type_pid'] = null;
		}
		
		//移除数组中的 id
		array_shift($data);
		
		//限制分类名不能为空
		if(!empty($data['type'])){
			Film_type::where('id',$id)->update($data);

			return redirect('/admin/type');
		}else{
			return redirect('/admin/type')->with('err','添加失败');
		}
		
	}
	
}
