<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en"><head>
    <!--
    Created by Artisteer v2.1.0.16090
    Base template (without user's data) checked by http://validator.w3.org : "This page is valid XHTML 1.0 Transitional"
    -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
    <title>Glory Run</title>
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
<script type="text/javascript" src="js/script.js"></script>
<link rel="stylesheet" type="text/css" media="all" href="js/thickbox/thickbox.css">
<script type="text/javascript" src="js/thickbox/thickbox.js"></script>
    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
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
/* Time */
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
    <!--[if IE 6]><link rel="stylesheet" href="style.ie6.css" type="text/css" media="screen" /><![endif]-->
    <!--[if IE 7]><link rel="stylesheet" href="style.ie7.css" type="text/css" media="screen" /><![endif]-->
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
                   <div id="dates"><div id="the-day">Hari, 00 Bulan 0000</div><div id="the-time">00:00:00</div></div></div>
                    
        <div align="center" id="content">
        
              </div>
                <div class="nav">
                	<div class="l"></div>
                	<div class="r"></div>
                    
                	<ul class="artmenu">
                		<li><a href="umandor.php" class="{ActiveItem}"><span class="l"></span><span class="r"></span><span class="t">Home</span></a></li>
                		<li><a href="?page=buruh"><span class="l"></span><span class="r"></span><span class="t">Data Buruh</span></a>
<!--                			<ul>
                				<li><a href="#">Photos</a></li>
                				<li><a href="#">Press</a></li>
                			</ul>
-->                		</li>
                		<li><a href="?page=produksi"><span class="l"></span><span class="r"></span><span class="t">Data Produksi</span></a></li>
						<li><a href="?page=report"><span class="l"></span><span class="r"></span><span class="t">Data Report Buruh</span></a></li>
<!--                		<li><a href="#"><span class="l"></span><span class="r"></span><span class="t">Solutions</span></a>
                			<ul>
                				<li><a href="#">Consulting</a>
                					<ul>
                						<li><a href="#">Lorem ipsum</a> </li>
                						<li><a href="#">Dolor sit amet</a> </li>
                						<li><a href="#">Consectetuer</a> </li>
                					</ul>
                				</li>
                				<li><a href="#">Training</a></li>
                				<li><a href="#">Analysis</a></li>
                			</ul>
                		</li>
-->                		<li><a href="logout.php?umandor"><span class="l"></span><span class="r"></span><span class="t">Logout</span></a></li>
                	</ul>
                </div>
                <div class="contentLayout">
                    <div class="content" align="center">
                     <?php 
							if(isset($_GET['page'])){
							  include("page.php");
							}
							else{
								include("system/home.php");
							}
							?>
                    </div>
                </div>
                <div class="cleared"></div><div class="Footer">
                    <div class="Footer-inner">
                        <a href="#" class="rss-tag-icon" title="RSS"></a>
                       <div class="Footer-text">
                            <p>
                                Copyright &copy; 2016 ---.Aplikasi Penggajian PT. Dasrat Sarana Arang Sejati</p>
                        </div>
                    </div>
                    <div class="Footer-background"></div>
                </div>
            </div>
        </div>
        <div class="cleared"></div>
        <p class="page-footer">Website designed by <a href="http://www.hypnobusters.com/">Hypnosis MP3s</a>.</p>
    </div>
    
<div style="text-align: center; font-size: 0.75em;">Design downloaded from <a href="http://www.freewebtemplates.com/">free website templates</a>.</div></body>
</html>
