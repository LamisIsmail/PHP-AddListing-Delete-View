<?php
include "include/functionlist.php";
$userid="1";
$username = "goAdMobiDemo";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en-US" xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<head>
	<title>goAdMobi.com User cotrol panel</title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<link rel="stylesheet" href="js/fancybox/jquery.fancybox-1.3.1.css" type="text/css" media="all" />
	<!--[if IE 6]>
		<link rel="stylesheet" href="css/ie6.css" type="text/css" media="all" />
	<![endif]-->
	<link rel="shortcut icon" href="css/images/favicon.ico?cb=1" />
	<script src="js/jquery-1.4.2.js" type="text/javascript"></script>
	<script src="js/jquery.tweet.js" type="text/javascript"></script>
	<script src="js/jquery.jcarousel.js" type="text/javascript"></script>
	<script src="js/jquery.easing.1.3.js" type="text/javascript"></script>
	<script src="js/swfobject.js" type="text/javascript"></script>
	<script src="js/fancybox/jquery.fancybox-1.3.1.js" type="text/javascript"></script>	
	<script src="js/fancybox/jquery.mousewheel-3.0.2.pack.js" type="text/javascript"></script>	
	<script src="js/js-func.js" type="text/javascript"></script>
	<style>
<!--
.hide { position:absolute; visibility:hidden; }
.show { position:absolute; visibility:visible; }
.style1 {color: #CCCCCC}
.style2 {color: #FDC72A}
-->
    </style>

<SCRIPT LANGUAGE="JavaScript">

//Progress Bar script- by Todd King (tking@igpp.ucla.edu)
//Modified by JavaScript Kit for NS6, ability to specify duration
//Visit JavaScript Kit (http://javascriptkit.com) for script

var duration=3 // Specify duration of progress bar in seconds
var _progressWidth = 50;	// Display width of progress bar.

var _progressBar = "|||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||"
var _progressEnd = 5;
var _progressAt = 0;


// Create and display the progress dialog.
// end: The number of steps to completion
function ProgressCreate(end) {
	// Initialize state variables
	_progressEnd = end;
	_progressAt = 0;

	// Move layer to center of window to show
	if (document.all) {	// Internet Explorer
		progress.className = 'show';
		progress.style.left = (document.body.clientWidth/2) - (progress.offsetWidth/2);
		progress.style.top = document.body.scrollTop+(document.body.clientHeight/2) - (progress.offsetHeight/2);
	} else if (document.layers) {	// Netscape
		document.progress.visibility = true;
		document.progress.left = (window.innerWidth/2) - 100+"px";
		document.progress.top = pageYOffset+(window.innerHeight/2) - 40+"px";
	} else if (document.getElementById) {	// Netscape 6+
		document.getElementById("progress").className = 'show';
		document.getElementById("progress").style.left = (window.innerWidth/2)- 100+"px";
		document.getElementById("progress").style.top = pageYOffset+(window.innerHeight/2) - 40+"px";
	}

	ProgressUpdate();	// Initialize bar
}

// Hide the progress layer
function ProgressDestroy() {
	// Move off screen to hide
	if (document.all) {	// Internet Explorer
		progress.className = 'hide';
	} else if (document.layers) {	// Netscape
		document.progress.visibility = false;
	} else if (document.getElementById) {	// Netscape 6+
		document.getElementById("progress").className = 'hide';
	}
}

// Increment the progress dialog one step
function ProgressStepIt() {
	_progressAt++;
	if(_progressAt > _progressEnd) _progressAt = _progressAt % _progressEnd;
	ProgressUpdate();
}

// Update the progress dialog with the current state
function ProgressUpdate() {
	var n = (_progressWidth / _progressEnd) * _progressAt;
	if (document.all) {	// Internet Explorer
		var bar = dialog.bar;
 	} else if (document.layers) {	// Netscape
		var bar = document.layers["progress"].document.forms["dialog"].bar;
		n = n * 0.55;	// characters are larger
	} else if (document.getElementById){
                var bar=document.getElementById("bar")
        }
	var temp = _progressBar.substring(0, n);
	bar.value = temp;
}

// Demonstrate a use of the progress dialog.
function Demo() {
	ProgressCreate(10);
	window.setTimeout("Click()", 100);
}

function Click() {
	if(_progressAt >= _progressEnd) {
		ProgressDestroy();
		return;
	}
	ProgressStepIt();
	window.setTimeout("Click()", (duration-1)*1000/10);
}

function CallJS(jsStr) { //v2.0
  return eval(jsStr)
}

</script>

<SCRIPT LANGUAGE="JavaScript">

// Create layer for progress dialog
document.write("<span id=\"progress\" class=\"hide\">");
	document.write("<FORM name=dialog id=dialog>");
	document.write("<TABLE border=2  bgcolor=\"#FFFFCC\">");
	document.write("<TR><TD ALIGN=\"center\">");
	document.write("Progress<BR>");
	document.write("<input type=text name=\"bar\" id=\"bar\" size=\"" + _progressWidth/2 + "\"");
	if(document.all||document.getElementById) 	// Microsoft, NS6
		document.write(" bar.style=\"color:navy;\">");
	else	// Netscape
		document.write(">");
	document.write("</TD></TR>");
	document.write("</TABLE>");
	document.write("</FORM>");
document.write("</span>");
ProgressDestroy();	// Hides

</script>


	<script>
function getXMLHTTP() { //fuction to return the xml http object
		var xmlhttp=false;	
		try{
			xmlhttp=new XMLHttpRequest();
		}
		catch(e)	{		
			try{			
				xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
			}
			catch(e){
				try{
				xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
				}
				catch(e1){
					xmlhttp=false;
				}
			}
		}
		 	
		return xmlhttp;
	}
	
	
	
	function getmodel(strURL) {		
		
		var req = getXMLHTTP();
		
		if (req) {
			
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {						
						document.getElementById('modeldiv').innerHTML=req.responseText;						
					} else {
						alert("There was a problem while using XMLHTTP:\n" + req.statusText);
					}
				}				
			}			
			req.open("GET", strURL, true);
			req.send(null);
		}
				
	}
</script>

	
</head>
<body>
<!-- Wrapper -->
<div id="wrapper">
	<!-- Shell -->
	<div class="shell">
		<!-- Header -->
		<div id="header">
			
			<!-- Logo -->
			<h1 id="logo" class="notext"><a href="#">GoAdMobi.com</a></h1>
			<!-- End Logo -->
			
			<!-- Social Links -->
<div class="social-links">				<ul>
				    <li>Welcome <font color="#FF0000"><?php echo $username;?></font> </li>
				    <li><a href='useraccount.php?userid=<?php echo $userid;?>&username=<?php echo $username;?>'>Go Back to Dash Baord</a></li>
					

				</ul>
				</div>
			<!-- End Social Links -->
			
			<div class="cl">&nbsp;</div>
			
			<!-- Navigation -->
			<div id="navigation">
				<ul>
				    <li class="first"></li>
				    <li></li>
				    <li></li>
				    <li></li>
				    <li> </li>
				    			 
				    <li></li>
				    <li></li>
				    <li></li>
				    <li></li>
				</ul>
			</div>
			<!-- End Navigation -->
			
		</div>
		<!-- End Header -->
		

	<!-- Main -->
	<div id="main">
		
		<!-- Sidebar -->
	  	<!-- Sidebar -->
	  <div id="sidebar" class="left">
			
			<div class="entry">
				<h2 class="title">Manage Account </h2>
				<ul class="blue-arrow">
				    <li><a href="#">Change account info </a></li>
				    <li><a href="#">Update billing info</a></li>
				    <li><a href="#">Change Password</a></li>
			    </ul>
			</div>
			
			
			<div class="entry">
				<h2 class="title">Manage Listings  </h2>
				<ul class="blue-arrow">
   				    <li><a href="listaction.php?action=view&userid=<?php echo $userid;?>">view listings  </a></li>
					<li><a href="addnewlist.php?userid=<?php echo $userid;?>">Add new listing  </a></li>
					<li><a href="#">View Listings Statistics</a></li>

			    </ul>
			</div>
			
			
	    <div class="entry">
				<h2 class="title">Manage Mobile Site Profile </h2>
	      <ul class="blue-arrow">
			      <li><a href="#">Update Logo</a></li>
			      <li><a href="#">Edit Instant Call number   </a></li>
			      <li><a href="#">Edit email address </a></li>
  			      <li><a href="#">Edit Facebook link</a></li>
   			      <li><a href="#">Edit Twitter link</a></li>

		      </ul>
			</div>
			
			</div>
			
		<!-- End Sidebar -->
		
		<div id="content" class="right">
		  <div class="entry">
				<h2 class="title">Add New List Details: </h2>
				<strong><span class="style1">Step #1: Enter List Details. </span>||<span class="style2"> Step#2: upload pictures</span></strong>
			 <div class="gallery-holder">
					<ul>
<?php
$report = "";
$customerrormessage = "we will do it later";
$filecounter = 0;
$newarray = createarrayofvars($_POST);

if ($_FILES['userfile']) {
    $file_ary = reArrayFiles($_FILES['userfile']);
    foreach ($file_ary as $file) {
	if ($file['error'] =="0")
		{

			if( $file['type'] == "image/gif"
			||  $file['type'] == "image/jpeg"
			||  $file['type'] =="image/pjpeg"
			||  $file['type'] == "image/png"
			&&  $file['size'] <35000)
			{
			$report .="File Name:".$file['name']." is good canidiate, will upload now!<BR>";

			//	step one create folder under the property id (members/listuploads/$listid/$arrayofuploadedfiles.
			//	step two start  uploading the files path is "/listuploads/$listid/"
			//	step three view  date to show before insert
			//	step four click on a link to confirm submition to avoid data base injection attack.
			
			
			createtempfolderwithlistidname($newarray['userid']);			
			
			$filecounter = $filecounter+1;
			/* get the ext */
			$pos = strrpos($file['name'], '.');
			if($pos === false)
		    $ext = ""; // file has no extension; do something special?
			$ext = substr($file['name'], $pos);
			//echo "file ext is :".$ext;
			/* End get the ext */

			$mynewfilename = "img_".$filecounter.$ext;
			//echo "New File Name: ".$mynewfilename;
			
			$newfilename = "listuploads/tempfolder_".$userid."/".$mynewfilename;
			//$newfilename = "listuploads/tempfolder_".$userid."/".$file['name'];
			$listpath = "listuploads/tempfolder_".$userid;

			$report .= uploadfilesnow($file['tmp_name'], $newfilename);
			}
			else
			{
			$report .="Invalid file type or size please check your file and try again: File Name:".$file['name']."<BR>";
			}		
		
  		  }
		  if ($file['error'] !="0" && $file['error'] !="4")
		  {
		   $report .= "Please try again using diffrent files, File Name:".$file['name']."<BR>";
		  }
		}
}







 $path = "listuploads/tempfolder_".$userid;
						  $dir = opendir($path);
							while ($dir && ($file = readdir($dir)) !== false)
							{
							  // do stuff
							  //echo $file."<BR>";
							 // echo "<img src='$file'><BR>";
							 $mypath="listuploads/tempfolder_".$userid."/";
							 //echo "listid".$listid."<br>";
							//echo "New Path".$mypath;
							 
							  if($file != "." && $file != ".." && $file != basename(__FILE__)) {

				                //echo '<img src="'.$mypath."/".$file.'"/>'.$file.'';
								
								echo "<li><a href='".$mypath.$file."' rel='gallery-group'><img  src='".$mypath.$file."' width='100' height='100' ></a></li>";
								
            				}



							}





?>

</ul>
</div>
				<BR /><BR /><p>View list details:<BR />
				  <?php
				echo showcurrentreport($newarray);
				?>
				</p>
			</p>
			

				<a href="finishinsertlist.php"></a>
				<p><a href="listaction.php?ext=<?php echo @$ext;?>&action=insert&<?php echo creatfullurl($newarray); ?> "><img src="css/images/insert-btn.gif" width="127" height="26" /></a>				          </p>
		  </div>
			
		</div>
		<!-- Content --><!-- End Content -->
		
		
		<div class="cl">&nbsp;</div>
		
		
	</div>
	<!-- End Main -->
	</div>
	<!-- End Shell -->
	
</div>
<!-- End Wrapper -->



<!-- Footer -->
<div id="footer">
<!-- Shell -->	
	<div class="shell">
		
		<div class="footer-bottom">
			<p class="left">
				All Rights Reserved
			</p>
			<p class="right">
				&copy;. Design by <a href="www.goAdMobi.com" target="_blank" title="goAdMobi.com">goAdMobi.com</a>
	
			</p>
		</div>
	</div>
	<!-- End Shell -->	
</div>
<!-- End Footer -->	

</body>
</html>
