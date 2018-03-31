
<?php
session_start();
if(!isset($_SESSION['emailid'])){
    header("location:index.php?m=logged-in first....");
}
else{

$EMAILID=$_SESSION['emailid'];
$training_dept=$_SESSION['training_dept'];
$role=$_SESSION['role'];

$dept_code=$_SESSION['dept_code'];

include_once('db.php');
?>

<html>
<head><style>
#popup1{
    position: absolute;
    margin-top: -150px;
    margin-left: -200px;
    display: none;
    width: 600px;
    height: 1000px;
    background-color: white;
    z-index: 1000;
    border-radius: 10px;
    width: 75%;
}


</style>
<script src="./js/jquery-3.0.0.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$('#content').on('click', 'button', function(e) {
		var bid1=e.target.id;
        //alert(bid1);
		e.preventDefault();
		$("#editForm1").load("view_applicant_detail.php?application_id="+bid1);
		$("#popup1").fadeIn();
    });
	$('#content').on('click', 'a', function(e) {
		e.preventDefault();
		$("#popup1").fadeOut('500');
        $('#content').load("new_applicants.php");
		
    });
		
});
    </script>
</head>
<body>
<!--POPUP for form Edit-->
<div id="overlay"> </div>
<!--END OF POPUP-->
<!--POPUP for form Edit-->
<div id="popup1"> 
<a href="#" id="editCloseBtn"><img src="./css/close_button1.png"/></a>
<div id="editForm1"></div>
</div>
<!--END OF POPUP-->
</body>
</html>
<?php

if($role=="HOD"){
?>

<div id="c1">
<span class="bodylink">Filled Nominations</span>

<?php
// code to fetch data from trainigs application
$sql="SELECT * FROM `training_applicant` where training_dept_code='".$dept_code."'";
$result=mysqli_query($con,$sql);
$n=mysqli_num_rows($result);


if($result){
    if(mysqli_num_rows($result)>0){
        echo "<table border=1  cellsppading=15 cellspacing=15>
<tr>
<td>Application No.</td>
<td>Employee Id</td>
<td>&nbsp;</td>";
while($row=mysqli_fetch_array($result)){
echo "<tr><td>".$row['application_id']."</td><td>". $row['emp_id']."</td><td><button id=".$row['application_id'].">View Details</button></td></tr>";
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
?>
<?php
}// login change close if for NODAL officer
else if ($role=="NODAL"){// second login else
    //echo "i am here at nodal login";
    ?>
<div id="c1">
<span class="bodylink">Current Trainings</span>

<?php
// code to fetch data from trainigs application
  $sql="SELECT * FROM `training_applicant`";
$result=mysqli_query($con,$sql);
$n=mysqli_num_rows($result);


if($result){
    if(mysqli_num_rows($result)>0){
        echo "<table border=1  cellsppading=15 cellspacing=15>
<tr>
<td>Application No.</td>
<td>Employee ID</td>
<td>&nbsp;</td>";
while($row=mysqli_fetch_array($result)){
echo "<tr><td>". $row['application_id']."</td><td>".$row['emp_id']."</td><td><button id=".$row['application_id'].">View Details</button></td></tr>";
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
mysqli_close($con);
}
?>
