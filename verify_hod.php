<?php
session_start();

if(!isset($_SESSION['emailid'])){
    header("location:index.php?m=login first...");
    
}
else{
    include_once('db.php');
    $EMAILID=$_SESSION['emailid'];
$training_dept=$_SESSION['training_dept'];
     $role=$_SESSION['role'];
    if($role=="NODAL"){
        ?>
       <head><script src="./js/jquery-3.0.0.min.js"></script>
       <script type="text/javascript">
       
       $(document).ready(function(){
	$('#content').on('click', 'button', function(e) {
		var bid=e.target.id;
        var dataString = 'f1='+bid;
        alert(bid);
        if(bid == ''){
            alert("Click on verify button");
        }
        else{
                   $.ajax({
                type: 'POST',
        
                url: 'hod_verification_process.php',
                data: dataString,
                cache: false,
                success: function(data)
                {
                    if(data == 'YES'){
                    //alert("Verified....");
                     $("#content").html("Verified.......");
                    }
                    else
                    {
                        alert("failed");
                    }
                }
                });
                e.preventDefault();
                }
                return false;
    });
	});
       </script></head>
        <?php
 
// code to fetch data from department
  $sql="SELECT * FROM `departement` WHERE role='HOD' AND status='notverified'";
$result=mysqli_query($con,$sql);
$n=mysqli_num_rows($result);
$i=1;

if($result){
    if(mysqli_num_rows($result)>0){
        echo "<table border=1  cellsppading=15 cellspacing=15>
<tr>
<td>Email Id</td>
<td>Name</td>
<td>Department</td>
<td>Phone</td>
<td>Role</td>


<td>&nbsp;</td>";
while($row=mysqli_fetch_array($result)){
echo "<tr><td>". $row['emailid']."</td><td>".$row['name']."</td><td>".$row['training_dept']."</td><td>".$row['phone']."</td><td>".$row['role']."</td><td><button  id=".$row['emailid'].">Verify</button></td></tr>";
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
