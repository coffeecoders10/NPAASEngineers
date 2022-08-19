<?php

$database_host = 'localhost';
$database_username = 'root';
$database_password = '';
$database_name = 'npaasengineers';

$db = mysqli_connect($database_host, $database_username, $database_password, $database_name);
session_start();
?>
