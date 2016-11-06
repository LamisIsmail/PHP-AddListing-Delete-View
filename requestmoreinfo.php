<?php
include "include/functionlist.php";
$userid="1";
$username = "goAdMobiDemo";
if (!$_GET['listid'])
{
$listid= "1574865";
//$_GET["listid"] = "1574865";;
}
else
{
$listid = $_GET["listid"];
}

//$_GET["qrrequest"]= "1";

if ($_GET["qrrequest"] == "1")
{
 addonetoqrfield($_GET["listid"]);
}



?>


<HTML xmlns="http://www.w3.org/1999/xhtml"><HEAD>
<title>goAdMobi Dealership DEMO</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0, maximum-scale=1.0">
<link rel="apple-touch-icon" href="images/mini_57.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/logo-114.png">
<link rel="apple-touch-startup-image" href="images/startup.png">
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="images/site.css" media="screen">


</HEAD>
<BODY>
<DIV class=page id=wrapper>
 <div id="header">
 <a href="" id="logo">

GoadMobi Dealership</a>
</div>
<DIV id=main>
<DIV class=car_detail>
<?php getlistinfobyid($listid); ?>
<form action='requestmoreinfo.php' method="post">
<label>Email Address:</label><input type="text" name='email' >
<input type="button" value="Send Request"></form>
</form>

<ul class="menu">
    <li><a href="tel:6042100606">call 604-210-0606</a></li>
    <li><a href="requestmoreinfo.php?listid=<?php echo $listid;?>" class="noeffect">Request more info </a></li>
    <li><a href="drivetest.php?listid=<?php echo $listid;?>">Schedule a test drive</a></li>
    <li><a href="emaillistfreind.php?listid=<?php echo $listid;?>">Email to a freind</a></li>
</ul>
<BR style="CLEAR: both">
<img src="images/social-link.png" alt="sociallink" border="0" usemap="#Map">
<map name="Map"><area shape="rect" coords="8,6,69,65" href="http://www.facebook.com" target="_blank">
<area shape="rect" coords="78,6,144,64" href="http://www.twitter.com">
<area shape="rect" coords="151,5,222,65" href="#"></map></DIV>
<BR style="CLEAR: both">
<div id="footer">
<BR>ALL RIGHTS RESERVED<BR>
<a href="http://www.goadmobi.com">Powered by www.goAdMobi.com</a>
</div>

</BODY></HTML>
