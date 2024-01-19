
<html>
<body>


<?php session_start(); 
echo "current session id is ".session_id()."<br>"; 
echo "The new id is ", session_regenerate_id()."<br>"; 
echo "barney is ",$_SESSION['barney']++."<br>"; ?>

</body>
</html>
