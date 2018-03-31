<?php
include_once('db.php');
$EMAILID=$_REQUEST['emailid'];
$pwd=$_REQUEST['pwd'];
$msg1="id can't left blank";
$msg2="password can't left blank";
 if(empty($EMAILID))
 {
    header('Location:Departmental_login.php?m1='.$msg1);
 }
 elseif(empty($pwd))
 {
   header('Location:Departmental_login.php?m1='.$msg2); 
 }
 else{
    
  echo  $sql="SELECT * FROM `departement` WHERE hod_email='".$EMAILID."' AND status='verified'";
    $result=mysqli_query($con,$sql);
    $n=mysqli_num_rows($result);
    if($n==1)
    {
      $row=mysqli_fetch_assoc($result);  
        if($row['password']==$pwd)
        {
            session_start();
            $_SESSION['hod_email']=$EMAILID;
            $_SESSION['role']=$row['role'];
            $_SESSION['status']=$row['status'];
            $_SESSION['hod_name']=$row['hod_name'];
           header('Location:home.php?m1=Welcome');
        }
        else
        {
          
          header('Location:Departmental_login.php?m2=Password not matched ');  
        }
    }
    else{
        
        header('Location:Departmental_login.php?m=No such id found');
        
    }
    
    
 }


?>