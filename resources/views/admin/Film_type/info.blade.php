@extends('admin.base')
    @section('content')
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            <i class="fa fa-calendar"></i>
      添加视频类型
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> 首页</a></li>
            <li><a href="#">视频分类管理</a></li>
            <li class="active">添加视频分类</li>
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
                  <h3 class="box-title"><i class="fa fa-plus"></i> 编辑视频信息</h3>
                </div><!-- /.box-header -->
                <!-- form start --> 

                <form action="{{url('admin/type/info/')}}" method="post" class="form-horizontal">
                  <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                  <div class="box-body">
                  
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">分类：</label>
                      <div class="col-sm-4">
                        <select name='type_pid' class="form-control">
                          <option value='0'>==顶级分类==</option>
                          @foreach($list as $v)
                          <option value='{{$v->id}}'>{{$v->type}}</option>
                         @endforeach
                        </select>
                        
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">添加分类：</label>
                      <div class="col-sm-4">
                        <input type="text" name="type" class="form-control" id="inputEmail3" value="" placeholder="类型">
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
          
                  </div><!-- /.box-footer -->
                  @if(count($errors)>0)
                  <div class="mark"><h5>&nbsp;&nbsp;&nbsp;<i class="fa fa-warning text-yellow"></i> @foreach($errors->all() as $error)
                        {{$error}}
                       @endforeach
                  </h5><div></div></div>
                  @endif
                </form>

              </div><!-- /.box -->
       
            </div><!--/.col (right) -->
          </div>   <!-- /.row -->
        </section><!-- /.content -->
    @endsection