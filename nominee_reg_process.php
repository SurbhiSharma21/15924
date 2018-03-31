<?php
include_once('db.php');
$NAME=$_REQUEST['name'];
$EMAIL=$_REQUEST['email'];
$PHONE=$_REQUEST['phone'];
$pwd=$_REQUEST['pwd'];
$msg1="name is required";
$msg2="email is required";
$msg3="phone is required";
$msg4="password is required";
if(empty($NAME))
{
    header('Location:register.php?m1='.$msg1);
}
elseif(empty($EMAIL))
{
    header('Location:register.php?m2='.$msg2);
    
    }
elseif(empty($PHONE)){
    
    header('Location:register.php?m3='.$msg3);
}
elseif(empty($pwd)){
    
    header('Location:register.php?m4='.$msg4);
}
else{
$sql="INSERT INTO `register` (`name`, `email`, `phone`, `password`) VALUES ('$NAME','$EMAIL','$PHONE','$pwd')"; 
if(mysqli_query($con,$sql))
{
    header('Location:nominee_login.php?m5=successfully registered');
}
else{
    header('Location:register.php?m6=Something went wrong');
}
} 
?>