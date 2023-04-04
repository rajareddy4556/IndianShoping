<?php
// Connect to database
$servername = "localhost";
$username = "root";
$password = "RajaReddy4556@#$";
$dbname = "signup";
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get form data
$firstname = $_POST['firstname'];

// Insert data into table
$sql = "INSERT INTO users (first_name) VALUES ('$firstname')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
