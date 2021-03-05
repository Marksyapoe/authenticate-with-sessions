<!DOCTYPE html>

	<html>

		<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Login</title>
		<style>
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
				margin-left: 120px;
				border-style: none;
			}
			#button2:hover{
				background-color: black;
			}

			body{
				background-color: rgb(220, 220, 220);
			}

			body #form{
				margin-left: 450px;
				margin-top: 170px;
				width: 400px;
				height: 400px;
				background-color: white;
				border-radius: 20px;
				box-shadow: 10px 10px 20px;
			}
			
			#results{
				font-size: 25px;
				margin-left: 20px;
			}
			#p{
				margin-left: 20px;

			}
			#p a{
				color: purple;
				text-decoration: none;
			}
			#success{
				position: absolute;
				width: 100%;
				height: 70px;
				left: 0;
				top: 0;
				background-color: rgba(0, 200, 0, 0.4);
			}
			#success h1{
				font-size: 20px;
				margin-top: 20px;
				margin-left: 20px;
				font-family: Georgia, 'Nimbus Roman No9 L', 'Century Schoolbook L', serif;
				color: rgba(0, 100, 0, 0.8);
			}
			#n{
				position: absolute;
				left: 0;
				width: 100%;
				top: 62px;
				height: 8px;
				background-color: rgba(0, 200, 0, 0.7);
			}
			
		</style>
		
		</head>

		<body>

			<div id="success">
				<h1>Registration Successful!!</h1>
				<div id="n"></div>
			</div>
			
			<div id="form">
				<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
					<p id="email">Email: <input type="email" name="email" placeholder="john@example.com" class="fnf" id="emailspace"></p>
					<p id="psc">password: <input type="password" name="pwd" id="pwds" class="fnf"></p>
					<input type="submit" name="submit" value="Login" id="button2" class="fnf">
				</form>
				<p id="p">Don't have an account?<a href="sessionregister.php">Register here</a></p>
				
				<div id="results">
					<?php
						session_start();
						if(isset($_POST['email']) && isset($_POST['pwd'])){

							$pmail = $_POST['email'];
							$pcode = $_POST['pwd'];
								
							$firstname = $_SESSION['firstname'];
							$lastname = $_SESSION['lastname'];
							$mail = $_SESSION['mail'];
							$passcode = $_SESSION['passcode'];



							if($pmail == $mail && $pcode == $passcode){

								header("Location: dashboard.php");
								exit();

					        }else{
					        	echo "Email or password incorrect";
					        }


								
								


						}

					?>
				</div>
				
			</div>


			
		</body>
		
	</html>