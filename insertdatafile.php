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
.style4 {color: #6699FF}
.style5 {color: #0000CC}
.style6 {color: #FF0000}
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
	  <div id="sidebar" class="left">
			
			<div class="entry">
				<h2 class="title">Manage Account </h2>
				<ul class="blue-arrow">
				    <li><a href="#">Change account info </a></li>
				    <li><a href="#">Change Email address </a></li>
				    <li><a href="#">Update billing info</a></li>
			    </ul>
			</div>
			
			
			<div class="entry">
				<h2 class="title">Manage Listings  </h2>
				<ul class="blue-arrow">
				    <li><a href="addnewlist.php?memberid=<?php echo $userid;?>">Add new listing  </a></li>
				    <li><a href="#">Edit current listing  </a></li>
				    <li><a href="#">Delete a listing </a></li>
   				    <li><a href="#">Create QR codes</a></li>
					<li><a href="#">View Statics</a></li>

			    </ul>
			</div>
			
			
	    <div class="entry">
				<h2 class="title">Manage Mobile Site Profile </h2>
	      <ul class="blue-arrow">
			      <li><a href="#">Edit Instant Call number   </a></li>
			      <li><a href="#">Edit email address </a></li>
	      </ul>
		</div>
			
	  </div>
		<!-- End Sidebar -->
		
		<div id="content" class="right">
		  <div class="entry">
				<h2 class="title">List added successfully! </h2>
				<div class="gallery-holder"> </div>
			    <BR />
			    <table width="617" border="0">
                  <tr>
                    <td width="123" class="dd"><span class="style4">PICTURE</span></td>
                    <td width="87" class="dd"><span class="style4">ListID</span></td>
                    <td width="88" class="dd"><span class="style4">Stock # </span></td>
                    <td width="90" class="dd"><span class="style4">Price</span></td>
                    <td width="97" class="dd"><span class="style4">Added date </span></td>
                    <td colspan="2" class="dd"><span class="style4">ACTION</span></td>
                  </tr>
                  <tr>
                    <td valign="top" bgcolor="#FFFFFF">&nbsp;</td>
                    <td valign="top" bgcolor="#FFFFFF">&nbsp;</td>
                    <td valign="top" bgcolor="#FFFFFF">&nbsp;</td>
                    <td valign="top" bgcolor="#FFFFFF">&nbsp;</td>
                    <td valign="top" bgcolor="#FFFFFF">&nbsp;</td>
                    <td width="44" valign="top" bgcolor="#FFFFFF"><span class="style5">Edit</span></td>
                    <td width="58" valign="top" bgcolor="#FFFFFF"><span class="style6">Delete</span></td>
                  </tr>
                </table>
			    <BR /><BR />
				 
	
			

	
				
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
