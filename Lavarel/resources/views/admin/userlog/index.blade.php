@extends('admin.base')
    @section('content')
	<div class="box-body">
      <table class="table table-bordered">
        <tr>
          <th style="width:60px">编号</th>
          <th>账号</th>
          <th>姓名</th>
          <th>登录时间</th>
          <th style="width: 100px">操作</th>
        </tr>
        @foreach($list as $v)
        <tr>
          <td>{{$v->id}}</td>
          <td>{{$v->account}}</td>
          <td>{{$v->name}}</td>
          <td>{{$v->log_time}}</td>
          <td><button onclick="doDel({{$v->id}})" class="btn btn-xs btn-danger">删除</button> 
          <button class="btn btn-xs btn-primary">编辑</button> </td>
        </tr>
        @endforeach
      </table>
    </div><!-- /.box-body -->
    @endsection