<?php

$hostname = 'localhost';
$user = 'root';
$pass = '';
$db = "pokemon";
$mysqli = new mysqli($hostname, $user, $pass, $db);

if($mysqli->connect_errno != 0)
	die($mysqli->connect_error);


?>