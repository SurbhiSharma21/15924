<?php
session_start();
$tid=$_SESSION['tid'];
$user_application_id=$_REQUEST['appid'];

if(!isset($_SESSION['ecode'])){
    header("location:gnct_training_apply.php?tid=".$tid."&m=fill application form first...");
    
}
else if(!isset($_REQUEST['declaration'])){
    header("Location:user_image_signature_upload.php?tid=".$tid."&m=Click on the check box for accepting declarations....");
}
else {
 include_once('db.php');  
 $EMp_id=$_SESSION['ecode'];
 //code to encrypt
 /*
$q='S';
function encryptIt( $q ) {
    $cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';
    $qEncoded      = base64_encode( mcrypt_encrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), $q, MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ) );
    return( $qEncoded );
}
$encrypted = encryptIt($EMp_id);*/
 //end
$date = date('m/d/Y h:i:s a', time());
$sql="SELECT * FROM `training_applicant` WHERE application_id='".$user_application_id."'";
$result=mysqli_query($con,$sql);
echo $n=mysqli_num_rows($result);
if($n==1)
    {
        $row=mysqli_fetch_assoc($result);  
        if($row['image'] == '' || $row['signature'] == '')
{
    
   header("Location:user_image_signature_upload.php?tid=".$tid."&m=Uoload Image and Signature first....");
}
else{
$sql1="UPDATE `training_applicant` SET `date` = '$date' WHERE `application_id` = '".$user_application_id."'";
if(mysqli_query($con,$sql1)){
     session_destroy();   
  header("Location:final_form_print.php?id=".$EMp_id."&applicationid=".$user_application_id."&m=Successfull");
    }
    else{
       header("Location:user_image_signature_upload.php?tid=".$tid."&m=Uoload Image and Signature first....");
    }
  }
}
else
{
    header("Location:gnct_training_apply.php?tid=".$tid."&m=Fill form first....");
     }
}
     
   mysqli_close($con);
  
?>