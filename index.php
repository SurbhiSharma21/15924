<html>
<head>
<title>gnct_delhi</title>
<link rel="stylesheet" type="text/css" href="./css/style.css" />
<script src="./js/jquery-3.0.0.min.js"></script>

<script>$(document).ready(function(){
    $("#btn1").click(function(){
        $("#s1").load("hod_register.php");
    });
    });</script>
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
<div id="sidebar"><span class="bod"><b>Latest News</b></span>
<div id="c1"> <marquee style="padding: 10px; text-align: justify; height: 90%;"  behavior="scroll" direction="up" scrolldelay="1" scrollamount="2" onmouseover="this.stop();" onmouseout="this.start();">
 <?php
include_once('db.php');
$sql="SELECT * FROM `training_subject`";
$result=mysqli_query($con,$sql);
$n=mysqli_num_rows($result);
for($i=1;$i<=$n;$i++){
$row=mysqli_fetch_array($result);  


?>
<?php  echo "Training are open for ".$row['t_sub'] ?>in department&nbsp;<?php echo $row['dept']?>&nbsp;in start date<?php echo $row['s_date']?> and last date for submission is<?php echo $row['l_date']."<br/><br/><br/>" ?>
<?php } ?>
</marquee></div>
</div>
<div id="s1">
<span class="bodylink">About Online Nomination</span>
</div>

<div id="content">
<div id="fm">
<div id="form">
<?php
if(isset($_REQUEST['m'])){
    echo "<font color=red size=4px>".$_REQUEST['m']."</font><br/>";
}

?>
<p align="center"><b><font size="5" color="#8a1c1c">Department Login</font></b></p>
<form name="form" method="post" action="login_process.php">

<label> ID:<input  class="t1" type="text" placeholder="Enter Your  ID" id="emailid" name="emailid"/></label><br />
<?php
if(isset($_REQUEST['m1'])){
    echo "<font color=red size=4px>".$_REQUEST['m1']."</font><br/>";
}

?>
<label> Password:<input  class="t2" type="password" placeholder="Password" id="pwd" name="pwd"/></label><br />
<?php
if(isset($_REQUEST['m2'])){
    echo "<font color=red size=4px>".$_REQUEST['m2']."</font><br/>";
}

?>
<button type="sumbit" class="t3" name="btn">Login</button>
</form> 

</div>


</div>

</div>
</div>
<div id="footer">copyright &copy; 2018 </div>
</div>


</body>
</html>