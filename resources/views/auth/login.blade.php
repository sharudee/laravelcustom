

















<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Security Login</title>

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

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=8; IE=EmulateIE8; IE=Edge" />
		<![endif]-->
		
		<!--Rounded border on IE-->
        <style>
            border-top-right-radius:2px;
            border-top-left-radius:2px;
            border-bottom-right-radius:2px;
            border-bottom-left-radius:2px;
        </style>
		
        <title>KTB netbank : Internet Banking</title>
        
		<link href="resources/themes/themeOne/css/login-min.css?r=2015120401" rel="stylesheet" type="text/css" />
		<link href="resources/themes/themeOne/css/ui/ktb.tablerow-min.css?r=2015120401" rel="stylesheet" type="text/css" />
		<link href="resources/themes/themeOne/css/redmond/jquery-ui-1.10.3.custom-min.css?r=2015120401" rel="stylesheet" type="text/css" />
		<!--...Virtual Keyboard (CSS)-->
		<!--[if lte IE 8]>
			<link href="resources/themes/themeOne/css/loginie8-min.css?r=2015120401" rel="stylesheet" type="text/css" />
		<![endif]-->
          

   </head>


    <body id="loginpage">
    	<div id="ModalLoading" style="border-radius:10px;display: none;">
			<br /> <img src="resources/themes/themeOne/images/loading135.gif" /><br />
			กรุณารอสักครู่<br /> <br />
		</div>
		<div id="warningIE" style="display: none;">
	    	<div style="float:left margin:0 auto;width:90%; border-bottom:1px solid #00a4e4; padding:10px 0; color:#00a4e4; text-shadow:0 2px 2px #ffffff,0 3px 5px rgba(255,255,255,.5);">
				<label id="warnheader"></label></br>
					        <span id="versionie"></span>
	        </div>
	        <div style=" margin:0 auto;width:90%; height:250px; border-top:1px solid #ffffff; padding:20px 0 0 0; color:#464646; text-align:left;">
	        	<span style="font-size:16px;">
	         		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>
	         		<label id="warncontent"></label></br>
	         		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	         		<label id="warncontent2"></label>
	         		<ul>
	         			<li><label id="warnli1"></label></li>
			 			<li><label id="warnli2"></label></li>
			 			<li><label id="warnli3"></label></li>
			 			<li><label id="warnli4"></label></li>
	         		</ul>
	         		</b>
	         		
					
			 	</span>			 	
	         </div>
	         <div style=" width:90%; position: relative; margin:0 auto;">
	         <span style="font-size:20px;"><a href="javascript:closewaringIE();" class="btnpopupblue" style="color:#FFF">ปิด</a></span>
	         </div>
	    </div>
	    
		<div id="ModalMessage" style="display: none;">
	    	<div style=" margin:0 auto;width:90%; border-bottom:1px solid #00a4e4; padding:10px 0; color:#00a4e4; text-shadow:0 2px 2px #ffffff,0 3px 5px rgba(255,255,255,.5);">
	        Notice
	        </div>
	        <div style=" margin:0 auto;width:90%; height:250px; border-top:1px solid #ffffff; padding:20px 0 0 0; color:#464646; text-align:left;">
	        	<span style="font-size:16px;">
	         		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>เพื่อความปลอดภัยในการทำธุรกรรมผ่าน Internet ** โปรดยืนยันการสมัครใช้บริการอีกครั้งได้ 2 ช่องทางดังนี้</b><br/><br/>
					1. สาขาของธนาคาร โดยนำบัตรประชาชนและสมุดบัญชีติดต่อเจ้าหน้าที่สาขา<br/><br/>
					2. ตู้ ATM/ADM โดยลงทะเบียนหมายเลขโทรศัพท์มือถือ เพื่อขอรับรหัส TOP<br/><br/>
					
					
					
			 	</span>
	         </div>
	         <div style=" width:90%; position: relative; margin:0 auto;">
	         <span style="font-size:20px;"><a href="javascript:closeMsg();" class="btnpopupblue" style="color:#FFF">ปิด</a></span>
	         <img src="resources/themes/themeOne/images/netbankVDOcall.png" width="130" height="28" style="cursor:pointer;vertical-align:middle" onclick="BHActivateIdForm.videoCallFromNovice()" />
	         </div>
	    </div>
	    
	    
	    
        <div id="headBg">
            <div id="headTitleWeb">
                <!-- <div id="language"><img src="resources/themes/themeOne/images/icons/lang/langTH.png" onclick="change_language('th')" style="cursor:pointer" /><img src="resources/themes/themeOne/images/icons/lang/langEN.png" onclick="change_language('en')" style="cursor:pointer" /></div> -->
                <div id="language"><div onclick="change_language('th')" class="thai"></div><div onclick="change_language('en')" class="eng"></div></div>
                <div id="header">
                	
                	<div id="divLogin">
                		<div id="hBoxBanner">
	                        <iframe id="iframeBanner" src="http://www.jaspalhome.com/jaspalhome/th" width="650" height="450" allowTransparency="true" frameborder="0" scrolling="no"></iframe>
	                    </div>
	                  
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
					
					    <!--TITLE--><h1>Security Login</h1><!--END TITLE-->
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
					
					    <!--TITLE--><h1>Security Login</h1><!--END TITLE-->
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
                	</div>
                	<div id="divInformation"></div>
                	<div id="divActivitySummary"></div>

         <div id="bContent">
            <div id="dataFrame">
				
				<FONT SIZE = 7 > Mattress Consignment System </FONT> 
            </div>
        </div>
       

        </div>	
		
  </body> 

  
                
                

