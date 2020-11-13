<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
    <style>
        .banner{
            position: relative;
        }

        .topnav {
            position: absolute;
            width:100%;
            background-color:rgba(0,0,0,0.8);
            top:0;
            border-bottom:2px solid rgb(0,0,0);
        }

            /* Style the links inside the navigation bar */
        .topnav a {
            float: right;
            color: #f2f2f2;
            text-align: center;
            padding: 15px 19px;
            text-decoration: none;
            font-size: 1.2vw;
            font-family: Arial, Helvetica, sans-serif;
            color: white;
        }

        .topnav a img{
            padding:8px;
            float:left;
            left:0;
        }
            /* Change the color of links on hover */
        .topnav a:hover {
            background-color:rgba(255,255,255,0.8);
            color:black;
        }

            /* Add a color to the active/current link */
        .topnav a.active {
            background-color: #4CAF50;
            color: white;
        }

        img{
            height: 51.7vw;
        }

        
        
    </style>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        include '../../mysqli_connect.php';
        session_start();
        $delete_query="delete from user_trekker where email={$_SESSION['username']}";
        if ($link->query($delete_query) === TRUE) {
            header("location:logout.php");

          } else {
            echo "Error deleting record: " . $link->error;
          }
          $link->close();   
    }
    ?>
</head>
<body style="margin: 0;">
    <div class="banner">
        <img src="../images/home/campingireland.jpg" >
        <div class="topnav">
        <?php
            include('../../mysqli_connect.php');
            session_start();
            
            if(!isset($_SESSION['username']) or !isset($_SESSION['loggedin']) or $_SESSION['loggedin']!==true){
                echo "<a href='login.php'>LogIn</a>";
            }
            else{                
                echo "<a href='logout.php'>LogOut</a>";
                echo "<a href='#myModal' data-toggle='modal'>Profile</a>";
            }
        ?>
           
            <a href="">Blogs</a>
            <a href="">Home</a>
            <img style="width:70px;height:58px;padding:8px;" src="../images/home/WEBB png.png" />
        </div>

    </div>
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
      
          <!-- Modal content-->
          <div class="modal-content" style="background-color: black;color: white;opacity:0.8;top:90px;">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <center><h4 class="modal-title" >Profile</h4></center>
            </div>
            <div class="modal-body">
              <p>
                <br>
                <?php
                    include '../../mysqli_connect.php';
                    session_start();
                    $select_query="select * from user;";
                    $rows=mysqli_query($link,$select_query);
                    while($row=mysqli_fetch_array($rows,MYSQLI_BOTH))
                    {
                        if($_SESSION['username']===$row['email']){
                            echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email:&nbsp;&nbsp;&nbsp; {$row['email']}"."<br><br>";
                            echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Full Name:&nbsp;&nbsp;&nbsp; {$row['full_name']}"."<br><br>";
                            echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Age: &nbsp;&nbsp;&nbsp;{$row['age']}"."<br><br>";
                            echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mobile number:&nbsp;&nbsp;&nbsp; {$row['contact_number']}"."<br><br>";
                            echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gender:&nbsp;&nbsp;&nbsp; {$row['gender']}"."<br><br>";
                        }
                    }
                ?>
              </p>
            </div>
            <div class="modal-footer">
                <span>
                <form action="update_account.php">
                    <button type="submit" class="btn btn-warning" data-toggle="modal" data-target="#confirmDeleteModal">Update</button>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#confirmDeleteModal">Delete Account</button>
                </form>
                <!-- Confirm Delete Modal -->
                <div class="modal fade" id="confirmDeleteModal" role="dialog">
                    <div class="modal-dialog">
                    
                    <!-- Modal content-->
                    <div class="modal-content" style="top:180px;color:black;text-align:left;">
                        <div class="modal-body">
                        <p>&nbsp;&nbsp;&nbsp;Do you want to delete the account??</p>
                        </div>
                        <div class="modal-footer">
                        <form action="delete_account.php">
                            <button type="submit" class="btn btn-danger">Delete</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </form>
                        
                        </div>
                    </div>
                    
                    </div>
                </div>
            </div>
          </div>
      
        </div>
      </div>
      
</body>
</html>