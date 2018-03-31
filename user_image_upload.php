<?php
if(!isset($_POST['uid'])){
    echo "error";
}
else{
if(is_array($_FILES)) {
     
if(is_uploaded_file($_FILES['userImage']['tmp_name'])) {
    
    $user_application_id=$_POST['uid'];
     
$sourcePath = $_FILES['userImage']['tmp_name'];
  $targetPath = "upload_images/".$user_application_id.rand(10,9999).$_FILES['userImage']['name'];
$ext=end(explode(".",$_FILES['userImage']['name']));
$size=$_FILES['userImage']['size'];
if($ext == "jpg" || $ext == "jpeg"){
    // can add more extensions here as $ext != "jpeg"
    if($size <= 20480 && $size >= 10240){
      if(move_uploaded_file($sourcePath,$targetPath)) {  
        $user_application_id=$_POST['uid'];
       // echo $_SESSION['application_id'];
        include_once('db.php');
       $sql="UPDATE `training_applicant` SET `image` = '".$targetPath."' WHERE `application_id` = '".$user_application_id."'";
        if(mysqli_query($con,$sql)){
?>
<img src="<?php echo $targetPath; ?>" width="200px" height="200px" class="upload-preview" />
<?php
}
else{ echo "not Uploaded to database";}
}
}
else { echo 'size must be between 10KB to 20KB';}
}
else{
    echo 'not a valid type: jeg/jpeg allowed';
}
}
else{ echo 'choose file first';}
}

}
?>