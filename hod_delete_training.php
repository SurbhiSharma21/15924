<?php
if(!isset($_POST['f1']))
echo "Failed to delete....";
else
{
    include_once('db.php');
$tid=mysql_real_escape_string($_REQUEST['f1']);
$newtid=explode('.',$tid);

$sql="DELETE  FROM training_subject WHERE t_id='".$newtid[0]."'";
if(mysqli_query($con,$sql)) 
{
    echo "YES";
}
}
?>