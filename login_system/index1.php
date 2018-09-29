<?php
	include_once 'includes/dbh.inc.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form action ="includes/signup.inc.php" method = "POST">
	<input type = "text" name = "student_id" placeholder = "Student ID">
	<br>
	<input type = "text" name = "name" placeholder = "Your Name">
	<br>
	<input type = "text" name = "student_id" placeholder = "Email Adress">
	<br>
	<input type = "text" name = "pwd" placeholder = "Password">
	<br>
	<button type="submit" name="submit" >Sign up< </button>
</form>

<?php
	$sql = "INSERT INTO users"
</body>
</html>