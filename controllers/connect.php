<?php 

$host = '127.0.0.100';
$username = 'root';
$password = '';
$db_name = 'wanbol_university';

$conn = mysqli_connect($host, $username, $password, $db_name);

if(!$conn) {
	die('Connection Failed: ' . mysqli_error($conn));
} else {
	// echo 'Connection Successful';
}