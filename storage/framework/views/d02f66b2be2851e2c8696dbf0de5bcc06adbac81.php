<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>会员登陆</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
     <!-- Bootstrap 3.3.4 -->
    <link href="<?php echo e(asset('myadmin/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="<?php echo e(asset('myadmin/bootstrap/css/font-awesome.min.css')); ?>" rel="stylesheet" type="text/css" /> 
    <!-- Theme style -->
    <link href="<?php echo e(asset('myadmin/dist/css/AdminLTE.min.css')); ?>" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="<?php echo e(asset('myadmin/plugins/iCheck/square/blue.css')); ?>" rel="stylesheet" type="text/css" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="<?php echo e(asset('myadmin/bootstrap/js/html5shiv.min.js')); ?>"></script>
        <script src="<?php echo e(asset('myadmin/bootstrap/js/respond.min.js')); ?>"></script>
    <![endif]-->
  </head>
  <body class="login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href="#"><b>管理员登陆页</b></a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <?php if(session("msg")): ?>
            <p class="login-box-msg" style="color:red;"><?php echo e(session("msg")); ?></p>
        <?php else: ?>
            <p class="login-box-msg">Sign in to start your session</p>
        <?php endif; ?>
        <form action="<?php echo e(url('admin/dologin')); ?>" method="post">
          <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
          <div class="form-group has-feedback">
            <input type="email" class="form-control" name="account" placeholder="Account"/>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" name="password" class="form-control" placeholder="Password"/>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
          <div class="col-xs-6"> 
              <div class="form-group has-feedback" style="width:140px;">
                <input type="text" name="mycode" class="form-control" placeholder="code"/>
                <span class="glyphicon glyphicon-th form-control-feedback"></span>
              </div>
          </div>
          <div class="col-xs-6">
              <img src="<?php echo e(url('admin/getcode')); ?>" onclick="this.src='<?php echo e(url('admin/getcode')); ?>?id='+Math.random(); " width="100" height="34"/>
          </div>
          </div>
          <div class="row">
            <div class="col-xs-8">    
              <div class="checkbox icheck">
                <label>
                  <input type="checkbox"> Remember Me
                </label>
              </div>                        
            </div><!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">登 陆</button>
            </div><!-- /.col -->
          </div>
        </form>

        <a href="#" style="font-size:12px;">忘记密码</a>&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="register.html" class="text-center" style="font-size:12px;">注册会员</a>

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <!-- jQuery 2.1.4 -->
    <script src="<?php echo e(asset('myadmin/plugins/jQuery/jQuery-2.1.4.min.js')); ?>"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="<?php echo e(asset('myadmin/bootstrap/js/bootstrap.min.js')); ?>" type="text/javascript"></script>  
    <!-- iCheck -->
    <script src="<?php echo e(asset('myadmin/plugins/iCheck/icheck.min.js')); ?>" type="text/javascript"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
  </body>
</html>
