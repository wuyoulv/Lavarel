<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Film_cmt;


class Film_cmtController extends Controller {
	public function index(Request $request, $id = null) {
		if ($id) {
			//通过分类id获取 分类下所有影片id
			$db = \DB::table('film_info')->select('id')->where('type_id', $id)->get();
			//通过影片id链接查询 评论内容和用户
			//$list=array();
			foreach ($db as $key => $v) {
				$film_cmt[] = \DB::table('film_cmt')->join('film_info', 'film_cmt.film_id', '=', 'film_info.id')->join('user', 'Film_cmt.user_id', '=', 'user.id')->select('film_cmt.id', 'user.name', 'film_info.title', 'film_cmt.time', 'film_cmt.text')->where('film_id', $v->id)->where("film_info.title", "like", "%{$request->input('title') }%")->paginate(5);
				$list = $film_cmt;
				$where['title'] = $request->input('title');
			}
		} else {
			$where = [];
			$list[] = $this->join($request->input('title'));
			// dd($list);
			$where['title'] = $request->input('title');
			// dd($list);
			
		}
		//查询分类表 id 分类名
		$type_table = \DB::table('film_type')->select('id', 'type')->get();
		return view('admin.Film_cmt.index', ['cmt' => $list, 'where' => $where, 'type_table' => $type_table]);
	}
	public function join($like) {
		$film_cmt = \DB::table('film_cmt')->join('film_info', 'film_cmt.film_id', '=', 'film_info.id')->join('user', 'Film_cmt.user_id', '=', 'user.id')->select('film_cmt.id', 'user.name', 'film_info.title', 'film_cmt.time', 'film_cmt.text')->where("film_info.title", "like", "%{$like}%")->paginate(5);
		return $film_cmt;

	}
	public function delete($id) {
		$cmt = Film_cmt::find($id);
		if (isset($id)) {
			$cmt->delete();
			return redirect('/admin/cmt')->with('err', '删除成功');
		} else {
			return redirect('/admin/cmt')->with('err', '删除失败');
		}
	}
	public function edit($id) {
		// $cmt = Film_cmt::where('id', $id)->get();
		$cmt = \DB::table('film_cmt')->join('film_info', 'film_cmt.film_id', '=', 'film_info.id')->join('user', 'Film_cmt.user_id', '=', 'user.id')->select('film_cmt.id', 'user.name', 'film_info.title', 'film_cmt.time', 'film_cmt.text')->where("film_cmt.id", $id)->get();

		return view('admin.Film_cmt.edit', ['cmt' => $cmt]);
	}
	public function update(Request $request) {
		$data = $request->only('text');
		$id = $request->input('id');

			if (!empty($id)) {
				$cmt = Film_cmt::where("id",$id)->update($data);
				
				return redirect('/admin/cmt');
			} else {
				return redirect('/admin/cmt/edit/' . $id)->with('err', '修改失败');

	
			}
		}
	
}
