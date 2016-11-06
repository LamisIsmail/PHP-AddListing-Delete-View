<?php
include "include/connect.php";
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
				<strong>Step #1: Enter List Details. || Step#2: upload pictures</strong>
			    <form action="savegotosteptwo.php"  method="post" name="form1">
						<div class="msg-thanks">
						<p><strong>Thank You!</strong> Your comment was sent!</p>
					</div>
					<div class="msg-alert">
						<p><strong>Error!</strong> Some field's are required!</p>
					</div>
					<div class="row">
						<label>Automated ListID <span></span></label>
						<div class="cl">&nbsp;</div>
					</div>
					<div class="row">
						<label>Model Code <span>(*)</span></label>
						<input type="text" id="modelcode" name="modelcode" class="field required text-field" />
						<div class="cl">&nbsp;</div>
					</div>
					<div class="row">
						<label>Stock Number <span> (*) </span></label>
						<input type="text" id="stocknumber" name="stocknumber" class="field required text-field" />
						<div class="cl">&nbsp;</div>
					</div>
					
									
							<div class="row">
						<label>Price <span> (*) </span></label>
						<input type="text" id="price" name="price" class="field required text-field" />
						<div class="cl">&nbsp;</div>
					</div>
					<div class="row">
						<label>Kilometers <span> (*) </span></label>
						<input type="text" id="kilometres" name="kilometres" class="field required text-field" />
						<div class="cl">&nbsp;</div>
					</div>
					
					<div class="row">
						<label>Transmission <span> (*) </span></label>
						<select name="transmission" >
						<option value="">Select Transmission</option>
						 <?php
						 creattransmissionoption();
					
						 ?>
				 
				
							 </select>
						<div class="cl">&nbsp;</div>
					</div>
					
							<div class="row">
						<label>Make <span> (*) </span></label>
						<select name="make" onChange="getmodel('findmodel.php?make='+this.value)">
						<option value="">Select Make</option>
						 <?php
						 creatmakeoption();
					
						 ?>
				 
				
							 </select>

						<div class="cl">&nbsp;</div>
					</div>
					<div class="row">
						<label>Model <span> (*) </span></label>
						<div id="modeldiv">
						<select name="model">
						<option>Select Model</option>
				        </select></div>

						<div class="cl">&nbsp;</div>
					</div>
					
					
							<div class="row">
						<label>Body Type <span>(*) </span></label>
						<select name="bodytype">
						<option>Select Body Type</option>
						<?php
						creatbodytypeoption();
						?>
						</select>
						<div class="cl">&nbsp;</div>
					</div>
					<div class="row">
						<label>Select Year <span> (*) </span></label>
					<select>
						  <option value="">Select Year</option>
						  <option value="2011">2011</option>
						  <option value="2010">2010</option>
						  <option value="2009">2009</option>
				
						  <option value="2008">2008</option>
						  <option value="2007">2007</option>
						  <option value="2006">2006</option>
						  <option value="2005">2005</option>
						  <option value="2004">2004</option>
						  <option value="2004">2003</option>
						  <option value="2004">2002</option>
						  <option value="2004">2001</option>
						  <option value="2004">2000</option>
				
						</select>
						<div class="cl">&nbsp;</div>
					</div>
	
					
					<div class="row">
						<label>Exterior Color <span> (*) </span></label>
						<select name="color">
						<option value="">Select Exterior Color</option>
						<?php
						creatcoloroption();
						?>
						</select>
						<div class="cl">&nbsp;</div>
					</div>
					
					
						<div class="row">
						<label>Description <span> (*) </span></label>
						<textarea name="description" cols="50" rows="10" wrap="virtual"></textarea>
						<div class="cl">&nbsp;</div>
					</div>
					
					
					
				
					<div class="row">
					<input type="hidden" name="userid" value="<?=$userid?>" />
					<input type="hidden" name="username" value="<?=$username?>" />					
						<input type="submit" class="submit-btn" value="Step 2" />
						<div class="cl">&nbsp;</div>
					</div>
						
			  </form>
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
