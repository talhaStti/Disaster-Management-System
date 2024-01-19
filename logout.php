<?php
    session_start();
   $_SESSION['uname']="Logout Successful";
    header("Location:index.php");
    exit;
?>