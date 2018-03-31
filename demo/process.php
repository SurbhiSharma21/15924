<?php
if($_POST['name']=='' && strlen($_POST['name'])<=0 || $_POST['pwd']=='' && strlen($_POST['pwd'])<=0){
	echo "no data";
}
else{
	$username=mysql_real_escape_string($_POST['name']);
	$con = mysql_connect("localhost", "root", "") or die("not con");
mysql_select_db("gnct_delhi", $con) or die("not db");
	$sql="INSERT INTO `register` (`email`, `phone`, `password`) VALUES ('".$_POST['name']."', '99999999999','".$_POST['pwd']."')";
	$rst=mysql_query($sql, $con);
	if($rst)
	{
		echo "success";
	}
	else{
		echo "failed";
	}
}
	
?>