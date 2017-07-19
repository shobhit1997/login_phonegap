<?php
$user="root";
$pass="";
$conn = new mysqli("localhost", $user, $pass) or die("Unable to connect");

$sql = "CREATE DATABASE if NOT EXISTS Accounting";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}
$con = mysqli_connect("localhost", $user, $pass,"Accounting") or die("Unable to create");
$query = "CREATE TABLE Users (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
eninovID VARCHAR(50) NOT NULL,
password VARCHAR(30) NOT NULL
)";

if ($con->query($query) === TRUE) {
    echo "Table Users created successfully";
} else {
    echo "Error creating table: " . $con->error;
}

$conn->close();
$con->close();
?>