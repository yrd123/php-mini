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
    session_start();
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			$full_name= $_POST['fullName'];
			$age=$_POST["age"];
			$contact_number= $_POST["contactNumber"]; 
            $gender=$_POST["gender"];
            $email=$_SESSION['username'];
            $update_query = "update user set full_name='$full_name', age='$age', contact_number='$contact_number', gender='$gender' where email='$email'";
            echo "$update_query";
            if (mysqli_query($link,$update_query)) {
                header("location:homepage.php");
            } else {
            echo "Error updating record: " . mysqli_error($link);
            }
			
		}
		mysqli_close($link);
	?>

</head>

<body>
	
	<form id="regForm" name="regForm" action="update_account.php" name="RegisterForm" onsubmit="return validatesignup()" method="POST">
		<div class="yoo">
			<h4 class="title">Update</h4>
			<div class="title-text text-muted">Create your account. It's free and only takes a minute.</div>
			<br>
			<div class="warning-message invisible" id="warning-message">
			</div>
			<div class="tab">
                
				<div class="form-group">
					<div class="input-group">
						<span class="input-group-addon">
							<i class="fa fa-child"></i>
						</span>
                        <input type="text" class="form-control" placeholder="Enter your full name" name="fullName" 	required>
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
				<button type="submit" class="register-button">Update</button>
			</span>
		</center>
		<br>
		
		</div>
	</form>
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>

</html>