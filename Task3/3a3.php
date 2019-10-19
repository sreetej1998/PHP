<?php
    if(isset($_POST['s'])){
        $name = $_POST['uname'];
        $city = $_POST['city'];
        $phno = $_POST['pno'];
        print("".$name." ".$city." ".$phno);
    }
?>