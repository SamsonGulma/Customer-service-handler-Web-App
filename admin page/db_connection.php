<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "tolossa";
$dbname = "LinkMarket";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    // If connection fails, output an error message and terminate script
    die("Connection failed: " . $conn->connect_error);
}
?>

