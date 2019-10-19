<html>
<head>
	<title>file upload</title>
</head>
<body>
	<form method="POST" name="myform" action="4b.php" enctype="multipart/form_data">
	File name:<input type="file" name="file">
	<input type="submit" name="upload" value="upload">
	</form>
	<?php
		if(isset($_POST['upload']))
		{
			$f=fopen($_POST['file'],'r');
			while(!feof($f))
			{
				print(fgets($f));
			}
			fclose($f);
		}
	?>
</body>
</html>
