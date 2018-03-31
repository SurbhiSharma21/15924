<?php
/*if(!isset($_POST['f1'])||!isset($_POST['f2'])||!isset($_POST['f3'])||!isset($_POST['f4'])||!isset($_POST['f5'])||!isset($_POST['f6'])||!isset($_POST['f7'])||!isset($_POST['f8'])||!isset($_POST['f10'])||!isset($_POST['f11'])||!isset($_POST['f12'])||!isset($_POST['f13'])||!isset($_POST['f14'])||!isset($_POST['f15'])||!isset($_POST['f16'])||!isset($_POST['f17'])||!isset($_POST['f18'])||!isset($_POST['f19'])||!isset($_POST['f20'])||!isset($_POST['f21'])||!isset($_POST['f22'])||!isset($_POST['f23'])||!isset($_POST['f24'])||!isset($_POST['f25']))
{
    echo "no data found : system error";
}*/

if(!isset($_POST['f1']) || !isset($_POST['f2']) || !isset($_POST['f3']))
{
    echo "no data found : system error";
}
else
{
$ecode=$_POST['f1'];
$tid=$_POST['f2'];
$t_dept=$_POST['f3'];
$app_id="GNCT".$ecode.rand(1000,9999);

include_once('db.php');
$sqlCheck="SELECT * FROM `training_applicant` WHERE emp_id='".$ecode."' and t_id='".$tid."'";
   $result1=mysqli_query($con, $sqlCheck);
    $n=mysqli_num_rows($result1);
if($n == 0)
    {
        $sql="INSERT INTO `training_applicant` ( `t_id`, `training_dept_code`, `emp_id`, `application_id`) VALUES ( '$tid','$t_dept', '$ecode', '$app_id');";
 if(mysqli_query($con,$sql))
{
   $sql1="INSERT INTO `users`(`emp_id`) VALUES ('$ecode')";
    if(mysqli_query($con,$sql1)){
        session_start();
        $_SESSION['ecode']=$ecode;
        $_SESSION['application_id']=$app_id;
        echo "ok";
    }
}
else{
    echo " not inserted : email already registered";
}
     
           }
     
     else{ 
         echo "You already registered for this training";

}
}

?>