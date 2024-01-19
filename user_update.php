<?php
    session_start();
    $connection=mysqli_connect("localhost","root","","ndms");
    if(!$connection)
    die("connection error : ".mysql_error());
    $name=$_POST['name'];
    $pass=$_POST['pass'];
    $uname=$_POST['uname'];
    $dob=$_POST['dob'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $e_con=$_POST['emergency'];
    $addr=$_POST['addr'];
    $query="insert into users values('{$name}','{$pass}','{$uname}','{$email}',{$contact},{$e_con},'{$dob}','{$addr}')";
    if(mysqli_query($connection,$query)){
        $_SESSION['uname']=$uname;
        header("Location:home.php");
        exit;
    }
    else {
        echo "Sorry updation failed! ". mysqli_error($connection);
    }
    mysqli_close($connection);
?>