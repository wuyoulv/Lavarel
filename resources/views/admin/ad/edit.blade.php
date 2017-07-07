@extends('admin.base')


@section('content')
<!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            <i class="fa fa-calendar"></i>
			角色信息管理
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> 首页</a></li>
            <li><a href="#">信息管理</a></li>
            <li class="active">编辑信息</li>
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
                  <h3 class="box-title"><i class="fa fa-plus"></i> 编辑角色信息</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                 <form class="form-horizontal" action="{{URL('admin/admin/ad')}}/{{ $vo->id }}" method="post" enctype= multipart/form-data>
                        <input type="hidden" name="_method" value="put">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="userid" value="{{ $vo->userid }}">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">角色名称</label>
                      <div class="col-sm-4">
                        <input type="text" name="title" class="form-control" value="{{ $vo->title }}">
                      </div>
                    </div>
                     <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">图片</label>
                      <div class="col-sm-4">
                      <img src="{{ asset("/uploads/$vo->picname")}}" alt="">
                        <input type="file" name="picname" class="form-control" value>
                      </div>
                    </div>
                     <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">网站网址</label>
                      <div class="col-sm-4">
                        <input type="text" name="web_address" class="form-control" value="{{ $vo->web_address }}">
                      </div>
                    </div>
                     <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">添加时间</label>
                      <div class="col-sm-4">
                        <input type="text" name="addtime" class="form-control" value="{{ $vo->addtime }}">
                      </div>
                    </div>
                     <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">到期时间</label>
                      <div class="col-sm-4">
                        <input type="text" name="deadline" class="form-control" value="{{ $vo->deadline }}">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">当前状态</label>
                      <div class="col-sm-4">
                        <label class="radio-inline">
                          <input type="radio" name="status" id="inlineRadio1" {{ ($vo->status == 0)?"checked":"" }} value="0"> 启用
                        </label>
                        <label class="radio-inline">
                          <input type="radio" name="status" id="inlineRadio2" {{ ($vo->status == 1)?"checked":"" }} value="1"> 禁用
                        </label>
                      </div>
                    </div>
                  </div><!-- /.box-body -->
                  <div class="box-footer">
				    <div class="col-sm-offset-2 col-sm-1">
						<button type="submit" class="btn btn-primary" >保存</button>
                    </div>
					<div class="col-sm-1">
						<button type="submit" class="btn btn-primary">重置</button>
					</div>
                  </div><!-- /.box-footer -->
                </form>
				<div class="row"><div class="col-sm-12">&nbsp;</div></div>
				<div class="row"><div class="col-sm-12">
                <br/>
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                        </ul>
                    </div>
                @endif
                </div></div>
              </div><!-- /.box -->
       
            </div><!--/.col (right) -->
          </div>   <!-- /.row -->
        </section><!-- /.content -->
        
    @endsection
  