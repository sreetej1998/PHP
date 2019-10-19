<html>
<head>
<title>form</title></head>
<body>
<?php
    if(isset($_POST['s1'])){
        $x=$_POST['t1'];
        $y=$_POST['t2'];
        $z=$_POST['t3'];
        if(($x>$y)&&($x>$z))
        print("the largest:".$x);
        else if(($y>$z)&&($y>$x))
        print("the largest:".$y);
        else
        print("the largest:".$z);
    }
?>
<form name="myform" action="1a.php" method="POST">
number1:<br>
<input type="text" name="t1"><br>
number2:<br>
<input type="text" name="t2"><br>
number3:<br>
<input type="text" name="t3"><br>
&nbsp<input type="submit" name="s1">
</form>
</body>
</html>
