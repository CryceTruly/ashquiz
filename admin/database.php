<?php

$db_host = 'localhost';
$db_name = 'ashQuiz';
$db_user =  'root';
$db_pass = '';


$mysqli= new mysqli ($db_host, $db_user, $db_pass, $db_name);


if($mysqli->connect_error){
	printf("connect failed: %s\n", $mysqli->connect_error);
	exit();
} 