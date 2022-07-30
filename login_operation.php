<?php
	// Start the session
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>signup operation</title>
</head>
<body>

	<?php 
		$user= $_POST["username"];				// kwakira username 
		$pass= $_POST["password"];				// kwakira password 

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


		//select the user from database
		$sql = "SELECT * FROM users WHERE user_name ='".$user."' AND password='".$pass."' ";

		$result = $conn->query($sql);
		
		

		if ($result->num_rows > 0) 
		{
			
			foreach ($result as $key => $theUser) 
			{
				$_SESSION["user_name"] = $theUser['user_name'];
			}
			
			header('Location: homepage.php');
		}
		else
		{
			echo " Failed ";
		}
		


		// $sql = "INSERT INTO users(user_name,password,balance) VALUES ('".$fullname."','".$user."','".$pass."','".$initial_balance."')";
		// $conn->exec($sql);

	?>

</body>
</html>