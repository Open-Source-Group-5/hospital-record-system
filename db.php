<?php
$servername = "localhost";
$username = "root";
$password = "THimberland0&1";
$database = "vital";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);
}

?>
