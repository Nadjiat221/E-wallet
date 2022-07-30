<?php
	// Start the session
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>sending page</title>
</head>
<body>

	<?php 

		$sender_code = $_SESSION["user_name"]; 		//sender code

		$receiver_code = $_POST["user_code"];			 // kwakira fullname 
		$sent_amount= $_POST["amount"];				// kwakira username 

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


		$sql1 = "SELECT * FROM users WHERE user_name ='".$sender_code."' ";
		$result1 = $conn->query($sql1);
		if ($result1->num_rows > 0) 
		{
			
			foreach ($result1 as $key => $theSender) 
			{
				$sender_curent_amount = $theSender['balance'];
				
			}


			if ($sent_amount>=1 AND $sent_amount<=10000) 
			{
				$sender_new_balance = $sender_curent_amount - $sent_amount;
			}
			elseif ($sent_amount>10000 AND $sent_amount<=100000)
			{
				
				$sender_new_balance = $sender_curent_amount - $sent_amount - 200;
			}
			elseif ($sent_amount>100000)
			{
				
				$sender_new_balance = $sender_curent_amount - $sent_amount - 1000;
			}
			else
			{
				return;
				header('Location: homepage.php');
			}

			//insert a user into database
			$sql1_update = "UPDATE users SET balance='".$sender_new_balance."' WHERE user_name ='".$sender_code."'";
			$conn->query($sql1_update);
		}
		else
		{
			echo " No user found ";
		}
		

		$sql = "SELECT * FROM users WHERE user_name ='".$receiver_code."' ";
		$result = $conn->query($sql);


		if ($result->num_rows > 0) 
		{
			
			foreach ($result as $key => $theUser) 
			{
				$receiver_curent_amount = $theUser['balance'];
				
			}

			$receiver_new_balance = $receiver_curent_amount + $sent_amount;


			//insert a user into database
			$sql2 = "UPDATE users SET balance='".$receiver_new_balance."' WHERE user_name ='".$receiver_code."'";
			$conn->query($sql2);

		}
		else
		{
			echo " No user found ";
		}
		



		header('Location: homepage.php');
		

		

	?>

</body>
</html>