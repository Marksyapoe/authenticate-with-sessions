<!DOCTYPE html>

	<html>

		<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Dashboard</title>
		
		</style>
		
		</head>

		<body>
			<h1>Welcome to your dasboard</h1>
			<?php
				session_start();

				$firstname = $_SESSION['firstname'];
				$lastname = $_SESSION['lastname'];
				$mail = $_SESSION['mail'];
				$passcode = $_SESSION['passcode'];

				echo "Hello ".$firstname." ".$lastname."<br>";
				echo "Thank you for testing this authentication system with sessions";


			?>
			
		</body>
		
	</html>