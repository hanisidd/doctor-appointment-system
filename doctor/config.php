<?php
$mysqli = new mysqli('localhost','root','','medicare');
if($mysqli->connect_error){
    die("can't connect with database");
}

// echo 'database connected';

?>