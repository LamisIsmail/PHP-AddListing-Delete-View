    <?php
	include "include/connect.php";

	$make=$_GET['make'];
    $query="select * from model where makeid=$make";
    $result=mysql_query($query);?>
<select name="model">
<option>Select Model</option>
<? while($row=mysql_fetch_array($result)) { ?>
<option value="<?=$row['id'] ?>"><?=$row['model']?></option>
<? } ?>
</select>
