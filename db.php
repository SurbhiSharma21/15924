<?php
$localhost="localhost";
$user="root";
$pass="";
$dbname="new_gnct_db";
$con=mysqli_connect($localhost,$user,$pass) or die("Unable to connect db");
mysqli_select_db($con,$dbname) or die("Unable to find db");

?>