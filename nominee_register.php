<html>
<head>
<title>gnct_delhi</title>
</head>
<body>

<div id="form">
<?php
if(isset($_REQUEST['m5']))
echo "<font color='RED' size='4px'>".$_REQUEST['m5']."</font><br/>";

?>
<form name="form" method="post" action="nominee_reg_process.php">
<label> Name:<input  class="t1" type="text" placeholder="NAME" id="name" name="name"/></label><br />
<?php
if(isset($_REQUEST['m1'])){
    echo "<font color='RED' size='4px'>".$_REQUEST['m1']."</font></br>";
}

?>
<label> Email:<input  class="t2" type="text" placeholder="EMAIL" id="email" name="email"/></label><br />
<?php
if(isset($_REQUEST['m2'])){
    echo "<font color='RED' size='4px'>".$_REQUEST['m2']."</font></br>";
}

?>
<label> Contact no:<input  class="t3" type="text" placeholder="PHONE NO" id="phone" name="phone"/></label><br />
<?php
if(isset($_REQUEST['m3'])){
    echo "<font color='RED' size='4px'>".$_REQUEST['m3']."</font></br>";
}

?>
<label> Password:<input class="t4" type="password" placeholder="PASSWORD" id="pwd" name="pwd"/></label><br />
<?php
if(isset($_REQUEST['m4'])){
    echo "<font color='RED' size='4px'>".$_REQUEST['m4']."</font></br>";
}

?>
<button type="sumbit" class="t5" name="btn1">Register</button>
<button type="reset" class="t6" name="btn2">Cancel</button>
</form>
</div>





</body>
</html>