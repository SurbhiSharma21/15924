
<?php  
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
  echo $sql="SELECT * FROM `training_applicant` WHERE date BETWEEN '$from' AND '$to' ";
$result=mysqli_query($con,$sql);
$n=mysqli_num_rows($result);
echo "<table border=1><tr><td>Application No.</td><td>Applicant name</td><td>&nbsp;</td></tr>";
    for($i=1;$i<=$n;$i++)
    {
     $row=mysqli_fetch_assoc($result);
       
       echo "<tr><td>". $row['application_id']."</td><td>".$row['fname']."&nbsp;".$row['mname']."&nbsp;".$row['lname']."</td><td><a href=#>View Details</a></td></tr>";
    }
    echo "</table>";
    
   } 
?>

