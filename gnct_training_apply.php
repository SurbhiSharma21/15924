<?php
include_once('db.php');
$tid=mysql_real_escape_string($_REQUEST['tid']);
$sql="SELECT * FROM training_subject WHERE t_id='".$tid."'";
   $result=mysqli_query($con,$sql);
$n=mysqli_num_rows($result);
if($n==1)
    {
      $row=mysqli_fetch_assoc($result);  
      

     }   
      
?>
<html>
<head>
<title>gnct_delhi</title>
<link rel="stylesheet" type="text/css" href="./css/gnct_training_apply1.css" />
<style>
#preview{
    position: absolute;
    margin-left: 300px;
    display: none;
    width: 50%;
    background-color: white;
    z-index: 1000;
    border-radius: 10px;
    box-shadow: 2px 2px 2px 2px;
    padding: 25px;
}

#bodyOverlay {background-color: rgba(0, 0, 0, 0.6);z-index: 999;position: absolute;left: 0;top: 0; width: 100%; height: 1200px; display: none;}

.tooltip{
    background-color: #fff;
    border: 1px solid #fff;
    border-radius: 3px;
    padding: 5px 8px;
    width: 150px;
    display: none;
    color: white;
    text-align: left;
    font-size: 10px;
    box-shadow: 2px 2px 2px 2px;
    
}
.btnSubmit1 {
    float: right;
    background-color: #565656;
    border-radius: 4px;
    padding: 10px;
    border: #333 1px solid;
    color: #FFFFFF;
    width: 200px;
	cursor:pointer;
    margin-top: 5px;
    margin-bottom: 15px;
    margin-left: 5px;
}

</style>
<script src="./js/jquery-3.0.0.min.js"></script>
<script src="./js/myvalidation.js"></script>
<script type="text/javascript">
$(document).ready(function(){
$("#fetchBtn").click(function(e){
   var ecode = $("#ecode").val();
  
if(ecode == '')
{
    alert("Enter Employee Code");

}
});
var validate_ecode = function(ecode){
  var pattern =  /^[a-zA-Z0-9]+$/;
  var is_ecode_valid = false;
  if(ecode.match(pattern) != null){
    is_ecode_valid = true;
      }
  return is_ecode_valid;
}

$(document).on("keyup", "#ecode",  function(event){
  var keypressed = event.which;
  var input_val = $(this).val();
  var is_success = true;
  if(keypressed == 9){
    is_success = validate_ecode(input_val);   
    if(!is_success){
      $(this).focus();
       alert("Enter a valid Employee Code");
    }
  }
});

$(document).on("focusout", "#ecode", function(){
  var input_val = $(this).val();
  var is_success = validate_ecode(input_val); 
  if(!is_success){
    $("#ecode").focus();
  
  }
});


//submitBtn Coding

$("#submitBtn").click(function(e){
var fecode = $("#fecode").val();

var tid = $("#tid").val();
var t_dept = $("#Deptcode").val();
var dataString = 'f1='+fecode+"&f2="+tid+"&f3="+t_dept; 
if(fecode == '' || tid== '')
{
    alert("Error");

}

else
{
$.ajax({
                type: 'POST',
                url: 'gnct_training_apply_process.php',
                data: dataString,
                cache: false,
                success: function(data)
                {
                    alert(data);
                    if(data=="ok")
                    {
                      window.location="user_image_signature_upload.php?tid="+tid+"&ecode="+fecode;  
                    }
                  
                
                    else
                    {
                        alert(data);
                    }                    
                    
                },
                error:function(data)
                {
                     $("#showForm").html(data).show();
                                                           
                    
                }
                });
                }
return false;
});



});


             

		
    
</script>
    
</head>

<body>
<div id="bodyOverlay"></div>
<div id="preview">
<a id="previewClose" href="#">Close</a>
<div id="showForm"></div>
</div>
<div id="wrapper">
<?php include_once ('gnct_header.php'); ?>
<div id="menu">
<div id="m1"><?php
include_once ('menu.php');
?>
</div>
</div>

<div id="main">
 <div id="content">
<div id="fm">
<div id="form">
<p align="center"><b><font size="5" color="#8a1c1c">Nomination Form</font></b></p>
<form name="appyForm" method="POST">
<p align="left"><b><font size="5" color="#8a1c1c">Training Details</font></b></p>
<label >Training Subject:<input  type="text"class="t0" placeholder="" readonly id="t_sub" name="t_sub" value="<?php echo $row['t_sub'];?>"/></label><?php   echo str_repeat('&nbsp;', 10);?>
<label >Department Code:<input  type="text"class="t1" readonly="" placeholder="" id="dept_code" name="dept_code" value="<?php echo $deptCode=$row['training_dept_code'];?>"/></label><?php   echo str_repeat('&nbsp;', 10);?>
<label >Training Department:<input  type="text"class="t1" readonly="" placeholder="" id="dept" name="dept" value="<?php echo $row['dept'];?>"/></label> <br/>
<label > Duration:<input class="t2" type="text" placeholder="" readonly="" id="duration" name="duration" value="<?php echo   $row['duration'];?>"/></label><br />

<label> Employee Code:<input  class="t3" type="text" placeholder="Enter Employee Code" id="ecode" name="ecode" required /></label>


<input type="hidden" id="tid" value="<?php echo $tid; ?>"/>


<button type="submit" name="fetchBtn" id="fetchBtn" class="btnSubmit1">Fetch Details</button>

</form>
<div id="fetchDetailsShow"><?php
if(isset($_POST['fetchBtn'])){ //check if form was submitted
  //fetch data in form here
  $ecode=$_POST['ecode'];
  
  include_once("db.php");
 $sql="SELECT * FROM `gnct_emp` WHERE emp_id='".$ecode."'";
$result=mysqli_query($con,$sql);
$n=mysqli_num_rows($result);
if($n == 1)
    {
        $row=mysqli_fetch_assoc($result);
        ?>
  <form name="applyform1">  
<p align="left"><b><font size="5" color="#8a1c1c">Personal Details</font></b></p>
<label> Employee Name:<input  class="t4" type="text" id="name" name="name" value="<?php echo $row['emp_name']; ?>" readonly /></label><?php   echo str_repeat('&nbsp;', 10);?>




<label> Date Of Birth:<input  class="t6" type="text" placeholder="DD/MM/YYYY" id="dob" name="dob" value="<?php echo $row['emp_dob']; ?>"  readonly/></label><?php   echo str_repeat('&nbsp;', 10);?>



<label > Gender:<input class="t7" type="text" name="gender" id="gender" value="male" value="<?php echo $row['gender']; ?>"  readonly/> <br />
               

              
  <label> Nationality:</label><input type="text" id="national" name="national" value="<?php echo $row['nationality']; ?>" readonly/><?php   echo str_repeat('&nbsp;', 10);?>


<label> Email:<input  class="t11" type="text" placeholder="Email" id="email" name="email" value="<?php echo $row['email']; ?>"  readonly/></label> <?php   echo str_repeat('&nbsp;', 10);?>

<label>Phone:<input  class="t12" type="text" placeholder="Contact No." id="phone" name="phone" value="<?php echo $row['phone']; ?>"  readonly/></label> <br />



<label> Designation:<input  class="t13" type="text" placeholder="Job Title" id="designation" name="designation" value="<?php echo $row['designation']; ?>" readonly/></label><?php   echo str_repeat('&nbsp;', 10);?>

<label> Organization:<input  class="t14" type="text" placeholder="Your Organization" id="organization" name="organization" value="<?php echo $row['organization']; ?>" readonly/></label><?php   echo str_repeat('&nbsp;', 10);?>
 
<label>Department:<input  class="t15" type="text" placeholder="Your Department" id="department" name="department" value="<?php echo $row['emp_dept']; ?>"  readonly/></label> <br />


<label>Address:<textarea class="t16"  id="address" name="address" rows="5" cols="120" readonly/><?php echo $row['address']; ?></textarea></label>      

<br />
<b><font size="5" color="#8a1c1c">Qualification Details</font></br>




 
<label>Qualification:<input  class="t23" type="text" placeholder="Major Subject/Degree" id="qualification" name="qualification" readonly value="<?php echo $row['emp_qualification']; ?>" required/></label><?php   echo str_repeat('&nbsp;', 10);?>
<input  class="t4" type="hidden" id="tid" name="tid" value="<?php echo $tid; ?>"/> 
<input  class="t4" type="hidden" id="fecode" name="fecode" value="<?php echo $ecode; ?>"/> 
<input  class="t4" type="hidden" id="Deptcode" name="Deptcode" value="<?php echo $deptCode; ?>"/>
 <br /><input  class="btnSubmit1" type="submit" name="submitBtn" id="submitBtn" value="Submit Details & Next" />
</form> 
        
        <?php
        }
        
else{

  echo "No Such Employee Found. Please Check Your Employee ID";

}    
}

?></div>
</div>
</div>
</div>
</div>

<div id="footer">copyright &copy; 2018 </div>
</div>


</body>
</html>