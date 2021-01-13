<?php
$db_host="localhost";
$db_user="root";
$db_password="push1108";
$db_name="mine";

$conn = mysqli_connect('localhost','root','push1108','mine');
$con = new mysqli($db_host, $db_user, $db_password, $db_name);
if ($con->connect_errno) { die('Connection Error : '.$con->connect_error);}
?>
