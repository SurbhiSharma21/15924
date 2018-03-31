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
   header('Location:index.php?m2='.$msg2); 
 }
 else{
    
  $sql="SELECT * FROM departement WHERE hod_email='".$EMAILID."' AND status='verified'";
    $result=mysqli_query($con,$sql);
    echo $n=mysqli_num_rows($result);
    if($n==1)
    {
      $row=mysqli_fetch_assoc($result);  
        if($row['password']==$pwd)
        {
            session_start();
            $training_dept=$row['dept_name'];
            $_SESSION['emailid']=$EMAILID;
            $_SESSION['training_dept']=$training_dept;
            $_SESSION['role']=$row['role'];
            $_SESSION['name']=$row['hod_name'];
           $_SESSION['status']=$row['status'];
           $_SESSION['dept_code']=$row['dept_code'];
            
            
          header('Location:home.php?m1=Welcome');
        }
        else
        {
          
         header('Location:index.php?m2=Password not matched ');  
        }
    }
    else{
        
       header('Location:index.php?m=No such id found');
        
    }
    
    
 }


?>