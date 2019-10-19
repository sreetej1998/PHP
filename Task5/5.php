<html>
<head><title>A1</title></head>
<body>
<?php
if(isset($_POST['SHOW']))
{
	$str=$_POST['str1'];
	$select=$_POST['select'];
	function palindrome($string)
	{
		//remove all spaces
		$string = str_replace(' ','',$string);
		// remove special characters
		$string = preg_replace('/[^A-Za-z0-9\-]/', '', $string);
		//change case to lower
		$string = strtolower($string);
		//reverse the string
		$reverse = strrev($string);
		if($string==NULL)
		{
			echo "String is empty";
		}
		else
		{
			if($string == $reverse)
			{
				echo "</p><span style='color:red; font-weight:bold;'>
				It is Palindrome</span></p>";
			}
			else
			{
				echo "</p><span style='color:red; font-weight:bold;'>
				Not Palindrome</span></p>";
			}
		}
	}
	#FUNCTION TO CHECK THE OCCURANCE OF Vowel
	function occurance($str)
	{
		$a=$e=$i=$o=$u=0;
		for($j=0;$str[$j]!=NULL;$j++)
		{
			if($str[$j]=="a")
			$a++;
			if($str[$j]=="e")
				$e++;
			if($str[$j]=="i")
				$i++;
			if($str[$j]=="o")
				$o++;
			if($str[$j]=="u")
				$u++;
		}
		echo "<span style='color:orange; font-weight:bold;'>
		Occurance of Vowels are as follows,
		</span><br>";
		echo "</p><span style='color:orange; font-weight:bold;'>
		: A=$a :\t\tE=$e :\t\tI=$i :\t\tO=$o :\t\tU=$u :</span></p>";
	}
	#FUNCTION TO COUNT THE NUMBER OF VOWEL
	function count_vowel()
	{
		//get the input value and convert string to lowercase
		$string = strtolower($_POST['str1']);
		//all vowels in array
		$vowels = array('a','e','i','o','u');
		//find length of the string
		$len = strlen($string);
		$num = 0;
		//loop through each letter
		for($i=0; $i<$len; $i++){
			if(in_array($string[$i], $vowels))
			{
				$num++;
			}
		}
		//output
		echo "Number of vowels : <span style='color:red; font-weight:bold;'>". $num . "</span>";
	}
	if($select=="palindrome")
	palindrome($str);
	if($select=="occurance")
		occurance($str);
	if($select=="count")
		count_vowel();
}
?>
<fieldset>
<legend><b>Strings and Functions</b></legend>
<form method=POST>
<tr><td>Enter First string:
<input type="text" name=str1></td></tr><br><br>
<tr><td>Vowel Count
<input type="radio" name="select" value="count"></td></tr><br><br>
<tr><td>Vowel Occurance
<input type="radio" name="select" value="occurance"></td>
</tr><br><br>
<tr><td>Palindrome
<input type="radio" name="select" value="palindrome"></td></tr><br><br>
<tr><td><input type="submit" name="SHOW" value="SHOW"></td></tr><br><hr/>
</form>
</fielset>
</body>
</html>
