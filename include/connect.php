 <?php 
$link = mysql_connect('goadmobicom.ipagemysql.com', 'autodealeradmin', 'onestepforward'); 
if (!$link) { 
    die('Could not connect: ' . mysql_error()); 
} 
//echo 'Connected successfully'; 
mysql_select_db(autodealer); 
?> 