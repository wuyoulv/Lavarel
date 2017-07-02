@extends('admin.base')
    @section('content')
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            <i class="fa fa-calendar"></i>
			VIP会员管理
          </h1>
          <ol class="breadcrumb">
            <li><a href="{{url('admin')}}"><i class="fa fa-dashboard"></i> 首页</a></li>
            <li><a href="{{url('admin/user_vip')}}">VIP会员管理</a></li>
            <li class="active">修改会员信息</li>
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
                  <h3 class="box-title"><i class="fa fa-plus"></i> 修改会员信息</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form action="{{URL('admin/user_vip')}}/{{ $user->id }}" method="post" class="form-horizontal">
                  <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                  <div class="box-body">
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">userid：</label>
                      <div class="col-sm-4">
                      <input  id="inputEmail3" placeholder="userid" type="text" name="userid" class="form-control" value=" {{ $user->userid }}"/>
                      
                      </div>
                    </div>
                    

                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">角色：</label>
                      <div class="col-sm-4">
                        <input type="radio"  name="role" {{ ($user->role == 1)?"checked":"" }} value="1">普通会员  &nbsp; &nbsp; 
                        <input type="radio"  name="role" {{ ($user->role == 2)?"checked":"" }} value="2">VIP会员
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