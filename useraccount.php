<?php
$userid= "1";
$username = "ammarautodealer";
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
				<h2 class="title">Welcome <?php echo $username;?> Your User ID :<font color="#FF0000"><?php echo $userid;?></font></h2>
				<p>Please provide this ID every time you need to contact us to serve you better.</p>
				<p>Using this control panel you can manage / edit your account and mobile site information</p>
		
			</div>
			
		</div>
		<!-- Content -->
		<div id="content" class="right">
			<div class="entry">
				<h2 class="title">Shortcut>> Statics of the week</h2>
    <script type="text/javascript" src="http://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load('visualization', '1');
    </script>
    <script type="text/javascript">
      function drawVisualization() {
        var wrapper = new google.visualization.ChartWrapper({
          //chartType: 'ColumnChart',
          //dataTable: [['MON', 'TUS', 'WED', 'THUR', 'FRI', 'SAT','SUN'],
            //          [200, 300, 400, 500, 600, 800,500]],
					  
		 dataTable: [['MON', 'TUS', 'WED', 'THUR', 'FRI', 'SAT','SUN'],
        	        [200, 300, 400, 500, 600, 800,500]],
          options: {'title': 'Visitors count for the week'},
          containerId: 'visualization'
        });
        wrapper.draw();
      }
      

      google.setOnLoadCallback(drawVisualization);
    </script>
  </head>
    <div id="visualization" style="width: 600px; height: 400px;"></div>
				
			</div>
			
		</div>
		<!-- End Content -->
		
		
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
