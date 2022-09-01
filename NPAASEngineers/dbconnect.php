<?php

$database_host = 'localhost';
$database_username = 'root';
$database_password = '';
$database_name = 'npaasengineers';
session_start();
$db = mysqli_connect($database_host, $database_username, $database_password, $database_name);
?>
