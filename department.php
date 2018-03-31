<?php
session_start();

if(!isset($_SESSION['emailid'])){
    header("location:index.php?m=login first...");
    
}
else{
    include_once('db.php');
    $EMAILID=$_SESSION['emailid'];
$training_dept=$_SESSION['training_dept'];
     $role=$_SESSION['role'];
    if($role=="NODAL"){
 
// code to fetch data from department
  $sql="SELECT * FROM `departement` WHERE role='HOD' AND status='verified' ";
$result=mysqli_query($con,$sql);
$n=mysqli_num_rows($result);
$i=1;

if($result){
    if(mysqli_num_rows($result)>0){
        echo "<table border=1  cellsppading=15 cellspacing=15>
<tr>
<td>Email Id</td>
<td>Name</td>
<td>Department</td>
<td>Phone</td>


<td>&nbsp;</td>";
while($row=mysqli_fetch_array($result)){
echo "<tr><td>". $row['hod_email']."</td><td>".$row['hod_name']."</td><td>".$row['dept_name']."</td><td>".$row['phone']."</td></tr>";
++$i;
}

echo "</table>";
 mysqli_free_result($result);
   }
    else{
    echo"no records match";
   }
   }
   else{
   echo"error".mysqli_error($con);
   }
   mysqli_error($con);

}
}
?>
