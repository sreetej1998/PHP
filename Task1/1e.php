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
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<pre>
item code  <input type="text" name="itemcode" />
item name  <input type="text" name="itemname" />
units sold <input type="text" name="unitssold" />
rate       <input type="text" name="rate" />
<input type="submit" name='Submit' value="submit"/>
</pre>
</form>
<table>
	<tr>
		<td> Item Code</td>
		<td> Item Name</td>
		<td>No of Items</td>
		<td>rate</td>
		<td> Total </td>
	</tr>
<?php 
if(isset($_POST['Submit']))
{
	$itemcode=$_POST['itemcode'];
	$itemname=$_POST['itemname'];
	$unitssold=$_POST['unitssold'];
	$rate=$_POST['rate'];
	$total = $unitssold*$rate;
	?>
	<tr>
		<td><?php echo $itemcode?></td>
		<td><?php echo $itemname?></td>
		<td><?php echo $unitssold?></td>
		<td><?php echo $rate?></td>
		<td><?php echo $total?></td>
	</tr>
	</table>
	<?php
}
?>
