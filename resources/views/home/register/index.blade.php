<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>注册</title>
		<link rel="stylesheet" href="{{ asset('home8/css/reset.css')}}" />
		<link rel="stylesheet" href="{{ asset('home8/css/common.css')}}" />
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
						<form action="{{ URL('/home/createUser') }}" method="post">
							{{ csrf_field() }}
							<div class="form_text_ipt" style="width:60;">
								<input name="account" type="text" placeholder="手机号" onblur="sendMobileCode()" >
                                
							</div>
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
							
							<input type="submit" value="注册"/>
							<div class="form_btn">
								<button type="button">注册</button>
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
		<script type="text/javascript" src="{{ asset('home8/js/jquery.min.js')}}" ></script>
		<script type="text/javascript" src="{{ asset('home8/js/common.js')}}" ></script>
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
                        dataType:'text',
                        headers: {'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')},
                        success:function(data){
                            alert('a');
                        },
                        error:function(){
                            alert('b');
                        }
                    })
                }


        </script>
	</body>
</html>
