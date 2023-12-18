<?php
$servername = "localhost";
$username = "root";
$password = ""; // Password for your MySQL server
$dbname = "user_db";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
