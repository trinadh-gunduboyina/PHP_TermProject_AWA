<?php
$dbusername = "root";
$password = "";
$dbname = "student_compass";
$servername = "localhost:3308";
// Create connection
$conn = new mysqli($servername, $dbusername, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully <br>";