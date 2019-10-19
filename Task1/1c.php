<html>
<title>Reverse</title>
<body>
<?php
    if(isset($_POST['s']))
    {
        $x=$_POST['r'];
        $s=0;
        do
        {
            $r1=$x%10;
            $s=($s*10)+$r1;
            $x=(int)($x/10);
        } while($x>0);
        print("\n Reverse of is ".$s);
}
?>
<form name="form3" method="POST" action="1c.php">
Enter number to be reversed: 
<input type='text' name='r'>
<input type='submit' name='s' value='Get Reverse Number'>
</form>
</body>
</html>
