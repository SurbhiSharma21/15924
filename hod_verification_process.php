<?php
if(!isset($_POST['f1']))
{
    echo "no";
}
else{
   include_once('db.php');
$tid = $_POST['f1'];
$sql = "UPDATE `departement` SET status='verified' WHERE emailid ='".$tid."'" ;
$result = mysqli_query( $con,$sql);
       
if($result ) {
   echo ('Updated data successfully ');
            }
            
            else{
            echo "Could not update data\n";
            }
            mysqli_close($con);
            
            }
  ?>       