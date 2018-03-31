<?php
session_start();
if(!isset($_SESSION['emailid'])){
    header("location:index.php?m=logged-in first....");
}
else{

$EMAILID=$_SESSION['emailid'];

?>

<html><head>

<script src="./js/jquery-3.0.0.min.js"></script>
<script src="./js/ajax.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
$("#btn1").click(function(){
var tcode = $("#tcode").val();
var pdate = $("#pdate").val();
var t_sub = $("#t_sub").val();
var dept = $("#dept").val();
var sdate = $("#sdate").val();
var ldate = $("#ldate").val();
var duration = $("#duration").val();
var detail = $("#detail").val();
var tid = $("#tid").val();
var dataString = 'f1='+tcode+'&f2='+pdate+'&f3='+t_sub+'&f4='+dept+'&f5='+sdate+'&f6='+ldate+'&f7='+duration+'&f8='+detail+'&f9='+tid;

if(tcode == '')
{
$("#result").html("Training Code is empty");
}
else if(pdate == ''){
    $("#result").html("Post Date is empty");
}
else if(t_sub == ''){
    $("#result").html("Subject is empty");
}
else if(dept == ''){
    $("#result").html("department is empty");
}
else if(sdate == ''){
    $("#result").html("Starting date is empty");
}
else if(ldate == ''){
    $("#result").html("last date is empty");
}
else if(duration == ''){
    $("#result").html("duration is empty");
}
else if(detail == ''){
    $("#result").html("detail is empty");
}

else
{
// AJAX Code To Submit Form.
$.ajax({
type: "POST",
url: "hod_add_new_training_process.php",
data: dataString,
cache: false,
success: function(result){
$("#result").html(result);
},
error: function(result){
$("#result").html(result);
}
});
}
return false;
});
});
</script>
		<div id="result"></div>

</head><body></body></html>
<link  rel="stylesheet" type="text/css" href="./css/hod_update_training.css"/>
<p align="center"><b><font size="5" color="#8a1c1c">Add New Training</font></b></p>
<div id="f1">
<div id="display"></div>
<form  id="myform" name="myform" method="POST" action="#">
<label>Training Code:<input class="t1" type="text" placeholder="Training Code" name="tcode" id="tcode"/></label><br />
<label>Training Post Date:<input  class="t2" type="text" placeholder="DD/MM/YY" name="pdate" id="pdate"/></label><br />
<label>Training Subject:<input type="text" class="t3" placeholder="Enter Training Subject" name="t_sub" id="t_sub"/></label><br />
<label>Deparment:<input class="t4" type="text" placeholder="Department" name="dept" id="dept"/></label><br />
<label>Start Date:<input class="t5" type="text" placeholder="DD/MM/YY" name="sdate" id="sdate"/></label><br />
<label>Last Date:<input   class="t6" type="text" placeholder="DD/MM/YY" name="ldate" id="ldate"/></label><br />
<label>Duration:<input   class="t7" type="text" placeholder="Duration" name="duration" id="duration"/></label><br />
<label>Details:<input class="t8" type="file" name="detail" id="detail"/></label><br />
<button type="sumbit" class="b1" name="btn1" id="btn1">Update</button>
<button type="reset" class="b2" name="btn">Cancel</button>
</form>
</div>
<style>





</style>



<?php

}

?>