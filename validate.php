<?php

$con=mysqli_connect("localhost", "root", "", "sample");
if(!$con)
die("error".mysqli_error());
else
echo "success!";
$name="$_POST[name]";
$email="$_POST[email]";
$qry="insert into user values('$name', '$email')";
mysqli_query($con,$qry);


?>