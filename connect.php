<?php
// Establishing a connection to the MySQL database
$con = new mysqli('localhost', 'root', '', 'phpcurd');

// Checking if the connection was successful
if (!$con) {
    die(mysqli_error($con));
} 
?>
