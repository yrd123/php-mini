<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Register</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../css/register.css">
	<script src="../js/register.js"></script>
	<?php 
	include '../../mysqli_connect.php';
		$sql = "CREATE TABLE IF NOT EXISTS user(
			full_name VARCHAR(255) NOT NULL,
			email VARCHAR(255) NOT NULL PRIMARY key,
			user_password VARCHAR(255) NOT NULL,
			confirm_password VARCHAR(255) NOT NULL,
			age INT NOT NULL,
			contact_number VARCHAR(255) NOT NULL,
			gender VARCHAR(255) NOT NULL)";
		$results = mysqli_query($link,$sql) or die(mysqli_error($link));
	
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			$full_name= $_POST['fullName'];
			$email= $_POST['emailId'];
			$user_password=md5($_POST["password"]);
			$confirm_password=md5($_POST["confirmPassword"]);
			$age=$_POST["age"];
			$contact_number= $_POST["contactNumber"]; 
			$gender=$_POST["gender"];
	
			$select_query="select email from user;";
			$flag=0;
			$rows=mysqli_query($link,$select_query);
			while($row=mysqli_fetch_array($rows,MYSQLI_BOTH))
			{
				if($email==$row['email']){
					$flag=1;
					break;
				}
			}
	
			if($flag==0){
				$insert_query="insert into user (full_name,email,user_password,confirm_password,age,contact_number,gender) values ('$full_name','$email','$user_password','$confirm_password','$age','$contact_number','$gender');";
				if(mysqli_query($link,$insert_query))
				{ 
					echo "<div style='background-color: rgb(0, 0, 0);
								margin:auto;
								margin-top:60px;
								margin-bottom:-65px;
								font-family: Arial, Helvetica, sans-serif;
								padding: 10px;
								width: 50%;
								opacity: 0.8;
								border-radius: 15px;
								text-align: center;
								color: rgba(17,238,17, 1);
								box-shadow: 7px 7px 10px #252525;'>You have been registered to the website. <a href='login.php'>Login</a> to continue.
						</div>";
				}
				else
				{
					echo "<div style='background-color: rgb(0, 0, 0);
								margin:auto;
								margin-top:60px;
								margin-bottom:-65px;
								font-family: Arial, Helvetica, sans-serif;
								padding: 10px;
								width: 50%;
								opacity: 0.8;
								border-radius: 15px;
								text-align: center;
								color: rgba(255,205,0, 1);
								box-shadow: 7px 7px 10px #252525;'>You have not been registered.
						</div>";
				}
			}
			else{
				echo "<div style='background-color: rgb(0, 0, 0);
								margin:auto;
								margin-top:60px;
								margin-bottom:-65px;
								font-family: Arial, Helvetica, sans-serif;
								padding: 10px;
								width: 50%;
								opacity: 0.8;
								border-radius: 15px;
								text-align: center;
								color: rgba(255,205,0, 1);
								box-shadow: 7px 7px 10px #252525;'>Email already taken. Try a different one.
						</div>";
			}
		}
		mysqli_close($link);
		
	?>

</head>

<body>
	<a class="homebutton" href="homepage.php"><i class="fa fa-caret-left" ></i>&nbsp;&nbsp;Home</a>
	<form id="regForm" name="regForm" action="register.php" name="RegisterForm" onsubmit="return validatesignup()" method="POST">
		<div class="yoo">
			<h4 class="title">Register</h4>
			<div class="title-text text-muted">Create your account. It's free and only takes a minute.</div>
			<br>
			<div class="warning-message invisible" id="warning-message">
			</div>
			<!-- One "tab" for each step in the form: -->
			<div class="tab">
				<div class="form-group">
					<div class="input-group">
						<span class="input-group-addon">
							<i class="fa fa-child"></i>
						</span>
						<input type="text" class="form-control" placeholder="Enter your full name" name="fullName"
							required>
					</div>
				</div>
				<div class="form-group">
					<div class="input-group">
						<span class="input-group-addon">
							<i class="fa fa-envelope"></i>
						</span>
						<input type="email" class="form-control" placeholder="Email" name="emailId" required>
					</div>
				</div>
				<div class="form-group">
					<div class="input-group">
						<span class="input-group-addon">
							<i class="fa fa-lock"></i>
						</span>
						<input type="password" class="form-control" placeholder="Password" name="password"
							type="password" required>
					</div>
				</div>
				<div class="form-group">
					<div class="input-group">
						<span class="input-group-addon">
							<i class="fa fa-lock"></i>
						</span>
						<input type="password" class="form-control" placeholder="Confirm Password"
							name="confirmPassword" required>
					</div>
				</div>
				<div class="form-group">
					<div class="input-group">
						<span class="input-group-addon">
							<i class="fa fa-child"></i>
						</span>
						<input type="number" class="form-control" placeholder="Enter your age" name="age"
							required>
					</div>
				</div>
				<div class="form-group">
					<div class="input-group">
						<span class="input-group-addon">
							<i class="fa fa-address-book"></i>
						</span>
						<input type="text" class="form-control" placeholder="10 digit mobile number" name="contactNumber"
							required>
					</div>
				</div>
				<div class="form-group">
					<div class="input-group"
						<label for="gender">
							<span class="input-group-addon">
								<i class="fa fa-venus-mars"></i>
							</span>
						</label>
						<select class="year-select md-form" id="gender" name="gender" type="text"
							style="background-color: rgba(0,0,0,0.8);">
							<option value="-1" class="lignten" selected disabled hidden>Gender</option>
							<option value="Male">Male</option>
							<option value="Female">Female</option>
							<option value="Other">Others</option>
						</select>
				    </div>
				</div>
			</div>
		</div>
		<br>
		<center>
			<span>
				<button type="reset" class="reset-button">Reset</button> &nbsp;&nbsp;&nbsp;
				<button type="submit" class="register-button">Register</button>
			</span>
		</center>
		<br>
		<div class="footer text-center">Already have an Account?
			<a href="login.php" style="color:rgba(255,205,0, 1);">Login Here</a>
		</div>
		</div>
	</form>
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>

</html>