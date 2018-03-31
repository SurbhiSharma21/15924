<?php
if(is_array($_FILES)) {
if(is_uploaded_file($_FILES['userImage']['tmp_name'])) {
$sourcePath = $_FILES['userImage']['tmp_name'];
 $targetPath = "upload_images/".$_FILES['userImage']['name'];
$ext=end(explode(".",$_FILES['userImage']['name']));
$size=$_FILES['userImage']['size'];
if($ext == "jpg" || $ext == "jpeg"){
    // can add more extensions here as $ext != "jpeg"
    if($size <= 20480 && $size >= 10240){
      if(move_uploaded_file($sourcePath,$targetPath)) {  
?>
<img src="<?php echo $targetPath; ?>" width="200px" height="200px" class="upload-preview" />
<?php
}
}
else { echo 'size must be between 10KB to 20KB';}
}
else{
    echo 'not a valid type: jeg/jpeg allowed';
}
}
}
?>