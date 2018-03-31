

<script src="./js/jquery-3.0.0.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$('#content').on('click', 'button', function(e) {
 	  
	   $("#editForm").load("archive_applicants_process.php");
       });
       </script>

<div id="c1">
<div id="editForm"></div>
<span class="bodylink">Archive Nomination</span>


<div id="form">
<form  name="form" method="post"  action="archive_applicants_process.php">
<label>From:<input  class="t1" type="text" placeholder="DD/MM/YY" id="from" name="from"/></label>
<label> To:<input  class="t2" type="text" placeholder="DD/MM/YY" id="to" name="to"/></label><br/>
<button id="archive" class="t3" name="btn">Search</button>


</form>
</div>
</div>






