<?php

$server_name = 'localhost';
$user_name = 'root';
$password = '';
$database = 'gestionale';

$conn = new mysqli($server_name,$user_name,$password,$database);

if ($conn->connect_error) {
    die("Connection failed".$conn->connect_error);
}
//echo "Database connection success";

?>