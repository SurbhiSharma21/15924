<?php
include_once('db.php');
$EMAILID=$_REQUEST['emailid'];
$pwd=$_REQUEST['pwd'];
$msg1="id can't left blank";
$msg2="password can't left blank";
 if(empty($EMAILID))
 {
    header('Location:index.php?m1='.$msg1);
 }
 elseif(empty($pwd))
 {
   header('Location:index.php?m1='.$msg2); 
 }
 else{
    
    $sql="SELECT * FROM users WHERE emailid='".$EMAILID."'";
    $result=mysqli_query($con,$sql);
    $n=mysqli_num_rows($result);
    if($n==1)
    {
      $row=mysqli_fetch_assoc($result);  
        if($row['password']==$pwd)
        {
            session_start();
            $_SESSION['emailid']=$EMAILID;
            $_SESSION['role']=$row['role'];
           header('Location:user_home.php?m1=Welcome');
        }
        else
        {
          
          header('Location:index.php?m2=Password not matched ');  
        }
    }
    else{
        
        header('Location:user_login.php?m=No such id found');
        
    }
    
    
 }


?>