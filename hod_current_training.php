<?php
session_start();

if(!isset($_SESSION['emailid'])){
    header("location:index.php?m=login first...");
    
}
else{
    include_once('db.php');
    $EMAILID=$_SESSION['emailid'];
$training_dept_code=$_SESSION['dept_code'];
     $role=$_SESSION['role'];
     
?>
<html>
<head>
<style>
#popup{
    position: absolute;
    margin-top: -100px;
    display: none;
    width: 400px;
    height: 400px;
    background-color: white;
    z-index: 1000;
    border-radius: 10px;
    box-shadow: 5px 5px 5px 5px gray;
}
</style>
<script src="./js/jquery-3.0.0.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$('#content').on('click', 'button', function(e) {
		var bid=e.target.id;
     // alert(bid); 
       var dataString = 'f1='+bid;
       var llast_char=bid.charAt(bid.length-1); 
       var second_char=bid.charAt(bid.length-2);  
       var last_char=second_char+llast_char;
      // alert(last_char);
       if(last_char == '.E')  {  
		$("#editForm").load("hod_edit_training.php?tid="+bid);
        $("#popup").fadeIn();
        }
        if(last_char == '.D')
        {
            $.ajax({
                type: 'POST',
                url: 'hod_delete_training.php',
                data: dataString,
                cache: false,
                success: function(data)
                {
                    //alert(data);
                    if(data == 'YES'){
                    alert("Deleted....");
                     $("#content").load("hod_current_training.php");
                    }
                    else
                    {
                        alert("failed");
                    }
                }
                });
        }
        if(last_char == '.M')
        {
            
            var delay = 3000;
window.setTimeout(function(){$bid[0].click();},delay);
        }
        
        e.preventDefault();
    });
	$('#content').on('click', 'a', function(e) {
		e.preventDefault();
		$("#popup").fadeOut('500');
         $("#content").load("hod_current_training.php");
		
    });
		
});
    </script>
</head>
<body>
<!--POPUP for form Edit-->
<div id="overlay"> </div>
<!--END OF POPUP-->
<!--POPUP for form Edit-->
<div id="popup"> 
<a href="#" id="editCloseBtn">Close </a>
<div id="editForm"></div>
</div>
<!--END OF POPUP-->
</body>
</html>
     <?php
    if($role=="HOD"){
    ?>

<?php
    include_once('db.php');
    $EMAILID=$_SESSION['emailid'];
$training_dept=$_SESSION['training_dept'];
// code to fetch data from trainigs details
  $sql="SELECT * FROM `training_subject` WHERE training_dept_code='".$training_dept_code."'";
$result=mysqli_query($con,$sql);
$n=mysqli_num_rows($result);
$i=1;

if($result){
    if(mysqli_num_rows($result)>0){
        echo "<table border=1  cellsppading=15 cellspacing=15 id=trainingTable>
<tr>
<th>Training Id</th>
<th>Department code</th>
<th>Post Date</th>
<th>Training Subject</th>

<td>&nbsp;</td>";
while($row=mysqli_fetch_array($result)){
echo "<tr><td>". $row['t_id']."</td><td>".$row['training_dept_code']."</td><td>".$row['post_date']."</td><td>".$row['t_sub']."</td><td><button id=".$row['t_id'].".E".">Edit</button></td><td><button id=".$row['t_id'].".D".">Delete</button></td><td><a download href=".$row['detail'].">click here</a></td></tr>";
$i++;
}

echo "</table>";
 mysqli_free_result($result);
   }
    else{
    echo"no records match";
   }
   }
   else{
   echo"error".mysqli_error($con);
   }
   mysqli_error($con);



?>
<?php
}// login change close if for NODAL officer
else if ($role=="NODAL"){// second login else
    //echo "i am here at nodal login";
    ?>

<?php
    include_once('db.php');
    $EMAILID=$_SESSION['emailid'];
$training_dept=$_SESSION['training_dept'];
// code to fetch data from trainigs details
  $sql="SELECT * FROM `training_subject` group by dept, post_date ";
$result=mysqli_query($con,$sql);
$n=mysqli_num_rows($result);
$i=1;

if($result){
    if(mysqli_num_rows($result)>0){
        echo "<table border=1  cellsppading=15 cellspacing=15>
<tr>
<th>Training Id</th>
<th>Training code</td>
<th>Post Date</th>
<th>Training Subject</th>
<th>&nbsp;</th>



<th>&nbsp;</th>
<th>&nbsp;</th>";
while($row=mysqli_fetch_array($result)){
echo "<tr><td>". $row['t_id']."</td><td>".$row['post_date']."</td><td>".$row['t_sub']."</td><td>".$row['dept']."</td><td><button id=".$row['t_id'].".E".">Edit</button></td><td><button id=".$row['t_id'].".D".">Delete</button></td><td><button   id=".$row['t_id'].".M".">Details</button></td></tr>";
++$i;
}

echo "</table>";
 mysqli_free_result($result);
   }
    else{
    echo"no records match";
   }
   }
   else{
   echo"error".mysqli_error($con);
   }
   mysqli_error($con);

}
}
?>
