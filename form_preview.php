<?php
if(!isset($_POST['f1']) || !isset($_POST['f2']))
{
    echo "no data found...System Error";
}
else{
    
    // show this into table format
   
 echo $ecode=$_POST['f1'];
 echo $dept=$_POST['f2'];
 
 /* include_once("db.php");
 $sql="SELECT * FROM `training_applicant` WHERE email='".$ecode."' and t_sub='".$t_sub."'";
$result=mysqli_query($con,$sql);
$n=mysqli_num_rows($result);
if($n == 1)
    {
        echo " Email Already Registered......";
        }
        
else{
echo"
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
</style>
</head>
<body>

<h2 align='center'>Nomination Form Preview</h2>
<h3 align='center'>Training Details</h3>
<table style='width:70%' align='center'>
  <tr>
    <th>Training Subject</th>
    <th>Training Department</th>
	<th>Duration</th>
  </tr>
  <tr>
    <td>$t_sub</td>
    <td>$dept</td>
    <td>$duration</td>
	
  </tr>
</table>

<h3 align='center'>Personal Details</h3>
<table style='width:70%' align='center'>
  <tr>
    <th>First Name</th>
	    <th>Middle Name</th>
    <th>Last Name</th>
	
  </tr>
  <tr>
    
    <td>$fname</td>
  <td>$mname</td>
  
    <td>$lname</td>
  </tr>
  <tr>
    <th>DOB</th>
	    <th>Gender</th>
        <th>Address</th>
	 </tr>
  
  <tr>
    <td>$dob</td>
  <td>$gender</td>
  <td>$address</td>
  </tr>
  <tr>
    <th>Nationality</th>
	    <th>Email</th>
    <th>Phone No.</th>
	
  </tr>
  <tr>
    
    <td>$nationality</td>
  <td>$email</td>
  
    <td>$phone</td>
  </tr>
  <tr>
    <th>Designation</th>
	    <th>Organisation</th>
    <th>Department</th>
	
  </tr>
  <tr>
    
    <td>$designation</td>
  <td>$organization</td>
  
    <td>$department</td>
  </tr>
  
</table>
<h3 align='center'>Qualification Details</h3>
<table style='width:70%' align='center'>
  <tr>
    <th>HSC</th>
    <th>HSC Name Of Institution </th>
	<th>HSC Passing Year </th>
  </tr>
  <tr>
    <td>$hsc</td>
    <td>$hsc1</td>
    <td>$hsc2</td>
	
  </tr>
  <tr>
    <th>SSC</th>
    <th>SSC Name Of Institution </th>
	<th>SSC Passing Year </th>
  </tr>
  <tr>
    <td>$ssc</td>
    <td>$ssc1</td>
    <td>$ssc2</td>
	
  </tr>
  <tr>
    <th>Graduation</th>
    <th>Graduation Name Of Institution </th>
	<th>Graduation Passing Year </th>
  </tr>
  <tr>
    <td>$graduation</td>
    <td>$graduation1</td>
    <td>$graduation2</td>
	
  </tr>
  </table>
  <table align='center' width='70%'>
  <h3 align='center'>Photo & Signature</h3>
  <tr>
  <th>Declaration</th>
  <th>Photo</th>
  <th>Signature</th>
  
  </tr>
  <tr>
  <td width=50%>I certify that the information given above is true and complete to the best of my knowledge. 
 By affixing my signature, I hereby assure you that I don’t have any physical disability and mental problems which may hinder me to attend all activities under this training course,
 including site visit if it is scheduled, without special supports or preparations by the host organization.</td>
  <td width=25%><img src='./img/default.jpg' width=20% height=30%/></td>
  <td width=25%>signature......goes here</td>
 
  </tr>
</table>
</body>
</html>";
}*/}
?>
