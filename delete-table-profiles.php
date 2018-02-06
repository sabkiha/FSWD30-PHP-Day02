<?php

$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "my_test_database";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error() . "\n");
}

$sql = "DROP TABLE Profiles";
if (mysqli_query($conn, $sql)) {
    echo "Table Profiles deleted  successfully" . "\n";
} else {
    echo "Error deleting table: " . mysqli_error($conn) . "\n";
}

mysqli_close($conn);

?>