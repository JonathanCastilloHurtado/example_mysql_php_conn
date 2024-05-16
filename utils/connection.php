<?php
$servername = "172.20.171.129";
$username = "johncastle";
$password = "1234";
$dbname = "shop";
$port = "8111";

// Create connection
$conn = new mysqli($servername.':'.$port, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
?>