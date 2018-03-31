<?php
session_start();

if(!isset($_SESSION['emailid'])){
    header("location:index.php?m=login first...");
    
}

else{
    include_once('db.php');
    $EMAILID=$_SESSION['emailid'];
   // echo $part=substr($EMAILID,0,1);
   $role=$_SESSION['role'];
   $name=$_SESSION['name'];
   $status=$_SESSION['status'];
if($role=="HOD" ){
    
    
    
?>

<html>
<head>
<title>gnct_delhi</title>
<link rel="stylesheet" type="text/css" href="./css/style_1.css" />
<script src="./js/jquery-3.0.0.min.js"></script>
<script>
$(document).ready(function(){
   
    
    $("#acc1").click(function(){
        $("#content").load("new_applicants.php");
    });
    $("#acc2").click(function(){
        $("#content").load("archive_applicants.php");
    });
     $("#acc3").click(function(){
        $("#content").load("hod_current_training.php");
    });
    $("#acc4").click(function(){
        $("#content").load("hod_archive_training.php");
    });
    
    
});
</script>
</head>
<body>
<div id="wrapper">
<div id="header">
<div id="sdebar"><img src="./css/sdm.jpg" width="250px" height="160"/></div>
<p> GNCT DELHI</p>
<p>DIRECTORATE OF TRAINING AND TECHNICAL EDUCATIONS</p></div>
<div id="menu">
<div id="m1"><?php
include_once ('menu_hod.php');
echo "Welcome &nbsp;".$name;
?>
</div>
</div>
<div id="main">
<div id="sidebar">
<?php 
include_once('hod_sidebar_menu.php');
?>
</div>
<div id="content">
<?php    
if($con==false){
    die('Could not connet:'.mysql_error());
}
$sql="SElECT * FROM departement WHERE hod_email='".$EMAILID."'";
$result=mysqli_query($con,$sql);
if($result){
    if(mysqli_num_rows($result)>0)
    {
  echo"<table border=15 align=center>";
  echo"<tr>";
  echo"<th>Email ID</th>";
  echo"<th>Name</th>";
  echo"<th>Department</th>";
  echo"<th>Phone</th>";
  echo"</tr>";
  while($row=mysqli_fetch_array($result)){
    echo"<tr>";
      echo"<td>".$row['hod_email']."</td>";
         echo"<td>".$row['hod_name']."</td>";
        echo "<td>".$row['dept_name']."</td>";
         echo"<td>".$row['phone']."</td>";
         echo"</tr>";
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

<div id="footer">copyright &copy; 2018 </div>
</div>

<?php
}// login change close if for NODAL officer
else if ($role=="NODAL"){// second login else
    //echo "i am here at nodal login";
    ?>
<html>
<head>
<title>gnct_delhi</title>
<link rel="stylesheet" type="text/css" href="./css/style_1.css" />
<script src="./js/jquery-3.0.0.min.js"></script>
<script>
$(document).ready(function(){
    $("#acc").click(function(){
        $("#content").load("hod_update_training.php");
    });
     $("#acc12").click(function(){
        $("#content").load("hod_add_new_training.php");
    });
    $("#acc1").click(function(){
        $("#content").load("new_applicants.php");
    });
    $("#acc2").click(function(){
        $("#content").load("department.php");
    });
     $("#acc3").click(function(){
        $("#content").load("hod_current_training.php");
    });
    
    $("#acc45").click(function(){
        $("#content").load("generate_r.php");
    });
    
    
});
</script>
</head>
<body>



<div id="wrapper">
<div id="header">
<div id="sdebar"><img src="./css/sdm.jpg" width="250px" height="160"/></div>
<p> GNCT DELHI</p>
<p>DIRECTORATE OF TRAINING AND TECHNICAL EDUCATIONS</p></div>
<div id="menu">
<div id="m1"><?php
include_once ('menu_hod.php');
echo "Welcome &nbsp;".$name;
?>
</div>
</div>

<div id="main">
<div id="sidebar">

<?php 
include_once('nodal_sidebar_menu.php');
?>
</div>
<div id="content">
<?php    
if($con==false){
    die('Could not connet:'.mysql_error());
}
$sql="SElECT * FROM departement WHERE hod_email='".$EMAILID."'";
$result=mysqli_query($con,$sql);
if($result){
    if(mysqli_num_rows($result)>0)
    {
  echo"<table border=15 align=center>";
  echo"<tr>";
  echo"<th>Email ID</th>";
  echo"<th>Name</th>";
  echo"<th>Department</th>";
  echo"<th>Phone</th>";
  echo"</tr>";
  while($row=mysqli_fetch_array($result)){
    echo"<tr>";
      echo"<td>".$row['hod_email']."</td>";
         echo"<td>".$row['hod_name']."</td>";
        echo "<td>".$row['dept_name']."</td>";
         echo"<td>".$row['phone']."</td>";
         echo"</tr>";
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

<div id="footer">copyright &copy; 2018 </div>
</div>

<?php
//echo "i am here at end of nodal login";
}// second login else close


}// for session close else
?>

</body>
</html>