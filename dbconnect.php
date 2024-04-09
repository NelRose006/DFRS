<?php

$host='localhost';
$username='candy';
$password='candy0107';
$database_name='farmersrecords';



// Create connection
$conn = new mysqli($hostname, $username, $password, $database_name);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>