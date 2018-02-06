<!DOCTYPE html>
<html>
<head>
        <title>PHP Day02 Exercise 2</title>
</head>
<body>

<form action="php-day02_exercise2.php" method="POST" style="font-family: sans-serif; font-size: 25px; color: #00f">
 first name: <input type="text" name="first_name" />
 family name: <input type="text" name="family_name" />
 <input type="submit" name="submit" />
 </form>

<?php

if(isset($_POST['submit']))
{

if ( $_POST["first_name"] == "") {
 	echo "<p style='font-family: sans-serif; font-size: 10px; color: #00f'>"."<br>"."<br>"."Please insert your first name."."</p>";
  } 
  elseif ($_POST["family_name"] == "") {
   echo "<p style='font-family: sans-serif; font-size: 20px; color: #00f'>"."<br>"."<br>"."Please insert your family name."."</p>";
   } 
   else {
 	echo "<p style='font-family: sans-serif; font-size: 30px; color: #00f'>"."<br>"."<br>"."Welcome ". $_POST['first_name']." ". $_POST['family_name'].". Looking good today!"."</p>";
 }
}

?>

</body>
</html>