 <?php 
include "connect.php";

function getautomatedID()
{
//Echo "157485";


}


function creatmakeoption()
{

$query="select * from make";
    $result=mysql_query($query);
     while($row=mysql_fetch_array($result))
	 { 
       echo "<option value=".$row['id'].">".$row['make']."</option>";
	}
	
	}


function creatbodytypeoption()
{

$query="select * from bodytype";
    $result=mysql_query($query);
     while($row=mysql_fetch_array($result))
	 { 
       echo "<option value=".$row['id'].">".$row['bodytype']."</option>";
	}
	
	}


function creatcoloroption()
{

$query="select * from color";
    $result=mysql_query($query);
     while($row=mysql_fetch_array($result))
	 { 
       echo "<option value=".$row['id'].">".$row['color']."</option>";
	}
	
	}
	
function creattransmissionoption()
{

$query="select * from transmission";
    $result=mysql_query($query);
     while($row=mysql_fetch_array($result))
	 { 
       echo "<option value=".$row['id'].">".$row['transmission']."</option>";
	}
	
	}
		
		

function reArrayFiles(&$file_post) {

    $file_ary = array();
    $file_count = count($file_post['name']);
    $file_keys = array_keys($file_post);

    for ($i=0; $i<$file_count; $i++) {
        foreach ($file_keys as $key) {
            $file_ary[$i][$key] = $file_post[$key][$i];
        }
    }

    return $file_ary;
}

function createarrayofvars($postedvars) {

    $file_ary = array();
    $file_count = count($postedvars);
    $file_keys = array_keys($postedvars);

    for ($i=0; $i<$file_count; $i++) {
        foreach ($file_keys as $key) {
            $file_ary[$key] = $postedvars[$key];
        }
    }

    return $file_ary;
}

function creathiddenvalues($newarray)
{
//print_r($newarray);
  //$file_ary = array();
   // $file_keys = array_keys($newarray);

	while (list($key, $val) = each($newarray))
	{
    //echo "$key => $val\n";
	echo "<input type='hidden' name='".$key."' value='".$val."'>";
	}
 }


function createfolderwithlistidname($listid)
{
	$path = "listuploads/".$listid;
	echo $path;
	if (@!mkdir($path))
	{
    $reportvalue= "Could not create folder for your new lsiting, please contact your rep for more information<BR>";
	}
	else
	{
	$reportvalue= "folder created /".$listid."/";
	}
	return $reportvalue;


}


function createtempfolderwithlistidname($userid)
{

$path = "listuploads/tempfolder_".$userid;
	echo $path;
	if (@!mkdir($path))
	{
    $reportvalue= "Could not create folder for your new lsiting, please contact your rep for more information<BR>";
	}
	else
	{
	$reportvalue= "folder created /tempfolder_".$userid;
	}
	return $reportvalue;


}
			
function uploadfilesnow($tempname,$filename)
{
 if (move_uploaded_file($tempname, $filename))
			{
			 $reportvalue = "File uploaded successfully<BR>";
			}
			else
			{
			 $reportvalue = "File was not uploaded successfully<BR>";
			}
			return $reportvalue;
			

}


function showcurrentreport($newarray)
{
//echo "now we are showing the whole report:";
//print_r($newarray);

while (list($key, $val) = each($newarray))
	{
    //echo "$key => $val\n";
	//echo "<input type='hidden' name='".$key."' value='".$val."'>";
	if($key !="username" && $key !="userid"  && $key !="listid"  )
	{
	echo "<b>".$key."</b>:".$val."<BR>";
	}
	}

}
	
	
function creatfullurl($newarray)
{
$url="";
while (list($key, $val) = each($newarray))
	{
    $url .= $key."=".$val."&";
	}
return $url;	
}

function insertintodatabase($urlarray)
{
//$listid = 		$urlarray['listid'];
$memberid = 	$urlarray['userid'];
$modelcode = 	$urlarray['modelcode'];
$stocknumber = 	$urlarray['stocknumber'];
$transmission = $urlarray['transmission'];
$addeddate = 	date("Y-m-d");   
$make = 		$urlarray['make'];
$model = 		$urlarray['model'];
$bodytype = 	$urlarray['bodytype'];
$year = 		$urlarray['year'];
$price = 		$urlarray['price'];
$kilometres = 	$urlarray['kilometres'];
$exteriorcolor =$urlarray['color'];
$desc = $urlarray['description'];

$sql = "INSERT INTO `eachlist` (`memberid`, `modelcode`, `stocknumber`, `transmission`, `addeddate`, `make`, `model`, `bodytype`, `year`, `price`, `kilometres`, `exteriorcolor`, `description`) VALUES 
('".$memberid."', '".$modelcode."', '".$stocknumber."', '".$transmission."', '".$addeddate."', '".$make."', '".$model."', '".$bodytype."', '".$year."', '".$price."', '".$kilometres."', '".$exteriorcolor."','".$desc."');";

//echo $sql;


if (!mysql_query($sql))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";

$listid = mysql_insert_id();
$oldname = "listuploads/tempfolder_".$memberid;
$newname = "listuploads/".$listid;
rename  ($oldname,$newname );
$message = "List Added Successfully!";
return $message;


}

function createlistid($getarray)
{
 $sql = "select * from eachlist where memberid ='".$getarray['userid']."' ORDER BY `addeddate` DESC ";
 
  $result=mysql_query($sql);
     while($row=mysql_fetch_array($result))
	 { 
		/*echo "Listid:".$row['listid'];
		echo "modelcode :".$row['modelcode'];
		echo "<BR>";
		*/
		// imgsrc = "listuploads/".$row['listid']."/img_1".$getarray['ext'];
		$dir    = "listuploads/".$row['listid'];
		$filesinthedir = @scandir($dir, 1);
		$imgname = $filesinthedir[0];
		$imgsrc = "listuploads/".$row['listid']."/".$imgname;

		 
		echo "<tr>
		 <td valign='top'  bgcolor='#FFFFFF'><img width='80' height='80' src='".$imgsrc."'></td>
         <td valign='top' bgcolor='#FFFFFF'>".$row['listid']."</td>
         <td valign='top' bgcolor='#FFFFFF'>".$row['addeddate']."</td>
		 <td valign='top' bgcolor='#FFFFFF'>
		 <a href='editlist.php?action=details&listid=".$row['listid']."&userid=".$getarray['userid']."'>
		 <font color='blue'>Details</font></a> | <a href='javascript:deleteAlert(".$row['listid'].",".$getarray['userid'].")'><font color='red'>Remove</font></a> | <a href='qr-generator/index2.php?listid=".$row['listid']."' target='_blank'><font color='green'>Generate QR Code</font></a>
        </td>

         </tr>";	
	}
		

	
}

function deletefromdatabase($array)
{
$sql= "delete from eachlist where listid='".$array['listid']."'";
//echo $sql;
if (mysql_query($sql))
{
 //echo "done";

$mydir = "listuploads/".$array['listid'];
$d = dir($mydir); 
while($entry = $d->read()) { 
 if ($entry!= "." && $entry!= "..") { 
 unlink($mydir."/".$entry);
// unlink($entry); 
 } 
} 
$d->close(); 
rmdir($mydir); 
}
else
{
echo "NOOOOOO";
echo mysql_error();
}

$message = "List Deleted!";
return $message;
}

function viewdatarecords($array)
{


}

/*
function createsqlstatment($array)
{
$statment="Select * from eachlist where ";
while (list($key, $val) = each($array))
	{
	if ($val !="" && $key!="userid" && $key!="username")
	{
	
	 if ($key=="search_price_start" || $key=="search_price_end" )
	 {
	  if ($val !="")
	  {
	   $statment.= "price BETWEEN ".$array["search_price_start"]." AND ".$array["search_price_end"]. " AND ";
	   
	  }
	 
	 }
	 
	 
	  if ($key=="search_km_start" || $key=="search_km_end" )
	 {
	  if ($val !="")
	  {
	   $statment.= "kilometer BETWEEN ".$array["search_km_start"]." AND ".$array["search_km_end"]. " AND ";
	   
	  }
	 
	 }
	 
	 
	 
	$statment.= $key."=".$val." AND ";
	 
	$statment.= "userid=".$array["userid"];
	}

	}
	echo $statment;
}
*/



function createsqlstatment($array)
{
$statment="Select * from eachlist where ";
while (list($key, $val) = each($array))
	{
	if ($val !="" && $key!="userid" && $key!="username" && $key!="price" && $key!="kilo" )
	{
	
	$statment.= $key."=".$val." AND ";
	}

	}
	/*outside while*/
	if ($array["price"]["0"] ==""&& $array["price"]["1"] == "" )
	{
	
	}
	else
	{
	$statment.= "";
	}
	/* User Id is at the end, outside the while statment	*/
	$statment.= "userid=".$array["userid"];
	echo $statment;
}

//Functions for the QR respond 
function getlistinfobyid($listid) //When a QR is scanned this function will be called to display the card information
{
$sql= "select * from eachlist where listid='".$listid."'";
$result=mysql_query($sql);

  while($row=mysql_fetch_array($result))
	 { 
	 
	  //<td valign='top' bgcolor='#FFFFFF'><img width='80' height='80' src='".$imgsrc."'></td>
		$dir   = "listuploads/".$row['listid'];
		$filesinthedir = @scandir($dir, 1);
		$imgname = $filesinthedir[0];
		$imgsrc = "listuploads/".$row['listid']."/".$imgname;
		
echo "<IMG src='".$imgsrc."' width='100%' > <DIV class=content>";




        echo "<p><H3>PRICE: ".$row['price']."</H3></p>";
		echo "<HR><a href='viewlistbyid-morephotos.php?folder=".$row['listid']."'>view more photos</a><HR>";
		echo "<p>List ID:".$row['listid']."</p>";
		echo "<p>Model Code:".$row['modelcode']."</p>";
		echo "<p>Stock Number:".$row['stocknumber']."</p>";
		echo "<p>Transmission:".gettransmision($row['transmission'])."</p>";
		echo "<p>Make:".getmake($row['make'])."</p>";
		echo "<p>Model:".getmodel($row['model'])."</p>";
		echo "<p>Body Type:".getbodytype($row['bodytype'])."</p>";
		echo "<p>Year:".$row['year']."</p>";
		echo "<p>kilometres:".$row['kilometres']."</p>";
		echo "<p>Exterior Color:".getexteriorcolor($row['exteriorcolor'])."</p>";
		echo "<p>Description:".$row['description']."</p>";

		ECHO"<BR><BR></DIV>";
 
	 }
	 


}

function getexteriorcolor($exteriorcolor)
{
$sql="select * from color where id='".$exteriorcolor."'";
	$result=mysql_query($sql);
	$row= mysql_fetch_array($result);
    $color = $row['color']; 
	return $color;

}

function getbodytype($bodytype)
{
$sql="select * from bodytype where id='".$bodytype."'";
	$result=mysql_query($sql);
	$row=mysql_fetch_array($result);
    $bodytype = $row['bodytype']; 
	return $bodytype;

}

function getmodel($model)
{
$sql="select * from model where id='".$model."'";
	$result=mysql_query($sql);
	$row=mysql_fetch_array($result);
    $model = $row['model']; 
	return $model;

}

function getmake($make)
{
$sql="select * from make where id='".$make."'";
	$result=mysql_query($sql);
	$row=mysql_fetch_array($result);
    $make = $row['make']; 
	return $make;

}


function gettransmision($transmision)
{
$sql="select * from transmission where id='".$transmision."'";
	$result=mysql_query($sql);
	 while($row=mysql_fetch_array($result))
	 { 
    $mytransmision = $row['transmission']; 
	}
	return $mytransmision;

}


function addonetoqrfield($listid)
{
$addeddate = 	date("Y-m-d");   
$sql = "INSERT INTO `qrcount` (`listid`, `date`) VALUES ('".$listid."', '".$addeddate."');";
$result=mysql_query($sql);

}


function getinternalpictures($listid)
{
$dir   = "listuploads/".$listid;

if ($handle = opendir($dir)) {
    while (false !== ($entry = readdir($handle))) {
        if ($entry != "." && $entry != "..") {
            //echo "$entry\n";
			echo "<A href='".$dir."/$entry' target=_blank><IMG class=wallpaper src='".$dir."/".$entry."'></A>";

        }
    }
    closedir($handle);
}

//<A href="gallery_files/MINI-1.jpg" target=_blank><IMG class=wallpaper src="gallery_files/MINI-1.jpg"></A>
}




function getinternalpicturescontrolpanel($listid)
{
$dir   = "listuploads/".$listid;

if ($handle = opendir($dir)) {
    while (false !== ($entry = readdir($handle))) {
        if ($entry != "." && $entry != "..") {
            //echo "$entry\n";
			echo "<li><IMG class=wallpaper src='".$dir."/".$entry."' width='150', height='100'></li>";

        }
    }
    closedir($handle);
}

//<A href="gallery_files/MINI-1.jpg" target=_blank><IMG class=wallpaper src="gallery_files/MINI-1.jpg"></A>
}


function getlistinfobyidforcontrolpaneluse($array) 
{
$sql= "select * from eachlist where listid='".$array['listid']."'";
$result=mysql_query($sql);

  while($row=mysql_fetch_array($result))
	 { 
	 
	  //<td valign='top' bgcolor='#FFFFFF'><img width='80' height='80' src='".$imgsrc."'></td>
		$dir   = "listuploads/".$row['listid'];
		$filesinthedir = @scandir($dir, 1);
		$imgname = $filesinthedir[0];
		$imgsrc = "listuploads/".$row['listid']."/".$imgname;
		
echo "<IMG src='".$imgsrc."' width='50%' >
		<DIV class=lamiscontent>";
        echo "<p><H3>PRICE: ".$row['price']."</H3></p>";
		echo "<div style='padding:10px; height:100px; overflow: scroll;'>";
				echo "<div id='navcontainer'><ul>";
					getinternalpicturescontrolpanel($row['listid']);
				echo "</ul></div>";

		echo "</div>";
		echo "<p>List ID:".$row['listid']."</p>";
		echo "<p>Model Code:".$row['modelcode']."</p>";
		echo "<p>Stock Number:".$row['stocknumber']."</p>";
		echo "<p>Transmission:".gettransmision($row['transmission'])."</p>";
		echo "<p>Make:".getmake($row['make'])."</p>";
		echo "<p>Model:".getmodel($row['model'])."</p>";
		echo "<p>Body Type:".getbodytype($row['bodytype'])."</p>";
		echo "<p>Year:".$row['year']."</p>";
		echo "<p>kilometres:".$row['kilometres']."</p>";
		echo "<p>Exterior Color:".getexteriorcolor($row['exteriorcolor'])."</p>";
		echo "<p>Description:<BR><textarea rows='10' cols='100' readonly='readonly' >".$row['description']."</textarea></p>";

		echo "<BR><BR></DIV>";
 
	 }
	 


}


?> 
