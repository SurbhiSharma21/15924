
<script src="./js/jquery-3.0.0.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$('#content').on('click', 'button', function(e) {
 	  
	   $("#editForm").load("hod_archive_training_process.php");
       });
       </script>

<div id="c1">
<div id="editForm"></div>
<span class="bodylink">Archive Training</span>


<div id="form">
<form  name="form" method="post"  action="#">
<label>From:<input  class="t1" type="text" placeholder="DD/MM/YY" id="from" name="from"/></label>
<label> To:<input  class="t2" type="text" placeholder="DD/MM/YY" id="to" name="to"/></label><br/>
<button id="btn1" class="t3" name="btn">Search</button>


</form>
</div>
</div>

<div id="editForm"></div>




