<?php 
// connecting to a database
$db_host = 'localhost';
$db_user = 'root';
$db_password = '';
$db_name = 'bse1207';

// Create connection
$conn = new mysqli($db_host, $db_user, $db_password, $db_name);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE IF NOT EXISTS bse1207 ";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully\n";
} else {
  echo "Error creating database: " . $conn->error;
}

// sql to create table
$sql_table = "CREATE TABLE IF NOT EXISTS Students (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(30) NOT NULL,
    Registration_no VARCHAR(30) NOT NULL,
    phone VARCHAR(20),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
    
    if ($conn->query($sql_table) === TRUE) {
      echo "Table Students created successfully\n";
    } else {
      echo "Error creating table: " . $conn->error;
    }
// Inserting vlaues
$name = $_POST["name"];
$registration_num = $_POST["registration_num"];
$phone = $_POST["phone"];

$sql_values = "INSERT INTO Students (username, Registration_no, phone)
VALUES ('$name', '$registration_num', '$phone')";

if ($conn->query($sql_values) === TRUE) {
    echo "New record created successfully\n";
} else {
    echo "Error: " . $sql_values . "<br>" . $conn->error;
}

$conn->close();


?>