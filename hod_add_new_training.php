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

<html><head>

<script src="./js/jquery-3.0.0.min.js"></script>
<script src="./js/ajax.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
/*$("#btn1").click(function(){
var tcode = $("#tcode").val();
var pdate = $("#pdate").val();
var dept = $("#dept").val();
var sdate = $("#sdate").val();
var ldate = $("#ldate").val();
var duration = $("#duration").val();
var detail = $("#detail").val();
var tid = $("#tid").val();
var dataString = 'f1='+tcode+'&f2='+pdate+'&f4='+dept+'&f5='+sdate+'&f6='+ldate+'&f7='+duration+'&f8='+detail+'&f9='+tid;

if(tcode == '')
{
$("#result").html("Training Code is empty");
}
else if(pdate == ''){
    $("#result").html("Post Date is empty");
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
/*$.ajax({
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
});*/
	$("#myform").on('submit',(function(e) {
		e.preventDefault();
		$.ajax({
        	url: "hod_add_new_training_process.php",
			type: "POST",
			data:  new FormData(this),
			//beforeSend: function(){$("#body-overlay").show();},
			contentType: false,
    	    processData:false,
			success: function(data)
		    {
			$("#result").html(data);
			//alert(data);
		//	setInterval(function() {$("#body-overlay").hide(); },500);
			},
		  	error: function() 
	    	{
	    	  alert('not ok');
	    	} 	        
	   });
	}));
//}

//});
});
</script>
		<div id="result"></div>

</head><body></body></html>
<link  rel="stylesheet" type="text/css" href="./css/hod_update_training.css"/>
<p align="center"><b><font size="5" color="#8a1c1c">Add New Training</font></b></p>
<div id="f1">
<div id="display"></div>
<form  id="myform" name="myform" method="POST" action="hod_add_new_training_process.php">
<label>Training Deparment Code:<select class="t4" name="training_dept_code" id="training_dept_code" required >
<option value="GNCTADM001">GNCTADM001</option>
    </select></label><br />
<label>Deparment Name:<input class="t4" type="text" placeholder="Department" name="dept" id="dept" value="ADMINISTRATION" readonly=""/></label><br />
<label>Training Code:<select class="t1" name="tcode" id="tcode" required >
<?php 
$sql="SELECT * FROM `gnct_training_details` WHERE training_dept_code='".$deptCode."'";
    $result=mysqli_query($con,$sql);
    $n=mysqli_num_rows($result);
    
    if($n>=1)
    {
               while($row=mysqli_fetch_array($result)){
    echo "<option value=".$row['training_id'].">".$row['training_id']."</option>";
   }
  
    }
   
    ?>
    </select>
</label><br />

<label>Training Post Date:<input  class="t2" type="text" placeholder="DD/MM/YY" name="pdate" id="pdate" value="<?php echo date("d-m-y"); ?>" readonly=""/></label><br />
<label>Start Date:<input class="t5" type="text" placeholder="DD/MM/YY" name="sdate" id="sdate"/></label><br />
<label>Last Date:<input   class="t6" type="text" placeholder="DD/MM/YY" name="ldate" id="ldate"/></label><br />
<label>Duration:<input   class="t7" type="text" name="duration" id="duration" value="<?php 
$sql="SELECT * FROM `gnct_training_details` WHERE training_dept_code='".$deptCode."'";
    $result=mysqli_query($con,$sql);
    $n=mysqli_num_rows($result);
    
    if($n>=1)
    {
        $row=mysqli_fetch_assoc($result);
    echo $duration=$row['training_duration'];} ?>"/></label><br />
<label>Details:<input class="t8" type="file" placeholder="Details" name="detail" id="detail"/></label><br /><br />
<button type="sumbit" class="b1" name="btn1" id="btn1">Update</button>
<button type="reset" class="b2" name="btn">Cancel</button>
</form>
</div>
<style>





</style>



<?php

}

?>