<?php 
if(!isset($_POST['f1']) || !isset($_POST['f2']) || !isset($_POST['f3']) || !isset($_POST['f4'])|| !isset($_POST['f5'])|| !isset($_POST['f6'])|| !isset($_POST['f7']) || !isset($_POST['f8']) || !isset($_POST['f9']))
{
	echo "Fiels are Empty";
}
else{
	include_once('db.php');
	session_start();
	
$tid=trim($_POST['f9']);
$tcode=trim($_POST['f1']);
$pdate=$_POST['f2'];
$t_sub=$_POST['f3'];
$dept=$_POST['f4'];
$sdate=$_POST['f5'];
$ldate=$_POST['f6'];
$duration=$_POST['f7'];
$detail=$_POST['f8'];
 $sql="UPDATE  `training_subject` SET `t_id` ='$tcode', `post_date`='$pdate', `t_sub`='$t_sub', `dept`='$dept',  `s_date`='$sdate',  `l_date`='$ldate', `duration`='$duration', `detail`='$detail' WHERE t_id='".$tid."'"; 
$result=mysqli_query($con,$sql);
if($result)
{
    echo "successfully updateded";
}
else{
   echo "not updateded";
}
mysqli_close($con);
}
?>