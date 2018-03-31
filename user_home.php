<?php
session_start();
$EMAILID=$_SESSION['emailid'];


?>

<html>
<head>
<title>gnct_delhi</title>
<link rel="stylesheet" type="text/css" href="./css/nom_home.css" />
<script src="./js/jquery-3.0.0.min.js"></script>
<script>

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
echo "Welcome" .$EMAILID;
?>
</div>
</div>

<div id="main">
<div id="sidebar">

<ul id="drop-nav">
<li><a href="user_home.php">Home</a></li>
<li><a id="acc1" href="#">Current Training</a></li>

<li><a id="a2" href="#">New Training</a></li>
<li><a href="#">Update Documents</a></li>
</ul>

<div id="content">
<?php    
include_once('db.php');

    




?>


</div>
</div>
</div>
<div id="footer">copyright &copy; 2018 </div>
</div>


</body>
</html>