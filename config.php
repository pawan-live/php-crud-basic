<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'coffee';

$con = new mysqli("$servername", "$username", "$password", "$dbname");

//connection check

if ($con->connect_error) {
    die("Connection failed" . $con->connect_error);
} else {
    echo "success";
}
