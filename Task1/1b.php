<html>
<head>
<title>fact</title>
</head>
<body>
<?php
    if(isset($_POST['s1'])){
        $fact=1;   
        $num=$_POST['t1'];
        $i=1;
        while($i<=$num)
        {
        $fact=$fact*$i;
        $i=$i+1;
        }
        print("result is:".$fact);
    }
?>
<form name="my form" action="1b.php" method="POST">
enter the number:<br>
<input type="text" name="t1"><br>
<input type="submit" value="submit" name="s1">
</form>
</body>
</html>
