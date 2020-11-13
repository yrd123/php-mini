<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Login</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../css/register.css">
	<script src="../js/register.js"></script>
	<?php 
	include '../../mysqli_connect.php';
	session_start();
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$email= $_POST['emailId'];
		$user_password=md5($_POST["password"]);
		$select_query="select * from user;";
		$flag=0;
		$rows=mysqli_query($link,$select_query);
		while($row=mysqli_fetch_array($rows,MYSQLI_BOTH))
		{
			if($email===$row['email'] and $user_password===$row['user_password']){
				$flag=1;
				break;
			}
		}
		if($flag==1){
			echo "<div style='background-color: rgb(0, 0, 0);
								margin:auto;
								margin-top:150px;
								margin-bottom:-150px;
								font-family: Arial, Helvetica, sans-serif;
								padding: 10px;
								width: 50%;
								opacity: 0.8;
								border-radius: 15px;
								text-align: center;
								color: rgba(255,205,0, 1);
								box-shadow: 7px 7px 10px #252525;'>Login Successful.
						</div>";
			$_SESSION["username"]=$email;
			$_SESSION["loggedin"]=true;
			if(isset($_SESSION["username"])){
				header("location:home2.php");
			}
			else{
				header("location:login.php");
			}
		}
		else{
			echo "<div style='background-color: rgb(0, 0, 0);
								margin:auto;
								margin-top:150px;
								margin-bottom:-150px;
								font-family: Arial, Helvetica, sans-serif;
								padding: 10px;
								width: 50%;
								opacity: 0.8;
								border-radius: 15px;
								text-align: center;
								color: rgba(255,205,0, 1);
								box-shadow: 7px 7px 10px #252525;'>Invalid credentials.
						</div>";
		}
	}
	mysqli_close($link);
	?>
</head>

<body>
<a class="homebutton" href="home2.php"><i class="fa fa-caret-left" ></i>&nbsp;&nbsp;Home</a>
	<form id="loginForm" name="loginForm" action="login.php" name="RegisterForm" onsubmit="return validatelogin()" method="POST">
		<div class="yoo">
			<h4 class="title">Login</h4>
			<div class="hint-text text-center text-muted">Login to your Account</div><br>
			<!-- One "tab" for each step in the form: -->
			<div class="warning-message invisible" id="warning-message">
			</div>
			<div class="tab">
				<div class="form-group">
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
							<input type="email" class="form-control" placeholder="Email" id="emailId" name="emailId" required>
						</div>
					</div>
					<small id="emailAlert" class="form-text"></small>
				</div>
				<div class="tab2">
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-lock"></i></span>
							<input type="password" class="form-control" placeholder="Password" id="password" name="password"
								type="password" required>
						</div>
					</div>
				</div>
			</div>
			<br>
			<center>
				<span>
					<button type="submit" class="register-button">Login</button>
				</span>
			</center>
			<br>
			<div class="footer text-center">Don't have an Account? <a href="register.php" style="color:rgba(255,205,0,1);">Register Here</a></div>
		</div>
	</form>


	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>

</html>