
    @extends('admin.base')
    @section('content')
	<section class="content-header">
          <h1>
            VIP会员
            <small>VIP member</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="{{url('admin')}}"><i class="fa fa-dashboard"></i> 首页</a></li>
            <li><a href="{{url('admin/user_vip')}}">VIP会员管理</a></li>
            <li class="active">列表</li>
          </ol>
        </section>
	<div class="box-body">
      <table width="100%" class="table table-striped" >
        <tr>
          <th>id</th>
          <th>VIP用户名</th>
          <th>角色</th>
     

          <th style="width: 100px">操作</th>
        </tr>
        @foreach($list as $v)
        <tr>
          <td>{{$v->id}}</td>
          <td>{{$v->userid}}</td>
          <td>{{$v->role}}</td>
          
          <td><button onclick="doDel({{$v->id}})" class="btn btn-xs btn-danger">删除</button> 
          <button class="btn btn-xs btn-primary">编辑</button> </td>
        </tr>
        @endforeach
      
       
      </table>
    </div><!-- /.box-body -->
@endsection
