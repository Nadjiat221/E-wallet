<!DOCTYPE html>
<html>
<head>
	<title>signup operation</title>
</head>
<body>

	<?php 
		$fullname = $_POST["Fullname"];			 // kwakira fullname 
		$user= $_POST["username"];				// kwakira username 
		$pass= $_POST["password"];				// kwakira password 
		$initial_balance = 1000;

		// connect to database

		//create variables 
		$servername = "localhost";
		$username_database = "root";
		$password_database = "";
		$database_name = "wallet";

		// Create connection
		$conn = new mysqli($servername, $username_database, $password_database, $database_name);
		// Check connection
		if ($conn->connect_error) {
		  die("Connection failed: " . $conn->connect_error);
		}

		//insert a user into database
		$sql = "INSERT INTO users(full_name,user_name,password,balance) VALUES ('".$fullname."','".$user."','".$pass."','".$initial_balance."')";
		$conn->query($sql);

		echo "<h1> Your account was created successfully ! </h1>";

	?>

</body>
</html>