<?php
$servername = "localhost";
$username = "root";
$password = "Jaswinsingh6326@";
$db = "blog";

// $servername = "localhost";
// $username = "jaswin";
// $password = "Jaswinsingh6326@";
// $db = "blog";
$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


 ?>
