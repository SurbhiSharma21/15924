<?php
session_start();
if(!isset($_SESSION['ecode'])){
    header("location:gnct_training_apply.php?tid=".mysql_real_escape_string($_REQUEST['tid'])."&m=fill the application form first...");
    
}
else{
   
include_once('db.php');
$tid=mysql_real_escape_string($_REQUEST['tid']);
$sql="SELECT * FROM training_subject WHERE t_id='".$tid."'";
   $result=mysqli_query($con,$sql);
$n=mysqli_num_rows($result);
if($n==1)
    {
      $row=mysqli_fetch_assoc($result);  
      

     }  
     $_SESSION['tid']=$tid; 
     
      
?>
<html>
<head>
<title>gnct_delhi</title>
<link rel="stylesheet" type="text/css" href="./css/gnct_training_apply.css" />
<style>
body {font-family: calibri;}
.bgColor {
    max-width: 90%;
    height: 400px;
    background-color:  #f2f2f2;
    padding: 30px;
    border-radius: 4px;
	text-align: center; 
    margin-top: 10px; 
    margin-bottom: 10px;  
    margin-left: 30px;
}
#ImageLeft{
    float: left;
    max-width: 50%;
    margin-left: 100px;
}
#SignatureRight{
    float: right;
    max-width: 50%;
    margin-right: 100px;
}
#finalConsent{
    position: relative;
    max-width: 80%;
}
#targetOuter{	
	position:relative;
    text-align: center;
    background-color: #F0E8E0;
    margin: 20px auto;
    width: 200px;
    height: 200px;
	border-radius: 4px;
}
#targetOuterSign{	
	position:relative;
    text-align: center;
    background-color: #F0E8E0;
    margin: 20px auto;
    width: 200px;
    height: 100px;
	border-radius: 4px;
}
.btnSubmit {
    background-color: #565656;
    border-radius: 4px;
    padding: 10px;
    border: #333 1px solid;
    color: #FFFFFF;
    width: 200px;
	cursor:pointer;
}
.inputFile {
    padding: 5px 0px;
	margin-top:8px;	
    background-color: #FFFFFF;
    width: 48px;	
    overflow: hidden;
	opacity: 0;	
	cursor:pointer;
}
.icon-choose-image {
    position: absolute;
    opacity: 0.1;
    top: 50%;
    left: 50%;
    margin-top: -24px;
    margin-left: -24px;
    width: 48px;
    height: 48px;
}
.upload-preview {border-radius:4px;}
#body-overlay {background-color: rgba(0, 0, 0, 0.6);z-index: 999;position: absolute;left: 0;top: 0;width: 100%;height: 100%;display: none;}
#body-overlay div {position:absolute;left:50%;top:50%;margin-top:-32px;margin-left:-32px;}
#declaration{  margin-top: 150px; }
#dec{
    margin-left: 20px;
    
}
form .t1{margin-left: 6px;}
</style>
<script src="./js/jquery-3.0.0.min.js"></script>
<script type="text/javascript">
function showPreview(objFileInput) {
    if (objFileInput.files[0]) {
        var fileReader = new FileReader();
        fileReader.onload = function (e) {
            $("#targetLayer").html('<img src="'+e.target.result+'" width="200px" height="200px" class="upload-preview" />');
			$("#targetLayer").css('opacity','0.7');
			$(".icon-choose-image").css('opacity','0.5');
        }
		fileReader.readAsDataURL(objFileInput.files[0]);
    }
}
function showPreviewSign(objFileInput) {
    if (objFileInput.files[0]) {
        var fileReader = new FileReader();
        fileReader.onload = function (e) {
            $("#targetLayerSign").html('<img src="'+e.target.result+'" width="200px" height="100px" class="upload-preview" />');
			$("#targetLayerSign").css('opacity','0.7');
			$(".icon-choose-image").css('opacity','0.5');
        }
		fileReader.readAsDataURL(objFileInput.files[0]);
    }
}

$(document).ready(function (e) {
	$("#uploadForm").on('submit',(function(e) {
		e.preventDefault();
		$.ajax({
        	url: "user_image_upload.php",
			type: "POST",
			data:  new FormData(this),
			beforeSend: function(){$("#body-overlay").show();},
			contentType: false,
    	    processData:false,
			success: function(data)
		    {
			$("#targetLayer").html(data);
			$("#targetLayer").css('opacity','1');
			setInterval(function() {$("#body-overlay").hide(); },500);
			},
		  	error: function() 
	    	{
	    	} 	        
	   });
	}));
    
    	$("#uploadFormSign").on('submit',(function(e) {
		e.preventDefault();
		$.ajax({
        	url: "user_sign_upload.php",
			type: "POST",
			data:  new FormData(this),
			beforeSend: function(){$("#body-overlay").show();},
			contentType: false,
    	    processData:false,
			success: function(data)
		    {
			$("#targetLayerSign").html(data);
			$("#targetLayerSign").css('opacity','1');
			setInterval(function() {$("#body-overlay").hide(); },500);
			},
		  	error: function() 
	    	{
	    	} 	        
	   });
	}));
});
</script>
    
</head>

<body>
<div id="wrapper">
<?php include_once ('gnct_header.php'); ?>
<div id="menu">
<div id="m1"><?php
echo " Welcome: ".$_SESSION['ecode']." Application ID is".$_SESSION['application_id'];
?>
</div>
</div>

<div id="main">
 




<div id="content">

<div id="body-overlay"><div><img src="img/loading.gif" width="64px" height="64px"/></div></div>
<div class="bgColor">
<div id="ImageLeft">
<form id="uploadForm" action="user_image_upload.php" method="post">
<div id="targetOuter">
	<div id="targetLayer"></div>
	<img src="img/photo.png"  class="icon-choose-image" />
	<div class="icon-choose-image" >
	<input name="userImage" id="userImage" type="file" class="inputFile" onChange="showPreview(this);" />
    <input type="hidden" id="uid" name="uid" value="<?php echo $_SESSION['application_id'];?>"/>
	</div>
</div>
<div>
<input type="submit" value="Upload Photo" class="btnSubmit" />
</form>
</div>
</div>
<div id="SignatureRight">
<form id="uploadFormSign" action="upload1.php" method="post">
<div id="targetOuterSign">
	<div id="targetLayerSign"></div>
	<img src="img/photo.png"  class="icon-choose-image" />
	<div class="icon-choose-image" >
	<input name="userImage" id="userImage" type="file" class="inputFile" onChange="showPreviewSign(this);" />
    <input type="hidden" id="uid" name="uid" value="<?php echo $_SESSION['application_id'];?>"/>
	</div>
</div>
<div>
<input type="submit" value="Upload Signature" class="btnSubmit" />
</form>

</div>

</div>
<div id="declaration">

<form id="finalsubmit" action="final_submit_form.php" method="post">
<input type="checkbox" class="c1" id="declaration" name="declaration"/> <label id="dec">I certify that the information given above is true and complete to the best of my knowledge. 
 By affixing my signature, I hereby assure you that I don’t have any physical disability and mental problems which may hinder me to attend all activities under this training course,
 including site visit if it is scheduled, without special supports or preparations by the host organization.<br />  </label>
<input type="hidden" name="appid" id="appid" value="<?php  echo $_SESSION['application_id']; ?>"/>
<input type="submit" value="Final Submit" class="btnSubmit"/>
</form>

</div>
</div>




</div>
<div>&nbsp;.</div>
</div>
<div id="footer">copyright &copy; 2018 </div>
</div>


</body>
</html>
<?php } ?>