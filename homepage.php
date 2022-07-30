<?php
	// Start the session
	session_start();

	//create variables 
		$servername = "localhost";
		$username_database = "root";
		$password_database = "";
		$database_name = "wallet";

		// Create connection
		$conn = new mysqli($servername, $username_database, $password_database, $database_name);
		// Check connection
		if ($conn->connect_error) 
		{
		  die("Connection failed: " . $conn->connect_error);
		}

		$sql = "SELECT * FROM users WHERE user_name ='".$_SESSION["user_name"]."' ";

		$result = $conn->query($sql);
		
		

		if ($result->num_rows > 0) 
		{
			
			foreach ($result as $key => $theUser) 
			{
				$bal = $theUser['balance'];
				
			}
		}

	
?>
<!DOCTYPE html>
<html>
<head>
	<title>homepage</title>
	<link rel="stylesheet" type="text/css" href="mystyle.css">
	
</head>
<body>
	<div class="dash">
		<img src="avatar.jpg">
		<h1> Welcome: <?php echo $_SESSION['user_name']; ?> </h1>
		<h2> Your balance: <?php echo $bal; ?> </h2>

		<div class="send">
			<h2>Send money</h2>
			<hr>
		</div>

		<form action="sending.php" method="post">
			<div class="txt_field">
				<input type="text" name="user_code" required>
				<span></span>
				<label>Enter Username</label>
			</div>
			<div class="txt_field">
				<input type="text" name="amount" required>
				<span></span>
				<label>Enter Amount</label>
			</div>
			<input type="submit" value="Send money">

			<div class="signup_link">
			Want to <a href="logout.php">logout</a>
			</div>
		</form>

	</div>
</body>
</html>