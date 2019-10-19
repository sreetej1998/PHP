<?php
	session_start();
	$count=$_SESSION['scount'];
	if($_REQUEST['name']=='xyz'&& $_REQUEST['pwd']=='xyz')
	{
		?>
		<html>
		<body>
		<h1><u><center>Welcome <?php echo $_REQUEST['name']?></center></u></h1>
		<?php 
			$count=0;
			$_SESSION['scount'] = $count;
		?>
		</body>
		</html>
	<?php
	}
	else 
	{
		if($count<3)
		{
			$count=$count+1;
			$_SESSION['scount'] = $count;
			echo "Incorrect username/password!. Try again";
			header("Refresh: 2; URL=3c.html");
		}
		else
			header("Refresh: 2; URL=3c2.php");
	}
?>
