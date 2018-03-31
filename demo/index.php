<html>
<head>
<title>
dynamic tab and ajax demo
</title>
<script src="./js/jquery-3.3.1.min.js" ></script>
<script src="./js/ajax.min.js"></script>
<script type="text/javascript">
$(document).ready(function (){
	$("#btn").click(function(){
		var user = $("#name").val();
		if(user=='' || $("#pwd").val()==''){
			$("#display").html("Field Empty");
		}
		else
		{
			 $.ajax({
                type : "POST",
                url : "process.php",
                data : $('#myform').serialize(),
                success : function (data) {
                    $('#display').html(data);
                },
				error:function (data) {
                    $('#display').html(data);
                }
            });
			
		}
	});
});
</script>
</head>
<body>
<form id="myform">
Enter Name:<input type="text" id="name" name="name"/><br/>
Enter Password:<input type="password" id="pwd" name="pwd"/>
<input type="button" id="btn" value="test"/>
</form>
<div id="display"></div>
</body>

</html>