<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php session_start(); ?>


	<form action="handleForm.php" method="POST">
		<p><input type="text" placeholder="First name here" name="firstName"></p>
		<p><input type="password" placeholder="Password here" name="password"></p>
		<p><input type="submit" value="Login" name="login"></p>
	</form>

	<form action="unset.php" method="POST">
		<p><input type="submit" value="Logout" name="logout"></p>
	</form>

	<?php
	if(isset($_GET['error']) && $_GET['error'] == 'user_logged_in') {
		echo "<p>Another user is already logged in. Please log out first.</p>";
	}
	?>

	<h2>
		User logged in:
		<?php
		if(isset($_SESSION['firstName'])) {
			echo $_SESSION['firstName'];
		}
		?>		
	</h2>

	<h2>
		User password:
		<?php
		if(isset($_SESSION['password'])) {
			 echo $_SESSION['password'];
		}
		?>		
	</h2>
</body>
</html>
