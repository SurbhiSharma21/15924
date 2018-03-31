
<?php  
include_once('db.php');
$from=$_REQUEST['from'];
$to=$_REQUEST['to'];
$msg1="the field is required";
$msg2="the field is required";
if(empty($from))
{
    header('Location:register.php?m1='.$msg1);
}
elseif(empty($to)){
    
    header('Location:register.php?m2='.$msg2);
}
else{
// code to fetch data from trainigs details
  echo $sql="SELECT * FROM `training_subject` WHERE post_date BETWEEN '$from' AND '$to' ";
$result=mysqli_query($con,$sql);
$n=mysqli_num_rows($result);
echo "<table border=1><tr><td>S_CODE</td><td>Exam Name</td><td>Details</td><td>Post Date</td><td>Duration</td><td>&nbsp;</td></tr>";
    for($i=1;$i<=$n;$i++)
    {
     $row=mysqli_fetch_assoc($result);
       
       echo "<tr><td>". $row['t_id']."</td><td>".$row['t_code']."</td><td>".$row['post_date']."</td><td>".$row['t_sub']."</td><td>".$row['dept']."</td><td>".$row['s_date']."</td><td>".$row['l_date']."</td><td>".$row['duration']."</td><td>".$row['detail']."</td><td><a href=gnct_training_apply.php>Apply Online</a></td></tr>";
    }
    echo "</table>";
    
   } 
?>

