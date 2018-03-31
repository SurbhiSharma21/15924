<html>
<head>
<title>
dynamic tab and ajax demo
</title>
<script src="./js/jquery-3.0.0.min.js" ></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function (){
	$("#btn").click(function(){
		var user = $("#name").val();
		if(user==''){
			$("#display").html("Field Empty");
		}
		else
		{
			$.post( $("#myform").attr("action"),
			$("#myform :input").serializeArray(),
			function(data){
				$("#display").html(data);
			});
			
			$("#myform").submit(function(){
				return false;
			});
			
		}
	});
});
</script>
</head>
<body>
<form id="myform" action="process.php" method="POST">
Enter Name:<input type="text" id="name" name="name"/>
<input type="button" id="btn" value="test"/>
</form>
<div id="display"></div>

</body>

</html>