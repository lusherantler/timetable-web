<?php
	include_once 'includes/dbh.inc.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
	$data = "Admin";
	//Created a dummy template to test the database
	$sql = "SELECT * FROM users WHERE user_email=?;";
	//Create a prepared statement
	$stmt = mysqli_stmt_init($conn);
	//Prepare the prepared statement

	if (!mysqli_stmt_prepare($stmt, $sql));
	{
		echo "SQL statement failed";
	}
	else 
	{
		//Bind parameters to the placeholder
		mysqli_stmt_bind_param($stmt,"s", $data );
		//Run parameters inside database
		mysqli_stmt_execute($stmt);
		$result = mysqli_stmt_get_result($stmt);

		while ($row = mysqli_fetch_assoc($result))
		{
			echo $row['user_email']."<br>";
		}
	}

?>

</body>
</html>