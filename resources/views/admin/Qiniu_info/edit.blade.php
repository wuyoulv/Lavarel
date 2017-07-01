@extends('admin.base')
    @section('content')
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            <i class="fa fa-calendar"></i>
			七牛云视频管理
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> 首页</a></li>
            <li><a href="#">七牛云视频管理</a></li>
            <li class="active">编辑视频信息</li>
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
                  <h3 class="box-title"><i class="fa fa-plus"></i>修改视频信息</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form action="{{URL('admin/qiniu_info')}}/{{ $data->id }}" method="post" class="form-horizontal">
                  <input type="hidden" name="_method" value="put">
                  <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                  <div class="box-body">

                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">uid：</label>
                      <div class="col-sm-4">
                        <input type="text" name="uid" class="form-control" id="inputEmail3" placeholder="文件号" value="{{ $data->uid }}"/>
                      </div>
                    </div>
					          <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">文件名：</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="inputPassword3" placeholder="文件名" name="fname" value="{{ $data->fname }}"/>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">键：</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="inputPassword3" placeholder="键名" name="key" value="{{ $data->key }}"/>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">上传时间：</label>
                      <div class="col-sm-4">
                        <input type="datetime-local" class="form-control" id="inputPassword3" placeholder="上传时间" name="createtime" value="{{ $data->createtime }}"/>
                      </div>
                    </div>

					          <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">描述：</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="inputPassword3" placeholder="描述" name="description" value="{{ $data->description }}"/>
                      </div>
                    </div>
                  </div>
                  <!-- /.box-body -->
                  <div class="box-footer">
				    <div class="col-sm-offset-2 col-sm-1">
						<button type="submit" class="btn btn-primary">修改</button>
                    </div>
					<div class="col-sm-1">
						<button type="reset" class="btn btn-primary">重置</button>
					</div>
                  </div><!-- /.box-footer -->
                </form>
				<div class="row"><div class="col-sm-12">&nbsp;</div></div>
              </div><!-- /.box -->
       
              @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

       
            </div><!--/.col (right) -->
          </div>   <!-- /.row -->
        </section><!-- /.content -->
    @endsection