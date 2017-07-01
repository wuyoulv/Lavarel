@extends('admin.base')
@section('content')
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            影评信息表
            <small>preview of simple tables</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> 首页</a></li>
            <li><a href="#">影评预览</a></li>
           
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title"><i class="fa fa-th"></i> 影评浏览</h3>
                  <div class="box-tools">
<<<<<<< HEAD
                    <form action="{{url('admin/cmt')}}" method="get">
=======
                    <form action="{{url('admin/ad')}}" method="get">
>>>>>>> 2a434e2d444529c5cf0311df162c88a86df2f42e
                    <div class="input-group" style="width: 150px;">
                      <input type="text" name="title" class="form-control input-sm pull-right" placeholder="视频名称"/>
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
                      <th>评论ID</th>
                      <th>用户</th>
                      <th>片名</th>
                      <th>评论时间</th>
                      <th>评论内容</th>
                      <th style="width: 100px">操作</th>
                    </tr>
                    @foreach($cmt as $stu)
                        <tr>
                            <td>{{$stu->id}}</td>
                            <td>{{$stu->user}}</td>
                            <td>{{$stu->title}}</td>
                            <td>{{$stu->time}}</td>
                            <td>{{$stu->text}}</td>
                            <td> <a href="{{url('admin/cmt/del')}}/{{$stu->id}}">删除</a> | <a href="{{url('admin/cmt/edit')}}/{{$stu->id}}">编辑</a></td>
                            
                        </tr>
                    @endforeach
                  
                   
                  </table>
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                {{$cmt->appends($where)->links()}}
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