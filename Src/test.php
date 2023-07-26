<?php

phpinfo();
// check the MySQL connection status
$conn = mysqli_connect('mysql', 'root', 'root', 'fuel');

$result = mysqli_query($conn, "SHOW TABLES;");

if(!$conn){
    die('error connecting to database');    
}