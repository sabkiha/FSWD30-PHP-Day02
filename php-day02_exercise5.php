<?php

$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "php_day02_db";


// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to create table
$sql = "CREATE TABLE php_day02_db.family (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(20) NOT NULL,
lastname VARCHAR(20) NOT NULL,
dob DATE,
)";

if (mysqli_query($conn, $sql)) {
    echo "Table family created successfully" . "\n";
} else {
    echo "Error creating table: " . mysqli_error($conn) . "\n";
}

mysqli_close($conn);

?>