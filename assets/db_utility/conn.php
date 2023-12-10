<?php
$servername = "localhost";
$username = "root";
$password = "";
$table = "to-do-list";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $table);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "<script> console.log('Connected successfully');</script>";
?>