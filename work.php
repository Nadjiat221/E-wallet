</!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>sign up</title>
	<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
<body>
	<div class="center">
		<h1>Sign up</h1>

		<form action="signup_operation.php" method="post">
			<div class="txt_field">
				<input type="text" name="Fullname" placeholder="" required>
				<span></span>
				<label>Full name:</label>
			</div>

			<div class="txt_field">
				<input type="text" name="username" placeholder="" required>
				<span></span>
				<label>username:</label>
			</div>

			<div class="txt_field">
				<input type="password" name="password" placeholder="" required>
				<span></span>
				<label>password:</label>
			</div>
			
			<input type="submit" name="submit" value="Sign Up">	

			<div class="signup_link">
			Want to <a href="login.php">login</a>
			</div>
		</form>
	
	</div>

</body>
</html>
