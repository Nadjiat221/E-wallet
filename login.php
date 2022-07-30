<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>login form</title>
	<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
<body>
	<div class="center">
		<h1>Login</h1>

		<form action="login_operation.php" method="post">

			<div class="txt_field">
				<input type="text" name="username" required>
				<span></span>
				<label>Username</label>
			</div>
		
			<div class="txt_field">
				<input type="password" name="password" required>
				<span></span>
				<label>Password</label>
			</div>

			<input type="submit" value="Login"><br>

			<div class="signup_link">
			Not a member? <a href="work.php">sign up</a>
			</div>
		</form>
	</div>
	

</body>
</html>