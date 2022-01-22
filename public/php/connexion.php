<?php
$servername = "eu-cdbr-west-02.cleardb.net";
$username = "bb90f77c07ad0b";
$password = "41755a11";
$dbname = "heroku_b36365ebf01a860";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
