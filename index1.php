<?php
include_once('db.php');
 ?>
<html>
<head>
<title>gnct_delhi</title>
<link rel="stylesheet" type="text/css" href="./css/style.css" />

</head>
<body>



<div id="wrapper">
<div id="header">
<div id="sdebar"><img src="./css/sdm.jpg" width="250px" height="160"/></div>
<p> GNCT DELHI</p>
<p>DIRECTORATE OF TRAINING AND TECHNICAL EDUCATIONS</p>

</div>
<div id="menu">
<div id="m1"><?php
include_once ('menu.php');


?>
</div>
</div>

<div id="main">
<div id="sidebar"><span class="bod"><b>Latest News</b></span>
<div id="c1"> <marquee  behavior="scroll" direction="up" scrolldelay="1" scrollamount="2" onmouseover="this.stop();" onmouseout="this.start();"><span class="bodylink">
 <?php

$sql="SELECT * FROM `training_subject`";
$result=mysqli_query($con,$sql);
$n=mysqli_num_rows($result);
for($i=1;$i<=$n;$i++){
$row=mysqli_fetch_array($result);  


?>
<?php  echo "Training are open for ".$row['t_sub'] ?>in department&nbsp;<?php echo $row['dept']?>&nbsp;in start date<?php echo $row['s_date']?> and last date for submission is<?php echo $row['l_date']."<br/><br/>" ?>
<?php } ?>
</span></marquee></div>
</div>
<div id="s1">
<span class="bodylink1">About Online Nomination</span>
<p><b>Introduction :</b><br />

Education holds the key to economic growth, social transformation, modernization and national integration. The National Policy on Education formulated in 1986 and modified in 1992 aims to provide education of a comparable quality up to a given level to all students irrespective of their caste, creed residence or sex. It aims at promotion of a national, a sense of common citizenship and composite culture and strengthening national integration. It lays stress on the need for a radical transformation of the education system to improve its quality at all stages and gives much greater attention to Science and Technology. All children are proposed to be provided free and compulsory education up to 14 years of age. The Directorate of Education earnestly endeavors to implement the policy. </p></div>

<div id="content">
<div id="fm">
<div id="form">
<?php
if(isset($_REQUEST['m'])){
    echo "<font color=red size=4px>".$_REQUEST['m']."</font><br/>";
}

?>
<p align="center"><b><font size="5" color="#8a1c1c">User Login</font></b></p>
<form name="form" method="post" action="login_process1.php">

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