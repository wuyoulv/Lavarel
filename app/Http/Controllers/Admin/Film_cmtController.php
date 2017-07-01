<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Film_cmt;
class Film_cmtController extends Controller
{
   public function index(Request $request){
		$db = \DB::table('film_cmt');
		$where = [];
    	if($request->has('title')){
    		$title = $request->input('title');
    		$db->where("title","like","%{$title}%"); 
    		$where['title'] = $title;
    	}
		$list = $db->paginate(2);
    	return view('admin.Film_cmt.index',['cmt'=>$list,'where'=>$where]);
	}
	public function delete($id){
		$cmt = Film_cmt::find($id);
		if(isset($id)){
			$cmt->delete();
			return redirect('/admin/cmt')->with('err','删除成功');

		}else{
			return redirect('/admin/cmt')->with('err','删除失败');
		}

	}
	public function edit($id){
		$cmt = Film_cmt::where('id',$id)->get();
	
		return view('admin.Film_cmt.edit',['cmt'=>$cmt]);
		}

	public function update(Request $request){
		$data = $request->only('id','user','title','text');
		$id = $data['id'];
		$user = $data['user'];
		$title = $data['title'];
		$text = $data['text'];
		array_shift($data);
		if(!empty($user) && !empty($title) && !empty($text)){
			if(isset($id)){
					$cmt = Film_cmt::find($id);
					$cmt->user = $user;
					$cmt->title = $title;
					$cmt->text = $text;
					$cmt->save();
					return redirect('/admin/cmt');
					
			}else{
			return redirect('/admin/cmt/edit/'.$id)->with('err','修改失败');
			}
		}

	}
}
