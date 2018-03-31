<?php
// I dont know exactly how you create your page 
// so i'm just gonna show you a simple example  and wing it
$array_other_new=array("John Smith","James Jones", "William Baker", "Michael Frost", "Montey Python");
$array_other_new_hire_ids=array("123","456", "789", "012", "345");
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Modal Test</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script>
$(function() {
    // listen for clicks on our links
    $('body').on("click",".callModal", function() {
        // when a user clicks a button
        // get the id we stored in the button's
        // data attribute  
        var f_id = $(this).data('f-id');
        // note our attribute is `data-f-id` in the html 
        // but we access it by `.data('f-id')` here
        // always leave the `data-` off
        // set the value to our input
        $('#get_hire_id').val( f_id );
        // the normal link functionallity 
        // will open the modal as normal
    });
});
</script>
</head>
<body>
<?php
for($i = 0; $i < count($array_other_new); ++$i) {
    echo '<a href="#login_hire" data-toggle="modal" data-f-id="'.$array_other_new_hire_ids[$i].'" class="btn btn-large callModal">Hire '.$array_other_new[$i].'</a>';
} 
// the important part here is data-f-id="'.$array_other_new_hire_ids[$i].'"
// this is where we store our php variable in the link's data-f-id property which we have just made up, cool huh? 
// also note that we added the class `callModal` to the element so we can easily bind a function to them later
?>
<!-- end of the modal ---------------------------------------------------------------------------------------------------->
<div class="modal large fade" id="login_hire" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" >
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3>LogIn</h3>
      </div>
      <div class="modal-body">
        <form method="post" onSubmit="javascript:void(0)">
          <span id="status"></span>
          <input type="text" id="get_follow_id" value="">
          <input type="text" id="get_hire_id" value="">
          unhid to show setting value<br>
          <div class="controls controls-row">
            <label class="title">Email *</label>
            <input class="span3" type="text" placeholder="Email" id="email" />
          </div>
          <div class="controls controls-row">
            <label class="title">Password *</label>
            <input class="span3" type="password" id="pass" placeholder="Password" />
          </div>
          <div class="controls controls-row">
            <input type="submit" onClick="login(); return false;" value="Click Here to LogIn" class="btn" />
            <br>
            <br>
            <a onclick="whenClicked1()" href="javascript:void(0)">Not Registered Yet ? Sign Up Now</a> </div>
        </form>
      </div>
      <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
      </div>
    </div>
  </div>
</div>
<!-- end of the modal ---------------------------------------------------------------------------------------------------->
</body></html>