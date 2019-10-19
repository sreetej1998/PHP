<!-- May god have mercy on this forsaken world -->
<html>
<head>
<style>
table {
border-collapse: collapse;
}

table, th, td {
border: 1px solid blue;
}
</style>
</head>
<body>
<form method="post" action="1f.php">
<pre>
Customer Name  <input type="text" name="customername" />
Contact number  <input type="text" name="contactnumber" />
Place <input type="text" name="place" />
<input type="submit" name='Submit' value="submit"/>
</pre>
</form>
<!-- </body> -->
<!-- </html> -->
<?php
$customername=$_POST['customername'];
$contactnumber=$_POST['contactnumber'];
$place=$_POST['place'];
print("".$customername.":".$contactnumber)
?>
<!-- <html>
<head>
<style>
table {
border-collapse: collapse;
}

table, th, td {
border: 1px solid blue;
}
</style>
</head>
<body> -->
<form method="post" action="1f.php">
<input type="hidden" name="customername" value="<?php echo $customername;?>" />
<input type="hidden" name="contactnumber" value="<?php echo $contactnumber?>" />
<input type="hidden" name="place" value="<?php echo $place?>" />
<pre>
item code  <input type="text" name="itemcode" />
item name  <input type="text" name="itemname" />
units sold <input type="text" name="unitssold" />
rate       <input type="text" name="rate" />
<input type="submit" name='Submit' value="submit"/>
</pre>
</form>
</body>
</html>
