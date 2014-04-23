<?php
$value = $_POST['val'];
echo "I got your value_" . $value ."_";

#$value = 15;

$db = new mysqli('localhost', 'root', 'root', 'test_db');

if($db->connect_errno > 0){
    die('Unable to connect to database [' . $db->connect_error . ']');
}

mysqli_query($db,"INSERT INTO jumpman (highscore, name)
VALUES ($value,'Test')")

or die(mysqli_error($db));;


 ?>