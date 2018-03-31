<head>
<script src="./js/jquery-3.0.0.min.js"></script>
<script src="./js/ajax.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
$("#editUpdateBtn").click(function(){
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
if(tcode == '' || pdate == '' || t_sub == ''|| dept == '')
{
$("#result").html("Subject is empty");
}
else
{
// AJAX Code To Submit Form.
$.ajax({
type: "POST",
url: "hod_edit_training_process.php",
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
</head>
<?php
include_once('db.php');
$tid=mysql_real_escape_string($_REQUEST['tid']);
//$newtid=strtok($tid,".");
 $newtid=explode('.',$tid);

$sql="SELECT * FROM training_subject WHERE t_id='".$newtid[0]."'";
   $result=mysqli_query($con,$sql);
$n=mysqli_num_rows($result);
if($n==1)
    {
      $row=mysqli_fetch_assoc($result);  
    }   
      
?>

<p align="center"><b><font size="5" color="#8a1c1c">Update Training Details</font></b></p>
<div id="f1">
<form name="trainingEditForm">
<label>Training Code:<input class="t1" type="text" placeholder="Training Code" name="tcode" id="tcode" value="<?php echo trim($row['t_id']);?> " readonly=""/></label><br />
<label>Training Post Date:<input  class="t2" type="text" placeholder="DD/MM/YY" name="pdate" id="pdate" value="<?php echo trim($row['post_date']);?> "/></label><br />
<label>Training Subject:<textarea rows="2" class="t3" placeholder="Enter Training Subject..." name="t_sub" id="t_sub" readonly=""><?php echo trim($row['t_sub']);?> </textarea></label><br />
<label>Deparment:<input class="t4" type="text" placeholder="Department" name="dept" id="dept" value="<?php echo trim($row['dept']);?> " readonly=""/></label><br />
<label>Start Date:<input class="t5" type="text" placeholder="DD/MM/YY" name="sdate" id="sdate" value="<?php echo trim($row['s_date']);?> "/></label><br />
<label>Last Date:<input   class="t6" type="text" placeholder="DD/MM/YY" name="ldate" id="ldate" value="<?php echo trim($row['l_date']);?> "/></label><br />
<label>Duration:<input   class="t7" type="text" placeholder="Duration" name="duration" id="duration"  value="<?php echo trim($row['duration']);?> " readonly="" /></label><br />
<label>Details:<input class="t8" type="text" placeholder="Details" name="detail" id="detail" value="<?php echo trim($row['detail']);?> "readonly=""/></label><br />
<input type="hidden" name="tid" id="tid" value="<?php echo trim($newtid[0]);?>" /> 

<button id="editUpdateBtn" class="b1" name="btn">Update</button>
</form>

</div>




