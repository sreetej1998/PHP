<html>
<body>
<?php
    if(isset($_POST['s'])){
        $a = array("Raj"=>"35","Ramesh"=>"37","Jay"=>"43");
        $ch = $_POST['a'];
        switch($ch)
        {
        case 1  :  foreach($a as $x=>$x_value)
        {
        echo "Key = " . $x . ", Value = " . $x_value;
        echo "<br>";
        }
        break;

        case 2  :  $l = sizeof($a);
        echo $l;
        break;
        }
    }
?>
<form action=2b.php method=POST>
Select Option:<br>
<input type=radio name=a value=1>Display Array Along With Their Keys<br>
<input type=radio name=a value=2>Display Size of An Array<br>
<input type=submit value=SUBMIT name=s>
</form>
</body>
</html>


