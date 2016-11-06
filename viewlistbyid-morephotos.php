<?php
include "include/functionlist.php";
$userid="1";
$username = "goAdMobiDemo";
$listid= "1574865";

$_GET["listid"] = "1574865";;
$_GET["qrrequest"]= "1";

if ($_GET["qrrequest"] == "1")
{
 addonetoqrfield($_GET["listid"]);
}

$listid= $_GET["listid"];
if (!$listid)
{
 $listid="not found";
 $message ="List not found, please contact admin for information";
 //exit;
}
else
{
$listid= "1574865";
//start to get infor for that list!

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
 <div id="header"><a href="" id="logo">GoadMobi Dealership</a>
		<a href="#" id="top-menu" onClick="history.go(-1)" >GO BACK</a></div>
<DIV id=main>
<DIV class="content clearfix">

<DIV class=wallpaper_row>
<?php
echo $_GET["folder"];
getinternalpictures($listid);


?>
</div>
</DIV>


<ul class="menu">
    <li><a href="tel:6042100606">call 604-210-0606</a></li>
    <li><a href="http://www.goadmobi.com" class="noeffect">Request more info </a></li>
    <li><a href="http://www.goadmobi.com">Schedule a test drive</a></li>
    <li><a href="http://www.goadmobi.com">Email to a freind</a></li>
    <li><a href="http://www.goadmobi.com">Return to my result</a></li>
    <li><a href="http://www.goadmobi.com">Search again</a></li>
</ul>
</DIV>
<BR style="CLEAR: both">
<div id="footer">
<BR>ALL RIGHTS RESERVED<BR>
<a href="http://www.goadmobi.com">Powered by www.goAdMobi.com</a>
</div>

</BODY></HTML>
