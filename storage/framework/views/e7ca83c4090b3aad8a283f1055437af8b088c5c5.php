<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>注册</title>
		<link rel="stylesheet" href="<?php echo e(asset('home8/css/reset.css')); ?>" />
		<link rel="stylesheet" href="<?php echo e(asset('home8/css/common.css')); ?>" />
	</head>
	<body>
		<div class="wrap login_wrap">
			<div class="content">
				
				<div class="logo"></div>
				
				<div class="login_box">	
					
					<div class="login_form">
						<div class="login_title">
							注册
						</div>
						<form action="<?php echo e(URL('/home/createUser')); ?>" method="post" id='123' >
							<?php echo e(csrf_field()); ?>

							<div class="form_text_ipt" style="width:60;">
								<input name="account" type="text" placeholder="手机号" onblur="sendMobileCode()" >
                                
							</div>
                            <?php if(session('status')): ?>
                                <div class="alert alert-success">
                                    <?php echo e(session('status')); ?>

                                </div>
                            <?php endif; ?>
							<div class="ececk_warning"><span>数据不能为空</span></div>
                            <div class="form_text_ipt">
								<input name="code" type="text" placeholder="验证码">
							</div>
							<div class="ececk_warning"><span>数据不能为空</span></div>
							<div class="form_text_ipt">
								<input name="password" type="password" placeholder="密码">
							</div>
							<div class="ececk_warning"><span>数据不能为空</span></div>
							<div class="form_text_ipt">
								<input name="repassword" type="password" placeholder="重复密码">
							</div>
							<div class="ececk_warning"><span>数据不能为空</span></div>
							<div class="form_btn">
								<button type="button" onclick="checkUser();" >注册</button>
							</div>
							<div class="form_reg_btn">
								<span>已有帐号？</span><a href="/home/login">马上登录</a>
							</div>
                            
                            
                            
                        
                            
                            
                            
						</form>
						
						</div>
					</div>
				</div>
			</div>
		</div>
		<script type="text/javascript" src="<?php echo e(asset('home8/js/jquery.min.js')); ?>" ></script>
		<script type="text/javascript" src="<?php echo e(asset('home8/js/common.js')); ?>" ></script>
        <script>
            function sendMobileCode()
                {
                    //alert('ok')
                    var tel = $("input[name='account']").val();
                    //alert(tel);
                    $.ajax({
                        url:'/home/sendSms',
                        type:"get",
                        data:'account='+tel,
                        dataType:'json',
                        headers: {'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')},
                        success:function(data){
                            alert(data);
                        },
                        error:function(){
                            alert('111此账号已存在！');
                        }
                    })
                }

            function checkUser(){
               //var result = document.getElementById("userid").value;
               //var password = document.getElementById("passid").value;

               /* if(result == ""  ){
                 alert("用户名不能为空");
                 return false;
               }
               if(password == ""  ){
                alert("密码不能为空");
                 return false;
               } */
              document.getElementById("123").submit();
            }
        </script>
	</body>
</html>
