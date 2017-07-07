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
    	if($request->has('filmid')){
    		$filmid = $request->input('filmid');
    		$db->where("filmid","like","%{$filmid}%"); 
    		$where['filmid'] = $filmid;
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
		$data = $request->only('id','user','filmid','text');
		$id = $data['id'];
		$userid = $data['userid'];
		$filmid = $data['filmid'];
		$text = $data['text'];
		array_shift($data);
		if(!empty($user) && !empty($filmid) && !empty($text)){
			if(isset($id)){
					$cmt = Film_cmt::find($id);
					$cmt->userid = $userid;
					$cmt->filmid = $filmid;
					$cmt->text = $text;
					$cmt->save();
					return redirect('/admin/cmt');
					
			}else{
			return redirect('/admin/cmt/edit/'.$id)->with('err','修改失败');
			}
		}

	}
}
