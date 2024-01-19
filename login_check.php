<?php
    session_start();
    $connection=mysqli_connect("localhost","root","","ndms");
    if(!$connection)
    die("connection error : ".mysql_error());
    $query="select pass from users where uname='{$_POST['uname']}'";
    $pass=$_POST['pass'];
    $result=mysqli_query($connection,$query);
        while($row=mysqli_fetch_array($result)){
        if($row['pass']==$pass){
            $_SESSION['uname']=$_POST['uname'];
            header("Location:home.php");
            exit;
        }
        }
            header("Location:login.php?id=0");
            exit;
    mysqli_close($connection);
?>