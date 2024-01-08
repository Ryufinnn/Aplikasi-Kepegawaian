         <script language="javascript" src="js/time.js"></script>
<script language="javascript" src="js/jquery-1.5.1.min.js"></script>
<script language="javascript" src="js/jquery.ui.core.js"></script>
<script language="javascript" src="js/jquery.ui.datapicter.js"></script>
<script language="javascript" src="js/jquery.ui.widget.js"></script>
<script language="javascript">
	$(function(){
		$("#tanggal").datepicker({
			changeMonth: true,
			changeYear: true
		});
	});
</script>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en"><head>
    <!--
    Created by Artisteer v2.1.0.16090
    Base template (without user's data) checked by http://validator.w3.org : "This page is valid XHTML 1.0 Transitional"
    -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
    <title>Aplikasi Penggajian</title>

    <script type="text/javascript" src="js/script.js"></script>
<link href="login/login-box.css" rel="stylesheet" type="text/css" />
<style>
#all{
	background: -webkit-gradient(linear, left top, left bottom, from(#a2c4d5), to(#ffffff)); /* CSS gradient */
	background: -moz-linear-gradient(top, #a2c4d5, #ffffff) no-repeat; /* CSS gradient */
	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#a2c4d5', endColorstr='#ffffff'); /* CSS gradient ie7 */ 
	-ms-filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#a2c4d5', endColorstr='#ffffff'); /* CSS gradient ie8 */
}
/* Time */
#dates {
	position:absolute;
	width:350px;
	margin-top:0px;
	azimuth:left;
	left:583px;
}
#the-day{
	position:absolute;
	color:#FFF;
	padding:7px;
	-moz-border-radius:4px;
	-webkit-border-radius:4px;
}
#the-time{
	position:absolute;
	color:#FFF;
	left:140px;
	width:50px;
	padding:7px;
	-moz-border-radius:4px;
	-webkit-border-radius:4px;
}

</style>

		  <div class="contentLayout">
                    <div class="content">
                        <div class="Post">
                         <div style="padding: 10px 0 0 0px;" align="center">
<div id="login-box">

<H2>Login</H2>
<!--Lorem Ipsum is simply dummy text of the printing and typesetting industry.
<br />
--><br />
<form method="post" action="logs.php?act=submit">
<div id="login-box-name" style="margin-top:20px;">Username:</div><div id="login-box-field" style="margin-top:20px;">
<input name="nip" class="form-login" title="Masukan Username" size="30" maxlength="2048"  onBlur="if(this.value=='') this.value='Masukan nip';" onFocus="if(this.value=='Masukan NIP') this.value='';"  /></div>
<div id="login-box-name">Password:</div><div id="login-box-field">
<input name="password" type="password" class="form-login" title="Masukan Password" size="30" maxlength="2048"  onBlur="if(this.value=='') this.value='000';" onFocus="if(this.value=='000') this.value='';" /></div>
<br />
<span class="login-box-options">
<input type="checkbox" name="1" value="1"> Remember Me <a href="#" style="margin-left:30px;">Forget password?</a></span>
<br />
<br />
<input type="image" src="login/images/login-btn.png" width="103" height="42" style="margin-left:90px;" />
</div></form>

</div>
                        </div>
                    </div>
                </div>