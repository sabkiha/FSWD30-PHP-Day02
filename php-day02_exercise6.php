<?php

$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "php_day02_db";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to enter date into family
$sql = "INSERT INTO php_day02_db.family (firstname, lastname, dob)
VALUES 
('Mark', 'Coeckelbergh', '1975-05-21'),
('Sabine', 'Hartmann', '1973-10-19'),
('Lotte', 'Coeckelbergh', '2007-10-22'),
('Arno', 'Coeckelbergh', '2010-04-20')";

if (mysqli_query($conn, $sql)) {
    echo "New records created.\n";
} else {
    echo "Record creation error for: " . $sql . "\n" . mysqli_error($conn);
}

mysqli_close($conn);

?>