

<?php
session_start();

if(!isset($_SESSION['emailid'])){
    header("location:index.php?m=login first...");
    
}
else{
include_once('db.php');
$EMAILID=$_SESSION['emailid']; 
$training_dept=$_SESSION['training_dept'];
include_once('db.php');
$from=$_REQUEST['from'];
$to=$_REQUEST['to'];
$msg1="the field is required";
$msg2="the field is required";
if(empty($from))
{
    header('Location:archive_applicants.php?m1='.$msg1);
}
elseif(empty($to)){
    
    header('Location:archive_applicants.php?m2='.$msg2);
}
else{
// code to fetch data from trainigs details
  echo $sql="SELECT * FROM `training_subject` WHERE post_date BETWEEN '$from' AND '$to' AND dept='".$training_dept."' ";
$result=mysqli_query($con,$sql);
$n=mysqli_num_rows($result);
echo "<table border=1><tr><td>Application No.</td><td>Applicant name</td><td>&nbsp;</td></tr>";
    for($i=1;$i<=$n;$i++)
    {
     $row=mysqli_fetch_assoc($result);
       
       echo "<tr><td>". $row['t_id']."</td><td>".$row['t_code']."</td><td>".$row['post_date']."</td><td>".$row['t_sub']."</td><td><a href=#>View Details</a></td></tr>";
    }
    echo "</table>";
    
   } 
   
   
   
   }
?>

