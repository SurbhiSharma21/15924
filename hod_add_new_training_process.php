<?php session_start();
if(!isset($_SESSION['emailid'])){
    header("location:index.php?m=logged-in first....");
}



else{
   
    
if(!isset($_POST['training_dept_code']) || !isset($_POST['dept']) || !isset($_POST['tcode'])|| !isset($_POST['pdate'])|| !isset($_POST['sdate'])|| !isset($_POST['ldate']) || !isset($_POST['duration']))
{
	echo "Fiels are Empty";
}
else{
    include_once('db.php');
    $dept_code=$_POST['training_dept_code'];
$tid=$_POST['tcode'];
$pdate=$_POST['pdate'];
$dept=$_POST['dept'];
$sdate=$_POST['sdate'];
$ldate=$_POST['ldate'];
$duration=$_POST['duration'];

    if(is_array($_FILES)) {

     
if(is_uploaded_file($_FILES['detail']['tmp_name'])) {
    //image upload
    
    $user_id=$_SESSION['emailid'];
     $part=explode('@',$user_id);
$sourcePath = $_FILES['detail']['tmp_name'];
  $targetPath = "upload_file/".$part[0].rand(10,9999).$_FILES['detail']['name'];
$ext=end(explode(".",$_FILES['detail']['name']));
$size=$_FILES['detail']['size'];
if($ext == "pdf"){
    // can add more extensions here as $ext != "jpeg"
    if($size <= 50480 && $size >= 30240){
      if(move_uploaded_file($sourcePath,$targetPath)) { 
	

$sql1="SELECT * FROM `gnct_training_details` WHERE training_dept_code='".$dept_code."'";
    $result1=mysqli_query($con,$sql1);
    $n=mysqli_num_rows($result1);
            $row1=mysqli_fetch_assoc($result1);
             $tsubject=$row1['training_name'];
 $sql="INSERT INTO `training_subject` ( `t_id`, `post_date`, `t_sub`, `training_dept_code`, `dept`, `s_date`, `l_date`, `duration`, `detail`) VALUES ( '$tid', '$pdate', '$tsubject','$dept_code', '$dept', '$sdate', '$ldate', '$duration', '$targetPath')"; 
$result=mysqli_query($con,$sql);
if($result)
{
 echo "Training Added successfully";
 mysqli_close($con);
}
else{
   echo "This training already registered ";
}
}
else{
    echo "File Unable to move";
}
}
else{
    echo "File is bigger than specified size";
}
}
else{
echo " Use PDF type only ";}

}else{echo "you chose no file";}
}

}
 }
?>