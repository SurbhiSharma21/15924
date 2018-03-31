<?php
session_start();
 include_once('db.php');  
 $emp_id=$_REQUEST['id'];
/* 
 $q='S';
 function decryptIt( $q ) {
    $cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';
    $qDecoded      = rtrim( mcrypt_decrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), base64_decode( $q ), MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ), "\0");
    return( $qDecoded );
}
echo $decrypted = decryptIt($emp_id);*/
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
    
    echo"<div id=finalPrint>
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: left;  
    font-style: monospace;
    font-size: 12px;  
}
</style>

<h2 align='center'>DIRECTORATE OF TRAINING AND TECHNICAL EDUCATIONS, DELHI</h2>
<h2 align='center'>Short Term Training Nomination Form</h2>

<h4 align='center'>Training Details</h4>
<table style='width:60%' align='center'>
  <tr>
  <th>Training Department</th>
    <th>Training Subject</th>
    	<th>Training Duration</th>
  </tr>
  <tr>
  <td>".$row2['dept']."</td>
    <td>".$row2['t_sub']."</td>
        <td>".$row2['duration']."</td>
	
  </tr>
</table>

<h4 align='center'>Personal Details</h4>
<table style='width:60%' align='center'>
  <tr>
    <th>Employee Name</th>
	    <th> DOB</th>
    <th>Gender</th>
	
  </tr>
  <tr>
    
    <td>".$row1['emp_name']."</td>
  <td>".$row1['emp_dob']."</td>
  
    <td>".$row1['gender']."</td>
  </tr>
 
  
  
  <tr>
    <th>Nationality</th>
	    <th>Email</th>
    <th>Phone No.</th>
	
  </tr>
  <tr>
    
    <td>".$row1['nationality']."</td>
  <td>".$row1['email']."</td>
  
    <td>".$row1['phone']."</td>
  </tr>
  <tr>
    <th>Designation</th>
	    <th>Organisation</th>
    <th>Department</th>
	
  </tr>
  <tr>
    
    <td>".$row1['designation']."</td>
  <td>".$row1['organization']."</td>
  
    <td>".$row1['emp_dept']."</td>
  </tr>
  <tr>
    <th>Address</th>
	    <th>Qualification</th>
    <th>Date</th>
	
  </tr>
<tr>
    
    <td>".$row1['designation']."</td>
  <td>".$row1['organization']."</td>
  
    <td>".$row['date']."</td>
  </tr>
</table>


  <table align='center' width='60%'>
  
  <tr>
  <th>Declaration</th>
  <th>Photo</th>
  <th>Signature</th>
  
  </tr>
  <tr>
  <td>I certify that the information given above is true and complete to the best of my knowledge. 
 By affixing my signature, I hereby assure you that I don’t have any physical disability and mental problems which may hinder me to attend all activities under this training course,
 including site visit if it is scheduled, without special supports or preparations by the host organization.</td>
  <td><img src=./".$row['image']." width=200 height=200/></td>
  <td><img src=./".$row['signature']." width=200 height=100/></td>
 
  </tr>
  
</table>
<h1 align=right><button align='center' onClick=window.print()>Print</button><h1>
<h1 align=right><button align='center' onClick=window.location.assign('/14c')>Close</button></h1>
</div>";
  



?>