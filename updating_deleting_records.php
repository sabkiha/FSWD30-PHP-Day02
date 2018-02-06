<html>
<body>

<?php
$servername = "localhost";
$username   = "root";
$password   = ""; 
$dbname     = "my_test_database";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error() . "\n");
}

// // sql to update a record inUsers table
// $sql = "UPDATE Users SET lastname='Walker' WHERE user_id=1";

// sql to delete a record from Users table
$sql = "DELETE FROM Users WHERE user_id=5";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

// Close connection
mysqli_close($conn);

?>


</body>
</html>