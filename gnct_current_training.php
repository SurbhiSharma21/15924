<?php  
include_once('db.php');
?>

<html>
<head>
<title>gnct_delhi</title>
<link rel="stylesheet" type="text/css" href="./css/gnct_exam.css" />
<script src="./js/jquery-3.0.0.min.js"></script>
<script>
$(document).ready(function(){
    
    
    $("#a2").click(function(){
        $("#content").load("gnct_archive_training.php");
    });
   
   
});
</script>
</head>
<body>



<div id="wrapper">
<?php include_once ('gnct_header.php'); ?>
<div id="menu">
<div id="m1"><?php
include_once ('menu.php');

?>
</div>
</div>

<div id="main">



<div id="content">

<div id="c1">
<span class="bodylink">Current Trainings</span>

<?php
// code to fetch data from trainigs details
  $sql="SELECT * FROM `training_subject`";
$result=mysqli_query($con,$sql);
$n=mysqli_num_rows($result);


if($result){
    if(mysqli_num_rows($result)>0){
        echo "<table border=1  cellsppading=15 cellspacing=15>
<tr>
<th>Training Id</th>
<th>Post Date</th>
<th>Training Subject</th>
<th>Department </th>
<th>Submission Start Date</th>
<th>Submission Last Date</th>
<th>Duration</th>
<th>Advertisement</th>
<th>Status</th>";
while($row=mysqli_fetch_array($result)){
echo "<tr><td>". $row['t_id']."</td><td>".$row['post_date']."</td><td>".$row['t_sub']."</td><td>".$row['dept']."<br/>(".$row['training_dept_code'].")</td><td>".$row['s_date']."</td><td>".$row['l_date']."</td><td>".$row['duration']."</td><td><a href=#?doc=".$row['detail'].">Download</a></td><td><a href=gnct_training_apply.php?tid=".$row['t_id'].">Apply Online</a></td></tr>";
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



</div>
</div>
</div>

</div>
<div id="footer">copyright &copy; 2018 </div>
</div>

</body>
</html>