<?php

require 'config.php';

$id = $_POST['id'];
$name = $_POST['username'];
$age = $_POST['age'];
$date = $_POST['date'];


$sql = "INSERT INTO user(id, name, age, date) VALUES('$id', '$name', '$age', '$date')";

if ($con->query($sql)) {
    echo "success";
} else {
    echo "error" . $con->error;
}
