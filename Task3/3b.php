<?php
session_start();
// store session data
$_SESSION['views']=1;
$_SESSION['Name']="Krishna";
?>
<html>
<body>
<?php
//retrieve session data
echo "Pageviews=". $_SESSION['views'];
echo "User name=".$_SESSION['Name'];
if(isset($_SESSION['views']))
unset($_SESSION['views']);
echo "Page view after unset method ".$_SESSION['views'];
?>
</body>
</html>
