<?php session_start();
include"koneksi.php";
	$uu=mysql_query("select * from user where nip='$_SESSION[nip]'");
		$aha=mysql_fetch_array($uu);
if(!session_is_registered("nip")){
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en"><head>
    <!--
    Created by Artisteer v2.1.0.16090
    Base template (without user's data) checked by http://validator.w3.org : "This page is valid XHTML 1.0 Transitional"
    -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
    <title>Aplikasi</title>
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
    <script type="text/javascript" src="js/script.js"></script>

    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
    <!--[if IE 6]><link rel="stylesheet" href="style.ie6.css" type="text/css" media="screen" /><![endif]-->
    <!--[if IE 7]><link rel="stylesheet" href="style.ie7.css" type="text/css" media="screen" /><![endif]-->
    <style>
	/* Start tables */

.tbls table, table.tbls
{
	border-collapse: collapse;
	margin: 1px;
	width:auto;
}

.tbls table, table.tbls .tbls tr, .tbls th, .tbls td
{
	background-color:Transparent;
}

.tbls th, .tbls td
{
	padding: 2px;
	border: solid 1px #5ABEE2;
	vertical-align: top;
}

.tbls th
{
	text-align:center;
	vertical-align:middle;
	padding: 7px;
}
#all{
	background: -webkit-gradient(linear, left top, left bottom, from(#a2c4d5), to(#ffffff)); /* CSS gradient */
	background: -moz-linear-gradient(top, #a2c4d5, #ffffff) no-repeat; /* CSS gradient */
	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#a2c4d5', endColorstr='#ffffff'); /* CSS gradient ie7 */ 
	-ms-filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#a2c4d5', endColorstr='#ffffff'); /* CSS gradient ie8 */
}
#dates {
	position:absolute;
	width:350px;
	margin-top:120px;
	azimuth:left;
	left:0px;
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

/* Finish tables */
	</style>
</head>
<body id="all">
<div class="PageBackgroundSimpleGradient">
    </div>
    <div class="PageBackgroundGlare">
        <div class="PageBackgroundGlareImage"></div>
    </div>
   
    <div class="Main">
    
        <div class="Sheet">
            <div class="Sheet-tl"></div>
            <div class="Sheet-tr"></div>
            <div class="Sheet-bl"></div>
            <div class="Sheet-br"></div>
            <div class="Sheet-tc"></div>
            <div class="Sheet-bc"></div>
            <div class="Sheet-cl"></div>
            <div class="Sheet-cr"></div>
            <div class="Sheet-cc"></div>
            <div class="Sheet-body">
              <div class="Header">
              
                    <div class="Header-png"></div>
                    <div class="Header-jpeg"></div> 
                    <div id="dates"><div id="the-time">00:00:00</div></div></div>
                    
        <div align="center" id="content">
        
              </div>
             
                <div class="nav">
                	<div class="l"></div>
                    
                	<div class="r"></div>
                    
                	<ul class="artmenu">
                		<li><a href="index.php" class="{ActiveItem}"><span class="l"></span><span class="r">
                        </span><span class="t">Home</span></a></li>
                		
                		 <li><a href="?page=login"><span class="l"></span><span class="r"></span><span class="t">Login</span></a></li>
                	</ul>
                </div>
                <div class="contentLayout">
                    <div class="content" align="center">
                          <?php 
							if(isset($_GET['page'])){
							  include("page.php");
							}
							else{
								include("home.php");
							}
							?>
                    </div>
                </div>
				<p><br>
				    <br>
				
			  </p>
				<p>&nbsp;</p>
				
			
				<p><br>
				  <br>
				  <br>
				  <br>
			        </p>
				<div class="cleared"></div><div class="Footer">
                    <div class="Footer-inner">
                        <a href="#" class="rss-tag-icon" title="RSS"></a>
                        <div class="Footer-text">
                            <p>
                                Copyright &copy; 2016 ---.Sistem Informasi Kepegawaian PT. Dasrat Sarana Arang Sejati</p>
                        </div>
                    </div>
                    <div class="Footer-background"></div>
                </div>
            </div>
        </div>
        <div class="cleared"></div>
    </div>
</html>
<?php
}
else{
if($aha[hak_akses]=="admin"){
		$_SESSION['nip']=$data['nip'];
		echo "<meta http-equiv=\"refresh\" content=\"0; url=uadmin.php\">";
	}
	else if($aha[hak_akses]=="HRD"){
		$_SESSION['nip']=$data['nip'];
		echo "<meta http-equiv=\"refresh\" content=\"0; url=uhrd.php\">";
	}
	else if($aha[hak_akses]=="mandor"){
		$_SESSION['nip']=$data['nip'];
		echo "<meta http-equiv=\"refresh\" content=\"0; url=umandor.php\">";
	}
	else if($aha[hak_akses]=="keuangan"){
		$_SESSION['nip']=$data['nip'];
		echo "<meta http-equiv=\"refresh\" content=\"0; url=ukeuangan.php\">";
	}
}
?>