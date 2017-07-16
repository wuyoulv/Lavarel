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
            <li class="active">编辑会员信息</li>
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
                  <h3 class="box-title"><i class="fa fa-plus"></i> 编辑会员信息</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form action="{{URL('admin/user')}}/{{ $user->id }}" method="post" class="form-horizontal">
                  <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                  <input type="hidden" name="_method" value="put">
                  <div class="box-body">
                    
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">账号：</label>
                      <div class="col-sm-4">
                      <input readonly id="inputEmail3" placeholder="账号" type="text" name="account" class="form-control" value="{{ $user->account }}"/>
                      
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">头像：</label>
                      <div class="col-sm-4">
                      <img width="60" src="{{ URL('uploads') }}/{{$user->picname}}"/>
                      
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">真实姓名：</label>
                      <div class="col-sm-4">
                      <input readonly id="inputEmail3" placeholder="真实姓名" type="text" name="name" class="form-control" value="{{ $user->name }}"/>
                      
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">生日：</label>
                      <div class="col-sm-4">
                      <input readonly id="inputEmail3" placeholder="生日" type="text" name="birthday" class="form-control" value="{{ $user->birthday }}"/>
                      
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">性别：</label>
                      <div class="col-sm-4">
                        <input type="radio" readonly name="sex" value="1" @if ($user->sex == 1) checked @endif>男  &nbsp; &nbsp; 
                        <input type="radio" readonly name="sex" value="2" @if ($user->sex == 2) checked @endif>女
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">电话：</label>
                      <div class="col-sm-4">
                      <input readonly id="inputEmail3" placeholder="电话" type="text" name="tel" class="form-control" value="{{ $user->tel }}"/>
                      
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">邮箱：</label>
                      <div class="col-sm-4">
                      <input readonly id="inputEmail3" placeholder="邮箱" type="text" name="email" class="form-control" value="{{ $user->email }}"/>
                      
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">地址：</label>
                      <div class="col-sm-4">
                      <input readonly id="inputEmail3" placeholder="地址" type="text" name="address" class="form-control" value="{{ $user->address }}"/>
                      
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">月数：</label>
                      <div class="col-sm-4">
                      <input  id="inputEmail3" placeholder="月数" type="text" name="months" class="form-control" value="{{ $user->months }}"/>
                      
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">金额：</label>
                      <div class="col-sm-4">
                      <input  id="inputEmail3" placeholder="金额" type="text" name="money" class="form-control" value="{{ $user->money }}"/>
                      
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">角色：</label>
                      <div class="col-sm-4">
                      <input type="radio"  name="role" value="1" @if ($user->role == 1) checked @endif>会员  &nbsp; &nbsp; 
                        <input type="radio"  name="role" value="2" @if ($user->role == 2) checked @endif>Vip会员
                      
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">购买时间：</label>
                      <div class="col-sm-4">
                      <input  id="inputEmail3" placeholder="购买时间" type="text" name="buy_time" class="form-control" value="{{ $user->buy_time }}"/>
                      
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">到期时间：</label>
                      <div class="col-sm-4">
                      <input  id="inputEmail3" placeholder="到期时间" type="text" name="dead_line" class="form-control" value="{{ $user->dead_line }}"/>
                      
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">登陆时间：</label>
                      <div class="col-sm-4">
                      <input  id="inputEmail3" placeholder="登陆时间" type="text" name="login_time" class="form-control" value="{{ $user->login_time }}"/>
                      
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">上次登陆时间：</label>
                      <div class="col-sm-4">
                      <input  id="inputEmail3" placeholder="上次登陆时间" type="text" name="last_time" class="form-control" value="{{ $user->last_time }}"/>
                      
                      </div>
                    </div>
                    
					
                      
                      
                    </div>
                  </div><!-- /.box-body -->
                  <div class="box-footer">
				    <div class="col-sm-offset-2 col-sm-1">
						<button type="submit" class="btn btn-primary">修改</button>
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