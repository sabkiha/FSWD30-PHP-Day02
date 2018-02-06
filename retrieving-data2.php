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

$sql = "SELECT user_id, firstname, lastname, email, reg_date FROM Users";
$result = mysqli_query($conn, $sql);

// fetch a next row (as long as there are some) into $row
while($row = mysqli_fetch_assoc($result)) {
        printf("ID No: %s <br> first name:  %s <br> family name:  %s <br> e-mail: %s <br> registration timestamp: %s<br><br><br>",
                  $row["user_id"],$row["firstname"], $row["lastname"],$row["email"], $row["reg_date"]);
 }

echo "Fetched data successfully\n";

// Free result set
mysqli_free_result($result);

// Close connection
mysqli_close($conn);

?>


</body>

</html>