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
     
if($role=="HOD" || $role=="NODAL"){
    include_once('db.php');
    $application_id=mysql_real_escape_string($_REQUEST['application_id']);
    $EMAILID=$_SESSION['emailid'];
    
$sql123="SELECT * FROM `training_applicant` WHERE application_id='".$application_id."'"; 
$result123=mysqli_query($con,$sql123);
$n=mysqli_num_rows($result123);
$row123=mysqli_fetch_assoc($result123); 
$emp_id=$row123['emp_id'];
    
$training_dept=$_SESSION['training_dept'];
// code to fetch data from trainigs details
$sql="SELECT * FROM `training_applicant` WHERE emp_id='".$emp_id."'"; 
$result=mysqli_query($con,$sql);
$n=mysqli_num_rows($result);

  
    $row=mysqli_fetch_assoc($result); 
 $tid=$row['t_id'];
$t_dept=$row['training_dept_code'];
  $sql1="SELECT * FROM `gnct_emp` WHERE emp_id='".$emp_id."'"; 
$result1=mysqli_query($con,$sql1);
$n=mysqli_num_rows($result1);
$row1=mysqli_fetch_assoc($result1);
 $sql2="SELECT * FROM `training_subject` WHERE t_id='".$tid."' and training_dept_code='".$t_dept."'"; 
$result2=mysqli_query($con,$sql2);
$n=mysqli_num_rows($result2);
$row2=mysqli_fetch_assoc($result2);
    
   

}}
?> 
<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: left;    
}
h3{
margin-left:195px;
}
tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
</head>
<body>

<h2 align="center">Nomination Form Preview For GNCT Delhi</h2>

<table style="width:70%" align="center">
<tr><h3>Training Details :</h3></tr>
  <tr>
    <th>Training Department</th>
    <th>Training Subject</th>
	<th>Duration</th>
  </tr>
  <tr>
    <td><?php echo $row2['dept']; ?></td>
    <td><?php echo $row2['t_sub']; ?></td>
    <td><?php echo $row2['duration']; ?></td>
	
  </tr>
</table>


<table style="width:70%" align="center">
<tr><h3>Personal Details :</h3></tr>
  <tr>
    <th>Employee Name</th>
	    <th>DOB</th>
    <th>Gender</th>
	
  </tr>
  <tr>
    
    <td><?php echo $row1['emp_name']; ?></td>
  <td><?php echo $row1['emp_dob']; ?></td>
  
    <td><?php echo $row1['gender']; ?></td>
  </tr>
  <tr>
    <th>Nationality</th>
	    <th>Email</th>
		<th>Phone No.</th>
	 </tr>
  
  <tr>
    <td><?php echo $row1['nationality']; ?></td>
  <td><?php echo $row1['email']; ?></td>
    <td><?php echo $row1['phone']; ?></td>
  </tr>
  <tr>
    <th>Designation</th>
	    <th>Organisation</th>
    <th>Department</th>
	
  </tr>
  <tr>
    
  
  <td><?php echo $row1['designation']; ?></td>
  <td><?php echo $row1['organization']; ?></td>
    <td><?php echo $row1['emp_dept']; ?></td>
  </tr>
  <tr>
    <th>Address</th>
	  <th>Form Submission Date</th>   
   <th>Qualification</th>
	
  </tr>
  <tr width='100%'>
    
    
  
  <td><?php echo $row1['address']; ?></td>
   <td><?php echo $row['date']; ?></td> 
   <td><?php echo $row1['emp_qualification']; ?></td> 
  </tr>
   
</table>


  <table align="center" width="70%">
  <tr><h3>Photo & Signature :</h3></tr>
  <tr>
  <th>Declaration</th>
  <th>Photo</th>
  <th>Signature</th>
  
  </tr>
  <tr>
  <td align="left">
 <label>I certify that the information given above is true and complete to the best of my knowledge. 
 By affixing my signature, I hereby assure you that I don’t have any physical disability and mental problems which may hinder me to attend all activities under this training course,
 including site visit if it is scheduled, without special supports or preparations by the host organization.</label></td>
  <td><img src="./<?php echo $row['image']; ?>" width=200px height=200px/></td>
 <td><img src="./<?php echo $row['signature']; ?>" width=200px height=100px/></td>
  </tr>
</table>
</body>
</html>

