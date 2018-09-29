<?php
	include_once 'dbh.inc.php';

	$student_id = mysqli_real_escape_string($conn,$_POST['student_id']);
	$name = mysqli_real_escape_string($conn,$_POST['name']);
	$email = mysqli_real_escape_string($conn,$_POST['email']);
	$pwd = mysqli_real_escape_string($conn,$_POST['pwd']);

	$sql = "INSERT INTO users (user_student_id, user_name, user_email, user_pwd)VALUES (?,?,?,?);";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt,$sql))
	{
		echo "SQL error";
	}
	else 
	{
		mysqli_stmt_bind_parram($stmt,"ssss", $studnet_id, $name, $email, $psd);
		mysqli_stmt_execute($stmt);
	}

	header("Location : ../index.php?signup=success")
