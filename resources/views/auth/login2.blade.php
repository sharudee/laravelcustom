
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login Form</title>

<!--STYLESHEETS-->

<link rel="stylesheet" href="{{URL::to('resources/assets/css/style.css')}}">

<!--SCRIPTS-->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js"></script>
<!--Slider-in icons-->
<script type="text/javascript">
$(document).ready(function() {
	$(".username").focus(function() {
		$(".user-icon").css("left","-48px");
	});
	$(".username").blur(function() {
		$(".user-icon").css("left","0px");
	});
	
	$(".password").focus(function() {
		$(".pass-icon").css("left","-48px");
	});
	$(".password").blur(function() {
		$(".pass-icon").css("left","0px");
	});
});
</script>

</head>
<body>

<!--WRAPPER-->
<div class="row">
	<div class="col-xs-12 col-sm-8 col-md-8">
		<div id="wrapper">

			<!--SLIDE-IN ICONS-->
		    <div class="user-icon"></div>
		    <div class="pass-icon"></div>
		    <!--END SLIDE-IN ICONS-->

		<!--LOGIN FORM-->

		<form name="login-form" class="login-form" action="http://localhost/cos/sales/index" method="get" >

			<!--HEADER-->
				 <div class="container">
				
		                                              
					    <div class="header">
					
					    <!--TITLE--><h1>Login Form</h1><!--END TITLE-->
					    <!--DESCRIPTION--><span>กรุณาระบบ รหัสผู้ใช้งาน และ รหัสผ่าน</span><!--END DESCRIPTION-->
					    </div>
					    <!--END HEADER-->
						
						<!--CONTENT-->
					    <div class="content">
						<!--USERNAME--><input name="username" type="text" class="input username" value="Username" onfocus="this.value=''" /><!--END USERNAME-->
					    <!--PASSWORD--><input name="password" type="password" class="input password" value="Password" onfocus="this.value=''" /><!--END PASSWORD-->

					    </div>
					    <!--END CONTENT-->
					    
					    </div>
					        <div class="footer">

						    <!--LOGIN BUTTON--><input type="submit" name="submit" value="Login" class="button"  /><!--END LOGIN BUTTON-->

						    <!--REGISTER BUTTON--><input type="submit" name="submit" value="Register" class="register" /><!--END REGISTER BUTTON-->
						    </div>
					 </div>
				</div>


		    <!--END FOOTER-->
		<input type ="hidden" name="_token"  value="{{csrf_token()}}">
		</form>
		<!--END LOGIN FORM-->

		</div>
	</div>
	<div class="col-xs-12 col-sm-4 col-md-4">
		<div id="wrapper">

			<!--SLIDE-IN ICONS-->
		    <div class="user-icon"></div>
		    <div class="pass-icon"></div>
		    <!--END SLIDE-IN ICONS-->

		<!--LOGIN FORM-->

		<form name="login-form" class="login-form" action="http://localhost/cos/sales/index" method="get" >

			<!--HEADER-->
				 <div class="container">
				
		                                              
					    <div class="header">
					
					    <!--TITLE--><h1>Login Form</h1><!--END TITLE-->
					    <!--DESCRIPTION--><span>กรุณาระบบ รหัสผู้ใช้งาน และ รหัสผ่าน</span><!--END DESCRIPTION-->
					    </div>
					    <!--END HEADER-->
						
						<!--CONTENT-->
					    <div class="content">
						<!--USERNAME--><input name="username" type="text" class="input username" value="Username" onfocus="this.value=''" /><!--END USERNAME-->
					    <!--PASSWORD--><input name="password" type="password" class="input password" value="Password" onfocus="this.value=''" /><!--END PASSWORD-->

					    </div>
					    <!--END CONTENT-->
					    
					    </div>
					        <div class="footer">

						    <!--LOGIN BUTTON--><input type="submit" name="submit" value="Login" class="button"  /><!--END LOGIN BUTTON-->

						    <!--REGISTER BUTTON--><input type="submit" name="submit" value="Register" class="register" /><!--END REGISTER BUTTON-->
						    </div>
					 </div>
				</div>


		    <!--END FOOTER-->
		<input type ="hidden" name="_token"  value="{{csrf_token()}}">
		</form>
		<!--END LOGIN FORM-->

		</div>
	</div>
</div>

<!--END WRAPPER-->

<!--GRADIENT--><div class="gradient"></div><!--END GRADIENT-->

</body>
</html>

