<?php
// Retrieve form data
$email = $_POST['email'];
$name = $_POST['name'];
$password = $_POST['password'];

// Perform server-side validation here

// Store the data in the database
// Replace 'your-database-credentials' with your actual database credentials
$servername = 'your-server-name';
$username = 'your-username';
$password = 'your-password';
$dbname = 'your-database-name';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO users (email, name, password) VALUES ('$email', '$name', '$password')";

if ($conn->query($sql) === true) {
  echo "success";
} else {
  echo "error";
}

$conn->close();
?>
