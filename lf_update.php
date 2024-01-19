<?php
    $connection=mysqli_connect("localhost","root","","ndms");
    if(!$connection)
    die("connection error : ".mysql_error());
    $name=$_POST['name'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $contact=$_POST['contact'];
    $disaster=$_POST['disaster'];
    $area=$_POST['area'];
    $query="insert into lost_found(name,age,gender,contact,disaster,area) values('{$name}',{$age},'{$gender}',{$contact},'{$disaster}','{$area}')";
    if(mysqli_query($connection,$query)){
        header("Location:lost_found.php");
         exit;
    }
    else {
        echo "Sorry updation failed! ". mysqli_error($connection);
    }
    mysqli_close($connection);
?>