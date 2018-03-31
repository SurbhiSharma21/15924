<html>
<head>
<title>gnct_delhi</title>



<script src="./js/jquery-3.3.1.min.js"></script>
<style type="text/css">
<!--
	 
#popup{
    background: url(./img/sample125.gif) no-repeat;
    position: absolute;
    width: 510px;
    height: 310px;
    margin: 0 auto;
    top: 50%;
    left: 50%;
    transform:translate(-50%, -50%);
    text-align: center;
    background-color: white;
    display: block;
    box-shadow:  2px 2px 2px 2px #ABABAB;
    border-radius: 10px ;
    border: 2px   #804040 ;
    z-index: 1003;
    }
 #close{
    
    font-size: 15px;
    text-align: ;
 }   
   
 </style>
 
 </style>
 <script type="text/javascript">
	$(document).ready(function () {

$("#popup").hide().fadeIn(2500);
$("#close").click(function (e) {
    e.preventDefault();
$("#popup").hide(1000);
 $("#overlay").fadeOut('500'); 
});
});
</script>
</head>
<body>

<div id="popup">
<div id="close">X</div>
<span class="bodylink">HOD REGISTRATION</span>
<?php
if(isset($_REQUEST['m5']))
echo "<font color='RED' size='4px'>".$_REQUEST['m5']."</font><br/>";

?>
<form name="form" method="post" action="hod_register_process.php">
<label> Name:<input  class="t1" type="text" placeholder="NAME" id="name" name="name"/></label><br />
<?php
if(isset($_REQUEST['m1'])){
    echo "<font color='RED' size='4px'>".$_REQUEST['m1']."</font></br>";
}

?>
<label> Email:<input  class="t2" type="text" placeholder="EMAIL" id="emailid" name="emailid"/></label><br />
<?php
if(isset($_REQUEST['m2'])){
    echo "<font color='RED' size='4px'>".$_REQUEST['m2']."</font></br>";
}

?>
<label>Department:<input  class="t3" type="text" placeholder="Department" id="training_dept" name="training_dept"/></label><br />
<?php
if(isset($_REQUEST['m3'])){
    echo "<font color='RED' size='4px'>".$_REQUEST['m3']."</font></br>";
}

?>
<label> Contact no:<input  class="t4" type="text" placeholder="PHONE NO" id="phone" name="phone"/></label><br />
<?php
if(isset($_REQUEST['m4'])){
    echo "<font color='RED' size='4px'>".$_REQUEST['m4']."</font></br>";
}

?>
<label> Password:<input class="t5" type="password" placeholder="PASSWORD" id="pwd" name="pwd"/></label><br />
<?php
if(isset($_REQUEST['m5'])){
    echo "<font color='RED' size='4px'>".$_REQUEST['m5']."</font></br>";
}

?>
<label> Role:<input class="t6" type="text" placeholder="Role" id="role" name="role"/></label><br />
<?php
if(isset($_REQUEST['m6'])){
    echo "<font color='RED' size='4px'>".$_REQUEST['m6']."</font></br>";
}

?>
<button type="sumbit" class="t7" name="btn1">Register</button>
<button type="reset" class="t8" name="btn2">Reset</button>
</form>
</div>





</body>
</html>