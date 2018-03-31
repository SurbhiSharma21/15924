<?php
include_once('db.php');
$NAME=$_REQUEST['name'];
$EMAILID=$_REQUEST['emailid'];
$training_dept=$_REQUEST['training_dept'];
$PHONE=$_REQUEST['phone'];
$pwd=$_REQUEST['pwd'];
$role=$_REQUEST['role'];
$msg1="name is required";
$msg2="email is required";
$msg3="department is required";
$msg4="phone is required";
$msg5="password is required";
$msg6="role is required";

if(empty($NAME))
{
    header('Location:hod_register.php?m1='.$msg1);
}
elseif(empty($EMAILID))
{
    header('Location:hod_register.php?m2='.$msg2);
    
    }
    elseif(empty($training_dept))
{
    header('Location:hod_register.php?m3='.$msg3);
    
    }
elseif(empty($PHONE)){
    
    header('Location:hod_register.php?m4='.$msg4);
}
elseif(empty($pwd)){
    
    header('Location:hod_register.php?m5='.$msg5);
}
elseif(empty($role))
{
    header('Location:hod_register.php?m6='.$msg6);
    
    }
else{
 echo $sql="INSERT INTO `departement` (`name`, `emailid`, `training_dept`, `phone`, `password`, `role`) VALUES ('$NAME','$EMAILID','$training_dept','$PHONE','$pwd','$role')"; 
if(mysqli_query($con,$sql))
{
    header('Location:index.php?m7=successfully registered');
}
else{
    header('Location:index.php?m8=Something went wrong');
}
} 
?>