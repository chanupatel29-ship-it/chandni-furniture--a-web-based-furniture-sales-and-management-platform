<?php
// Database connection
$conn = mysqli_connect("localhost", "root", "", "ck");

// Check connection
if (!$conn) {
    die("Database Connection Failed: " . mysqli_connect_error());
}
?>
