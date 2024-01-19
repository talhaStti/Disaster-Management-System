<html>
<body>

<?php
if (isset($_POST["submit"]))
{
$f="$_POST['first']";
$l="$_POST['last']";
echo strcasecmp($f,$l);
echo strlen($f);
echo str_shuffle($f);
echo str_replace('a','%',$l);
echo strrev($l);
}
?>

</body>
</html>