<?php
session_start();
if(!isset($_SESSION['emailid'])){
    header("location:index.php?m=logged-in first....");
}
else{
include_once('db.php');
$EMAILID=$_SESSION['emailid'];
$dept=$_SESSION['training_dept'];
$deptCode=$_SESSION['dept_code'];
?>

<head>

<script src="./js/jquery-3.0.0.min.js"></script>
<script src="./js/ajax.min.js"></script>

		<div id="result"></div>

</head>
<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 0px;
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


<table style="width:70%" align="center">

  <tr>
    <th>&nbsp;</th>
    <th><p align="center"><font size="5" color="#8a1c1c">Report Generation</font></p></th>
	<th>&nbsp;</th>
  </tr>
  <tr>
    <td>
<div id="f1">
<div id="display"></div>
<form  id="myform" name="myform" method="POST" action="report1.php">
<label>Training Code:<select class="t1" name="tcode" id="tcode" required >
<?php 
$sql="SELECT * FROM `training_subject`";
    $result=mysqli_query($con,$sql);
    $n=mysqli_num_rows($result);
    
    if($n>=1)
    {
               while($row=mysqli_fetch_array($result)){
                
    echo "<option value=".$row['t_id'].">".$row['t_id']."</option>";
   }
  
    }
   
    ?>
    </select>
</label><br /><br /><input type="hidden" id="tablename" name="'tablename" value="training_subject"/><br />
<button type="sumbit" class="b1" name="btn1" id="btn1">Training Wise Applicant</button>

</form>
</div></td>
    <td><form  id="myform1" name="myform1" method="POST" action="report.php">
<label>Fetch Unique Trainings by :<select class="t1" name="tcode" id="tcode" required >
<option value="training_category">By Category</option>
<option value="training_id">By Training ID</option>
<option value="training_dept_name">BY Department</option>
    </select>
</label><br /><br />
<input type="hidden" id="tablename" name="'tablename" value="gnct_training_details"/><br />
<button type="sumbit" class="b1" name="btn1" id="btn1">Total Different Trainings</button>

</form></td>
    <td>&nbsp;</td>
	
  </tr>
</table>





</body>
</html>



<style>





</style>



<?php

}

?>