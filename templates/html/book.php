<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
    <style>
        body {
            background: #ECE9E6;
            /* fallback for old browsers */
            background: -webkit-linear-gradient(to top, #FFFFFF, #ECE9E6);
            /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to top, #FFFFFF, #ECE9E6);
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            background-image: url('https://i.pinimg.com/originals/a4/8a/02/a48a0246a6b5d61a08dd65e42635dba3.jpg');
        }
        .homebutton{
            border:1.5px solid white;
            font-weight: 150;
            padding:5px 8px;
            border-radius: 5px;
            color:white;
            font-size:20px;
            position:absolute;
            margin:90px -40px;
        }

        .homebutton:hover{
            color:black;
            background-color: rgba(255,255,255,0.8);
            text-decoration: none;
        }

    </style>
</head>
<body>
    <?php
    include '../../mysqli_connect.php';
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if(!isset($_SESSION)){
            session_start();
        }
            $email=$_SESSION['username']; 
            $tripId=$_POST["tripId"];
            $insert_query="insert into trip_user (email,trip_id) values ('$email','$tripId');";
            if(mysqli_query($link,$insert_query))
				{ 
					echo "<div style='background-color: rgb(0, 0, 0);
								margin:auto;
								margin-top:150px;
								margin-bottom:-65px;
								font-family: Arial, Helvetica, sans-serif;
								padding: 10px;
								width: 50%;
								opacity: 0.8;
								border-radius: 15px;
								text-align: center;
								color: rgba(17,238,17, 1);
                                box-shadow: 7px 7px 10px #252525;'>You have been registered for the trek.
                                <br>
                        </div>
                        <center><a class='homebutton' href='home2.php'><i class='fa fa-caret-left'></i>&nbsp;&nbsp;Home</a></center>";
				}
				else
				{
					echo "<div style='background-color: rgb(0, 0, 0);
								margin:auto;
								margin-top:150px;
								margin-bottom:-65px;
								font-family: Arial, Helvetica, sans-serif;
								padding: 10px;
								width: 50%;
								opacity: 0.8;
								border-radius: 15px;
								text-align: center;
								color: rgba(255,205,0, 1);
								box-shadow: 7px 7px 10px #252525;'>You have not been registered.
                        </div>
                        <center><a class='homebutton' href='home2.php'><i class='fa fa-caret-left'></i>&nbsp;&nbsp;Home</a></center>";
				}
		
        }

    ?>
</body>
</html>