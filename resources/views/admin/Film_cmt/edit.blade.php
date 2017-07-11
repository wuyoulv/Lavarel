@extends('admin.base')
    @section('content')
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            <i class="fa fa-calendar"></i>
      编辑影片评论
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> 首页</a></li>
            <li><a href="#">视频评论管理</a></li>
            <li class="active">编辑影片评论</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- right column -->
            <div class="col-md-12">
              <!-- Horizontal Form -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title"><i class="fa fa-plus"></i> 编辑评论信息</h3>
                </div><!-- /.box-header -->
                <!-- form start --> 
                @foreach($cmt as $v)

                <form action="{{url('admin/cmt/update/')}}" method="post" class="form-horizontal">
                  <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                  <div class="box-body">
                  
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">评论ID：</label>
                      <div class="col-sm-4">
                        <input type="text" disabled="disabled"   class="form-control" id="inputEmail3" placeholder="{{$v->id}}">
                        <input type="hidden" name="id" value="{{$v->id}}">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">用户ID：</label>
                      <div class="col-sm-4">
<<<<<<< HEAD
                        <input type="text" disabled="disabled" name="user" class="form-control" id="inputEmail3" value="{{$v->name}}" placeholder="">
=======
                        <input type="text" name="userid" class="form-control" id="inputEmail3" value="{{$v->userid}}" placeholder="">
>>>>>>> 34e02aa2d93e2a7dd7fe46e83d93cf50bb54022b
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">评论时间：</label>
                      <div class="col-sm-4">
<<<<<<< HEAD
                        <input type="text" disabled="disabled"   class="form-control" id="inputEmail3" placeholder="{{$v->time}}">
                    </div>
=======
                        <input type="text" name="filmid" class="form-control" id="inputEmail3" value="{{$v->filmid}}" placeholder="">
                      </div>
>>>>>>> 34e02aa2d93e2a7dd7fe46e83d93cf50bb54022b
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">视频名：</label>
                      <div class="col-sm-4">
                        <input type="text" disabled="disabled" name="title" class="form-control" id="inputEmail3" value="{{$v->title}}" placeholder="">
                      </div>
                    </div>
 
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">评论内容：</label>
                      <div class="col-sm-4">
                        <input type="textarea" name="text" class="form-control" id="inputEmail3" value="{{$v->text}}" placeholder="">
                      </div>
                    </div>
   
                  </div><!-- /.box-body -->
                  <div class="box-footer">
            <div class="col-sm-offset-2 col-sm-1">
            <button type="submit" class="btn btn-primary">保存</button>
                    </div>
          <div class="col-sm-1">
            <button type="submit" class="btn btn-primary">重置</button>
          </div>
          @endforeach
                  </div><!-- /.box-footer -->
                </form>
        <div class="row"><div class="col-sm-12">&nbsp;</div></div>
              </div><!-- /.box -->
       
            </div><!--/.col (right) -->
          </div>   <!-- /.row -->
        </section><!-- /.content -->
    @endsection