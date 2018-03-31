<?php session_start();
if(!isset($_SESSION['emailid'])){
    header("location:index.php?m=logged-in first....");
}


else{
    
if(!isset($_POST['f1']) || !isset($_POST['f2']) || !isset($_POST['f3']) || !isset($_POST['f4'])|| !isset($_POST['f5'])|| !isset($_POST['f6'])|| !isset($_POST['f7']) || !isset($_POST['f8']) || !isset($_POST['f9']))
{
	echo "Fiels are Empty";
}
else{
	include_once('db.php');
	
	
$tid=$_POST['f9'];
$tcode=$_POST['f1'];
$pdate=$_POST['f2'];
$t_sub=$_POST['f3'];
$dept=$_POST['f4'];
$sdate=$_POST['f5'];
$ldate=$_POST['f6'];
$duration=$_POST['f7'];
$detail=$_POST['f8'];





 $sql="INSERT INTO `training_subject` ( `t_code`, `post_date`, `t_sub`, `dept`, `s_date`, `l_date`, `duration`, `detail`) VALUES ( '$tcode', '$pdate', '$t_sub', '$dept', '$sdate', '$ldate', '$duration', '$detail');"; 
$result=mysqli_query($con,$sql);
if($result)
{
 echo "Training Added successfully";
}
else{
   echo "Something went worng";
}
mysqli_close($con);
}}
 
?>