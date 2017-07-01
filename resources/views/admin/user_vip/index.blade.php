@extends('admin.base')
    @section('content')
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            VIP会员
            <small>VIP member</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="{{url('admin')}}"><i class="fa fa-dashboard"></i> 首页</a></li>
            <li><a href="{{url('admin/user_vip')}}">VIP会员管理</a></li>
            <li class="active">浏览会员信息</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title"><i class="fa fa-th"></i> VIP会员管理</h3>
                  <div class="box-tools">
                    <form action="{{url('admin/user_vip')}}" method="get">
                    <div class="input-group" style="width: 150px;">
                      <input type="text" name="userid" class="form-control input-sm pull-right" placeholder="VIP会员账号查询"/>
                      <div class="input-group-btn">
                        <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                      </div>
                    </div>
                    </form>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered">
                    <tr>
                      <th>id</th>
                      <th>userid</th>
                      <th>角色</th>
                      <th style="width: 100px">操作</th>
                    </tr>
                    @foreach($list as $v)
                    <tr>
                      <td>{{$v->id}}</td>
                      <td>{{$v->userid}}</td>
                      <td>{{$v->role}}</td>
                      <td><button onclick="doDel({{$v->id}})" class="btn btn-xs btn-danger">删除</button> 
                      <button onclick="window.location='{{URL('admin/user_vip')}}/{{ $v->id }}/edit'" class="btn btn-xs btn-primary">编辑</button> </td>
                    </tr>
                    @endforeach
                  
                   
                  </table>
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                 {!! $list->appends($params)->render() !!}
                </div>
              </div><!-- /.box -->

              
              
            </div><!-- /.col -->
            
          </div><!-- /.row -->
         
        </section><!-- /.content -->
        <form action="" style="display:none;" id="mydeleteform" method="post">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            <input type="hidden" name="_method" value="DELETE">
        </form>
    @endsection
    
    
    @section("myscript")
      <script type="text/javascript">
            function doDel(id){
                if(confirm('确定要删除吗？')){
                    $("#mydeleteform").attr("action","{{url('admin/user_vip')}}/"+id).submit(); 
                }
            }
      </script>
    @endsection