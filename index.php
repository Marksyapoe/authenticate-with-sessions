<!DOCTYPE html>

	<html>

		<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Registration</title>
		<style>
			#fn{
				
				margin-left: 70px;
			}
			#ln{
				
				margin-left: 70px;
			}
			#email{
				
				margin-left: 70px;
			}
			#psc{
				
				margin-left: 70px;
			}
			.fnf{
				height: 30px;
				margin-top: 30px;
			}
			#emailspace{
				margin-left: 30px;
			}
			#pwds{
				margin-left: 10px;
			}
			#button2{
				height: 50px;
				width: 150px;
				color: white;
				font-size: 30px;
				font-family: Georgia, 'Nimbus Roman No9 L', 'Century Schoolbook L', serif;
				background-color: purple;
				border-color: white;
				border-style: none;
				margin-left: 120px;
			}
			#button2:hover{
				background-color: black;
				
			}

			body{
				background-color: rgb(220, 220, 220);
			}

			body #form{
				margin-left: 450px;
				margin-top: 70px;
				width: 400px;
				height: 500px;
				background-color: white;
				border-radius: 20px;
				box-shadow: 10px 10px 20px;
			}
			

			#p{
				margin-left: 20px;

			}
			#p a{
				color: purple;
				text-decoration: none;
			}
			
		</style>
		
		</head>

		<body>
			
			<div id="form">
				<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
					<p id="fn">First Name: <input type="text" name="name1" placeholder="Enter First name" class="fnf"></p>
					<p id="ln">Last Name: <input type="text" name="name2" placeholder="Enter Last name" class="fnf"></p>
					<p id="email">Email: <input type="email" name="email" placeholder="john@example.com" class="fnf" id="emailspace"></p>
					<p id="psc">password: <input type="password" name="pwd" id="pwds" class="fnf"></p>
					<input type="submit" name="submit" value="Register" id="button2" class="fnf">
				</form>
				<p id="p">Already have an account?<a href="login.php">Login here</a></p>

				<div id="results">

				
					<?php
						session_start();
						if(isset($_POST['name1']) && isset($_POST['name2']) && isset($_POST['email']) && isset($_POST['pwd'])){
							
							$firstname = 0;
							$lastname = 0;
							$mail = 0;
							$passcode = 0;

							function auth(){
								$firstname = $_POST['name1'];
								$lastname = $_POST['name2'];
								$mail = $_POST['email'];
								$passcode = $_POST['pwd'];

								$_SESSION['firstname'] = $firstname;
								$_SESSION['lastname'] = $lastname;
								$_SESSION['mail'] = $mail;
								$_SESSION['passcode'] = $passcode;
							}

							auth();
							$firstname = $_SESSION['firstname'];
							$lastname = $_SESSION['lastname'];
							$mail = $_SESSION['mail'];
							$passcode = $_SESSION['passcode'];

							header("Location: signin.php");
							exit();
								
								


							}

					?>
				</div>
				
			</div>


			
		</body>
		
	</html>
