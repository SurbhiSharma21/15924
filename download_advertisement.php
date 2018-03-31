<?php
if(!isset($_POST['f1']))
echo "Failed to Download....";
else
{
    include_once('db.php');
$tid=mysql_real_escape_string($_REQUEST['f1']);
$newtid=explode('.',$tid);

$sql="SELECT * FROM training_subject WHERE t_id='".$newtid[0]."'";

$result=mysqli_query($con,$sql);
    $n=mysqli_num_rows($result);
    $row=mysqli_fetch_assoc($result);
    $filepath=$row['detail'];
    $downloadFileName = 'newfile.pdf';

if (file_exists($filepath)) {
    header('Content-Description: File Transfer');
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename='.$downloadFileName);
    ob_clean();
    flush();
    readfile($filepath);
    exit;
}
echo "yes";

}
?>