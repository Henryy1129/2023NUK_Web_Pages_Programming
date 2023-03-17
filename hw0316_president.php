<?php
	session_start();

	if($_SESSION["login"]=="President login sucessfully"){

	}else{
		header("Location:./hw0316_error.php");
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>President's Page</title>
	</head>

	<body>
		<?php
			echo $_SESSION['login'];
		?><br>
		President's Page<br>
		機密資訊<br>
		
		<a href="./hw0316_student.php">Student's Page</a><br>
		<a href="./hw0316_teacher.php">Teacher's Page</a><br>
		<a href="./hw0316_president.php">President's Page</a><br>

		<a href="./hw0316_logout.php">Logout</a>

	</body>
</html>