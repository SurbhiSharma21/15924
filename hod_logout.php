<?php
session_start();
unset($_SESSION['emailid']);
session_destroy();
if(session_unset($_SESSION['emailid']))
{
    header("Location:index.php?m=login first...");
    exit;
    }
else{
    header("Location:index.php?m=logged out...");
    }
    ?>