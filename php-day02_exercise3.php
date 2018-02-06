<!DOCTYPE html>
<html>
<head>
        <title>PHP Day02 Exercise 3</title>
</head>
<body>

	<form action="php-day02_exercise3.php" method="POST" style="font-family: sans-serif; font-size: 25px; color: #00f">
		Number A: <input type="text" name="NoA" />
		Number B: <input type="text" name="NoB" />
		<input type="submit" name="submit" />
	</form>


<?php

function divideFunction($num1, $num2)
{
 $div = $num1 / $num2;
 echo "<p style='font-family: sans-serif; font-size: 30px; color: #00f'>"."The result of the divition is: $div"."</p>";
}
divideFunction(intval($_POST["NoA"]), intval($_POST["NoB"]));

?>
</body>
</html>