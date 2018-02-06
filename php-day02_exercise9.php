<?php

echo ("<html><body style='font-family: sans-serif; font-size: 30px; color: #00f'>");

$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "php_day02_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error() . "\n");
}

$sql = "SELECT lastname, firstname, dob FROM family";
$result = mysqli_query($conn, $sql);

// fetch a next row (as long as there are some) into $row
while($row = mysqli_fetch_assoc($result)) {
        printf("Firstname: %s Lastname: %s Date of Birth: %s<br>",
                  $row["firstname"], $row["lastname"],$row["dob"]);
 }

echo "Fetched data successfully\n";

// Free result set
mysqli_free_result($result);

// Close connection
mysqli_close($conn);

?>


</body>

</html>