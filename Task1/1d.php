<html>
<head>
<title>sumnum</title>
</head>
<body>
<?php    
$sum=0; $rem=0; 
if(isset($_POST['s1']))
{ 
    $num=$_POST['t1'];
    for ($i =0; $i<=strlen($num);$i++)  
    {  
        $rem=$num%10;  
        $sum = $sum + $rem;  
        $num=$num/10;  
    } 
} 
    echo "$sum";
?>
<form name="my form" action="1d.php" method="POST">
enter the number:<br>
<input type="text" name="t1"><br>
<input type="submit" value="submit" name="s1">
</form>
</body>
</html>
