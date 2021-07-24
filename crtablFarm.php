<?php
$servername="localhost";
$username = "root";
$password="";
$dbname="MagadhiFarm";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//Check connection 
if ($conn->connect_error) {
 die("Connection failed: ". $conn->connect_error);
}

//sql to create table
$sql = "CREATE TABLE user ( id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
First Name VARCHAR(30) NOT NULL,
Last Name VARCHAR(30) NOT NULL,
Email Adress VARCHAR(50) NOT NULL,
Password VARCHAR(30) NOT NULL)";

if ($conn->query($sql)===TRUE) {
 echo "Table user created successfully";
} else {
 echo "Error creating table: ". $conn->error;
}

$conn->close();
?>