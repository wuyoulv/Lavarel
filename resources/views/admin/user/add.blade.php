@extends('admin.base')
    @section('content')
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            <i class="fa fa-calendar"></i>
			会员信息管理
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> 首页</a></li>
            <li><a href="#">会员信息管理</a></li>
            <li class="active">添加会员信息</li>
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
                  <h3 class="box-title"><i class="fa fa-plus"></i> 添加会员信息</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form action="{{url('admin/user')}}" method="post" class="form-horizontal">
                  <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                  <div class="box-body">
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">账号：</label>
                      <div class="col-sm-4">
                      <input  id="inputEmail3" placeholder="姓名" type="text" name="account" class="form-control"/>
                      
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">密码：</label>
                      <div class="col-sm-4">
                      <input  id="inputEmail3" placeholder="密码" type="text" name="password" class="form-control"/>
                      
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">头像：</label>
                      <div class="col-sm-4">
                      <input  id="inputEmail3" placeholder="姓名" type="text" name="picname" class="form-control"/>
                      
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">真实姓名：</label>
                      <div class="col-sm-4">
                      <input  id="inputEmail3" placeholder="姓名" type="text" name="name" class="form-control"/>
                      
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">生日：</label>
                      <div class="col-sm-4">
                      <input  id="inputEmail3" placeholder="姓名" type="text" name="birthday" class="form-control"/>
                      
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">性别：</label>
                      <div class="col-sm-4">
                        <input type="radio"  name="sex" value="1">男  &nbsp; &nbsp; 
                        <input type="radio"  name="sex" value="2">女
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">电话：</label>
                      <div class="col-sm-4">
                      <input  id="inputEmail3" placeholder="姓名" type="text" name="tel" class="form-control"/>
                      
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">邮箱：</label>
                      <div class="col-sm-4">
                      <input  id="inputEmail3" placeholder="姓名" type="text" name="email" class="form-control"/>
                      
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">地址：</label>
                      <div class="col-sm-4">
                      <input  id="inputEmail3" placeholder="姓名" type="text" name="address" class="form-control"/>
                      
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">月数：</label>
                      <div class="col-sm-4">
                      <input  id="inputEmail3" placeholder="姓名" type="text" name="months" class="form-control"/>
                      
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">金额：</label>
                      <div class="col-sm-4">
                      <input  id="inputEmail3" placeholder="姓名" type="text" name="money" class="form-control"/>
                      
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">角色：</label>
                      <div class="col-sm-4">
                      <input  id="inputEmail3" placeholder="姓名" type="text" name="role" class="form-control"/>
                      
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">购买时间：</label>
                      <div class="col-sm-4">
                      <input  id="inputEmail3" placeholder="姓名" type="text" name="buy_time" class="form-control"/>
                      
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">到期时间：</label>
                      <div class="col-sm-4">
                      <input  id="inputEmail3" placeholder="姓名" type="text" name="dead_line" class="form-control"/>
                      
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">登陆时间：</label>
                      <div class="col-sm-4">
                      <input  id="inputEmail3" placeholder="姓名" type="text" name="login_time" class="form-control"/>
                      
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">上次登陆时间：</label>
                      <div class="col-sm-4">
                      <input  id="inputEmail3" placeholder="姓名" type="text" name="last_time" class="form-control"/>
                      
                      </div>
                    </div>
                    
					
                      
                      
                    </div><!-- /.box-body -->
                  <div class="box-footer">
				    <div class="col-sm-offset-2 col-sm-1">
						<button type="submit" class="btn btn-primary">添加</button>
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