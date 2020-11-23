<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
    <?php 
    if(!isset($_SESSION)){
        session_start();
    }
    ?>
    <style>

        body{
            background-color:black;
        }

        .black{
            background:rgb(0,0,0);
        }

        /*top navbar and banner*/
        .banner{
            position: relative;
        }

        .topnav {
            position: absolute;
            width:100%;
            background-color:rgba(0,0,0,0.7);
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

        

         /* end of top navbar and banner*/

        /* grid */
        
        /* purchase */
        #buy{
          margin-top:10px;
          margin-bottom:15px;
        }

        .purchase-card{
            display: inline-block;
            margin-top: 15px;
            margin-right: 7px;
            background:rgb(0,0,0);
            height:auto ;
            color:white;
            border-radius: 10px;
            border:3.5px solid white;
            transition: margin 1s ease;
            
          }

          .trekk{
            margin: 0;
            width: 286px;
            height:176px ;
            border-radius: 7px;
            
            border-bottom:5px solid white;
          }
     
          
        /* purchase ends*/

    
        /*end of grid */



         /* sanyam */

         .heading{
            right: 0;
            left: 0;
            color: rgba(255,205,0, 1);
            font-size: 1.5em !important;
            text-align: center;
            font-family: Comic Sans MS !important;
        }

        .inner{
            margin: 0;
            padding-top: 0;
            text-align: center;
            color: purple;
            font-family: sans-serif;

        }
        
            /* border-radius: 15px; */
            /* text-align: justify; */
            /* align-self: center; */

        .why-us-card{
            display: inline-block;
            margin-top: 15px;
            margin-bottom: 15px;
            margin-left: 200px;
            width: 200px;
            background:black;
            color: white;
            height:auto ;
            padding: 10px;
            text-align: center;
            right: auto;
            left: auto;
            /* border-right: rgba(0,0,0,0.6) solid 2px; */
        }

        #offer-text{
            color: white;
            margin-top: 5px;
            margin-bottom: 0px;
            font-family: Mistral;
            font-size: 25;
        }
        
        #offer-text-head{
            color: rgba(255,205,0, 1);
            margin-top: 5px;
            margin-bottom: 0px;
            font-family: sans-serif;
            font-size: 25;
        }

        .card-group{
            margin:10px;
        }

        .card{
            margin:15px;
            
        }

        .card-body{
            border-bottom:1px solid black;
            border-top:1px solid black;
            color:white;
            background:black;
            margin:3px;
        }

        .card-footer{
            border-top:1px solid black;
            color:white;
            background:black;
            margin:3px;
        }

        #youtubesection{

        background-image: url("../images/home/youtube.jpg");
        background-repeat: no-repeat;
        background-position: right top;
        background-attachment: fixed;
        background-size: cover;
        border-top:1px solid white;
        padding-bottom:15px;
        /* background-color: purple; */

        }

        .blog-card{
            display: inline-block;
            margin-top: 15px;
            margin-right: 10px;
            width: 30%;
            background:rgb(0,0,0);
            height:auto ;
            text-align: center;
            color:white;
            
        }

        #blog-section{
            margin-left: 10%;
            margin-right: 10%;
            background-color: black;
            padding-bottom: 20px;
            padding-top: 20px;
        }
        
        .blog-image{
            margin: 0;
            width: 300px;
            height:200px ;
            border-radius:10px;
        }

        .blog-link{
            color: red;
            font-family: sans-serif;
            font-size: 10;
        }

        #outer-blog{
            border-top:1px solid white;
            background-color: black;
        }

        #blog-main-head{
           
            color: rgba(255,205,0, 1);
        }

        .blog-heading{
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            color: white;

        }
            

        #why{
            font-family:Courier ;
            color: purple;
        }

        #why-us{
            border-top:1px solid white;
            background-color: black;
            border-bottom:1px solid white;
        }

        .why-us-images{
            margin: 0;
            width: 120px;
            height: 120px ;
            color:white;
        }

        .image {
            display: block;
            width: 268px;
            height: 300px;
        }

        footer {
            position: relative;
            width: 100%;
            height: 60px;
            left: 0;
            bottom: 0;
            background-color: black;
            color: white;
            text-align: center;
            padding:20px;
            border-top:1px solid white;
        }
        

    </style>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        include '../../mysqli_connect.php';
        if(!isset($_SESSION)) 
        { 
            session_start(); 
        }
        
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
        <img src="../images/home/final.jpg" style="width:100%;">
        <div class="topnav">
        <?php
            include('../../mysqli_connect.php');   
            if(!isset($_SESSION)){
                session_start();
            }
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
    <div id="myModal" class="modal fade" role="dialog" style="opacity:1;">
        <div class="modal-dialog">
      
          <!-- Modal content-->
          <div class="modal-content" style="background-color: black;color: white;opacity:0.8;top:180px;">
            <div class="modal-header">              
              <center><h4 class="modal-title" >Profile</h4></center>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
              <p>
                <br>
                <?php
                    include '../../mysqli_connect.php';
                    if(!isset($_SESSION)) 
                    { 
                        session_start(); 
                    }
                   
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
                    <button type="submit" class="btn btn-warning" data-toggle="modal" style="color:white;" data-target="#confirmDeleteModal">Update</button>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#confirmDeleteModal">Delete Account</button>
                </form>
                <!-- Confirm Delete Modal -->
                <div class="modal fade" id="confirmDeleteModal" role="dialog" style="opacity:1;">
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

<section id="why-us"> 
<br>
<div class="heading" id="offer-text-head"><h1><span style="color:white">---------</span> What do we offer <span style="color:white">---------</span></h1></div>
    
    <div class="heading" id="offer-text"> Obivously you wont remember the time  </div>
    <div class="heading" id="offer-text"> You spent in Class or an Office </div>
    <div class="heading" id="offer-text"> We do whatever makes people happy, mostly travel  </div>
    <div class="heading" id="offer-text"> because that’s something we do best, creating </div>
    <div class="heading" id="offer-text"> cherishable memories and priceless smiles.</div>
    <div class="heading" id="offer-text"> So go travel that Godamnnn place ! </div>
  
  <div class="why-us-card">
    <img src="../images/home/why_us1.png" alt="Avatar" class="why-us-images">
    <h3 class="inner" id="why">HOLIDAY CAMPING</h3>
  </div>

  <div class="why-us-card">
    <img src="../images/home/why_us2.png" alt="Avatar" class="why-us-images">
    <h3 class="inner" id="why">HOLIDAY CAMPING</h3>
  </div>
  
  <div class="why-us-card">
    <img src="../images/home/why_us3.png" alt="Avatar" class="why-us-images">
    <h3 class="inner" id="why">HOLIDAY CAMPING</h3>
  </div>
  
</section>
<br>
<div class="heading" id="offer-text-head"><h1><span style="color:white">---------</span> What do we offer <span style="color:white">---------</span></h1></div>


<!--grid1 start -->
<!-- CARDS -->

<div class="card-group" style="padding-bottom:15px;border-bottom:1px solid white;">
<!-- card1 -->
  <div class="card" style="border-radius:10px;">
    <img class="card-img-top" src="../images/home/blog1.jpg" alt="Card image cap" style="border-radius:8px;;padding:3px;">
    <div class="card-body" style="border-bottom:1px solid black;border-top:1px solid black;color:white;background:black">
      <h5 class="card-title">Kalsubai</h5>
      <p class="card-text"><span>5400 ft.</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="align-item:right;">6 Days</span></p>
      <p class="card-text">Rs. 1500</p>
    </div>
    <div class="card-footer">
      <center>
        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#knowMoreModal1">Know More</button>
        &nbsp;  

        <div id="knowMoreModal1" class="modal fade" role="dialog" style="opacity:1;">
        <div class="modal-dialog">
      
          <!-- Modal content-->
          <div class="modal-content" style="background-color: black;color: white;opacity:0.95;top:120px;border:2px solid white;">
            <div class="modal-header">
              <center><h4 class="modal-title" >Kalsubai</h4></center>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
              <p>
                <br>
                Also    known as Mount Everest of Maharashtra !Kalsubai Peak Trek with a height of 1646 meters or 5400 Feet is famous as the highest peaks in Maharashtra. Kalsubai Mountain lies in the Sahyadri mountain range falling under Kalsubai Harishchandragad Wildlife Sanctuary. Kalsubai Height being the highest peak, it commands a beautiful view. Since Bhandardara Dam and Kalsubai Peak is extremely famous, enough effort has been made to make this trek easy. There are steel railings, chains, and ladders at places where it is difficult to climb. 
              
              </p>
            </div>
            <div class="modal-footer">
                    <button type="button" class="btn btn-danger"data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#bookModal1">Book</button>
               
            </div>
          </div>
      
        </div>
      </div>

      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#bookModal1">Book</button>



        <div id="bookModal1" class="modal fade" role="dialog" style="opacity:1;">
            <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content" style="background-color: black;color: white;opacity:0.95;top:190px;border:2px solid white;">
                <div class="modal-header">
                <center><h4 class="modal-title" >Kalsubai</h4></center>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                <p>
                    <?php
                        if(!isset($_SESSION)){
                            session_start();
                        }
                        if(!isset($_SESSION['username']) or !isset($_SESSION['loggedin']) or $_SESSION['loggedin']!==true){
                            echo "Login to book this trip...";
                        }
                        else{                
                            echo "Confirm Booking to Kalsubai?";
                        }
                    ?>
                </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger"data-dismiss="modal">Cancel</button>
                    <?php
                        if(!isset($_SESSION)){
                            session_start();
                        }
                        if(!isset($_SESSION['username']) or !isset($_SESSION['loggedin']) or $_SESSION['loggedin']!==true){
                            echo "<a href='login.php'><button type='button' class='btn btn-primary' data-toggle='modal'>Login</button></a>";
                        }
                        else{                
                            echo "<form method='POST' action='book.php'>
                            <input type='hidden' name='tripId' value='1' />
                            <button type='submit' class='btn btn-success' data-toggle='modal'>Confirm</button>
                            </form>";
                        }
                    ?>
                    
                </div>
            </div>
        </div>
    </div>
      </center>
    </div>
  </div>
  

  <!-- card2 -->
  <div class="card" style="border-radius:10px;">
    <img class="card-img-top" src="../images/home/blog1.jpg" alt="Card image cap" style="border-radius:8px;;padding:3px;">
    <div class="card-body" style="border-bottom:1px solid black;border-top:1px solid black;color:white;background:black">
      <h5 class="card-title">Peb Fort</h5>
      <p class="card-text"><span>1624 ft.</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="align-item:right;">6 Days</span></p>
      <p class="card-text">Rs. 800</p>
    </div>
    <div class="card-footer">
      <center>
        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#knowMoreModal2">Know More</button>
        &nbsp;  

        <div id="knowMoreModal2" class="modal fade" role="dialog" style="opacity:1;">
        <div class="modal-dialog">
      
          <!-- Modal content-->
          <div class="modal-content" style="background-color: black;color: white;opacity:0.95;top:120px;border:2px solid white;">
            <div class="modal-header">
              <center><h4 class="modal-title" >Peb Fort</h4></center>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
              <p>
                <br>
                Hilltop fort structure reachable by a popular monsoon trek through lush greenery & waterfalls.Trekking near Mumbai to Peb Fort or Vikatgad around 4 km from Neral Station a very enjoyable trek in Monsoon season passing through a local village, waterfalls this trek offers all ladders, rock patches, caves, dense forest, ridge walking. Trek can be combined with Matheran visit or you can trek till Panorama point Matheran till here. Excellent for new trekkers a village guide or guided tour will make the trek more enjoyable.
             
              </p>
            </div>
            <div class="modal-footer">
                    <button type="button" class="btn btn-danger"data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#bookModal2">Book</button>
               
            </div>
          </div>
      
        </div>
      </div>

      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#bookModal2">Book</button>

        <div id="bookModal2" class="modal fade" role="dialog" style="opacity:1;">
            <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content" style="background-color: black;color: white;opacity:0.95;top:190px;border:2px solid white;">
                <div class="modal-header">
                <center><h4 class="modal-title" >Kalsubai</h4></center>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                <p>
                    <?php
                        if(!isset($_SESSION)){
                            session_start();
                        }
                        if(!isset($_SESSION['username']) or !isset($_SESSION['loggedin']) or $_SESSION['loggedin']!==true){
                            echo "Login to book this trip...";
                        }
                        else{                
                            echo "Confirm Booking to Peb Fort?";
                        }
                    ?>
                </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger"data-dismiss="modal">Cancel</button>
                    <?php
                        if(!isset($_SESSION)){
                            session_start();
                        }
                        if(!isset($_SESSION['username']) or !isset($_SESSION['loggedin']) or $_SESSION['loggedin']!==true){
                            echo "<a href='login.php'><button type='button' class='btn btn-primary' data-toggle='modal'>Login</button></a>";
                        }
                        else{                
                            echo "<form method='POST' action='book.php'>
                            <input type='hidden' name='tripId' value='2' />
                            <button type='submit' class='btn btn-success' data-toggle='modal'>Confirm</button>
                            </form>";
                        }
                    ?>
                    
                </div>
            </div>
        </div>
    </div>
      </center>
    </div>
  </div>
  
  <!-- card3 -->
  <div class="card" style="border-radius:10px;">
    <img class="card-img-top" src="../images/home/blog1.jpg" alt="Card image cap" style="border-radius:8px;;padding:3px;">
    <div class="card-body" style="border-bottom:1px solid black;border-top:1px solid black;color:white;background:black">
      <h5 class="card-title">Irshalgad</h5>
      <p class="card-text"><span>1242 ft.</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="align-item:right;">6 Days</span></p>
      <p class="card-text">Rs. 800</p>
    </div>
    <div class="card-footer">
      <center>
        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#knowMoreModal3">Know More</button>
        &nbsp;  

        <div id="knowMoreModal3" class="modal fade" role="dialog" style="opacity:1;">
        <div class="modal-dialog">
      
          <!-- Modal content-->
          <div class="modal-content" style="background-color: black;color: white;opacity:0.95;top:120px;border:2px solid white;">
            <div class="modal-header">
              <center><h4 class="modal-title" >Irshalgad</h4></center>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
              <p>
                <br>
                Irshalgad derived its name from Irshal that means the top and 'gad' means the fort. This fort served as a watchtower in previous times due to its pinnacle. It was easy to keep a check over enemy movements around the fort. This trek to Irshalgad fort will test your endurance all through the trek putting forth various inclines and flat trails.
            
              </p>
            </div>
            <div class="modal-footer">
                    <button type="button" class="btn btn-danger"data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#bookModal3">Book</button>
               
            </div>
          </div>
      
        </div>
      </div>

      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#bookModal3">Book</button>



        <div id="bookModal3" class="modal fade" role="dialog" style="opacity:1;">
            <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content" style="background-color: black;color: white;opacity:0.95;top:190px;border:2px solid white;">
                <div class="modal-header">
                <center><h4 class="modal-title" >Irshalgad</h4></center>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                <p>
                    <?php
                        if(!isset($_SESSION)){
                            session_start();
                        }
                        if(!isset($_SESSION['username']) or !isset($_SESSION['loggedin']) or $_SESSION['loggedin']!==true){
                            echo "Login to book this trip...";
                        }
                        else{                
                            echo "Confirm Booking to Irshalgad?";
                        }
                    ?>
                </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger"data-dismiss="modal">Cancel</button>
                    <?php
                        if(!isset($_SESSION)){
                            session_start();
                        }
                        if(!isset($_SESSION['username']) or !isset($_SESSION['loggedin']) or $_SESSION['loggedin']!==true){
                            echo "<a href='login.php'><button type='button' class='btn btn-primary' data-toggle='modal'>Login</button></a>";
                        }
                        else{                
                            echo "<form method='POST' action='book.php'>
                            <input type='hidden' name='tripId' value='3' />
                            <button type='submit' class='btn btn-success' data-toggle='modal'>Confirm</button>
                            </form>";
                        }
                    ?>
                    
                </div>
            </div>
        </div>
    </div>
      </center>
    </div>
  </div>
  
  <!-- card4 -->
  <div class="card" style="border-radius:10px;">
    <img class="card-img-top" src="../images/home/blog1.jpg" alt="Card image cap" style="border-radius:8px;;padding:3px;">
    <div class="card-body" style="border-bottom:1px solid black;border-top:1px solid black;color:white;background:black">
      <h5 class="card-title">Visapur</h5>
      <p class="card-text"><span>1780 ft.</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="align-item:right;">6 Days</span></p>
      <p class="card-text">Rs. 2000</p>
    </div>
    <div class="card-footer">
      <center>
        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#knowMoreModal4">Know More</button>
        &nbsp;  

        <div id="knowMoreModal4" class="modal fade" role="dialog" style="opacity:1;">
        <div class="modal-dialog">
      
          <!-- Modal content-->
          <div class="modal-content" style="background-color: black;color: white;opacity:0.95;top:120px;border:2px solid white;">
            <div class="modal-header">
              <center><h4 class="modal-title" >Visapur</h4></center>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
              <p>
                <br>
                Maharashtra is home to a number of spectacular monsoon destinations. While some of these are great places for family vacations and treat you to beautiful views without you having to make any effort, there are some which are ideal for trekkers who like to earn their views. Trekking is not just great for fitness, it is also one of the most refreshing activities one can indulge in. Be it a solo trek or one with a group, trekking is a rewarding experience. As you make the climb to reach your destination, every nook and corner of the hills presents you with a unique challenge, adventure, view and unspoiled piece of nature. Maharashtra has some excellent trekking destinations for all kinds of trekkers. One such destination which is perfect for beginners is the Visapur fort 
             
              </p>
            </div>
            <div class="modal-footer">
                    <button type="button" class="btn btn-danger"data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#bookModal4">Book</button>
               
            </div>
          </div>
      
        </div>
      </div>

      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#bookModal4">Book</button>



        <div id="bookModal4" class="modal fade" role="dialog" style="opacity:1;">
            <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content" style="background-color: black;color: white;opacity:0.95;top:190px;border:2px solid white;">
                <div class="modal-header">
                <center><h4 class="modal-title" >Visapur</h4></center>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                <p>
                    <?php
                        if(!isset($_SESSION)){
                            session_start();
                        }
                        if(!isset($_SESSION['username']) or !isset($_SESSION['loggedin']) or $_SESSION['loggedin']!==true){
                            echo "Login to book this trip...";
                        }
                        else{                
                            echo "Confirm Booking to Visapur?";
                        }
                    ?>
                </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger"data-dismiss="modal">Cancel</button>
                    <?php
                        if(!isset($_SESSION)){
                            session_start();
                        }
                        if(!isset($_SESSION['username']) or !isset($_SESSION['loggedin']) or $_SESSION['loggedin']!==true){
                            echo "<a href='login.php'><button type='button' class='btn btn-primary' data-toggle='modal'>Login</button></a>";
                        }
                        else{                
                            echo "<form method='POST' action='book.php'>
                            <input type='hidden' name='tripId' value='4' />
                            <button type='submit' class='btn btn-success' data-toggle='modal'>Confirm</button>
                            </form>";
                        }
                    ?>
                    
                </div>
            </div>
        </div>
    </div>
      </center>
    </div>
  </div>
  
  <!-- card5 -->
  <div class="card" style="border-radius:10px;">
    <img class="card-img-top" src="../images/home/blog1.jpg" alt="Card image cap" style="border-radius:8px;;padding:3px;">
    <div class="card-body" style="border-bottom:1px solid black;border-top:1px solid black;color:white;background:black">
      <h5 class="card-title">Dhak Bahiri</h5>
      <p class="card-text"><span>1950 ft.</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="align-item:right;">6 Days</span></p>
      <p class="card-text">Rs. 6000 </p>
    </div>
    <div class="card-footer">
      <center>
        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#knowMoreModal5">Know More</button>
        &nbsp;  

        <div id="knowMoreModal5" class="modal fade" role="dialog" style="opacity:1;">
        <div class="modal-dialog">
      
          <!-- Modal content-->
          <div class="modal-content" style="background-color: black;color: white;opacity:0.95;top:120px;border:2px solid white;">
            <div class="modal-header">
              <center><h4 class="modal-title" >Dhak Bahiri</h4></center>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
              <p>
                <br>
                The earth has music for those who listen and this time the melodious symphony of mother Earth took me to one of the cave trek in the Sahyadri hill range. A trek that is definitely not for the fainthearted person. A trek where one needs an assistance of a rope to make it through. A trek where one mistake and you’re dead. Any guesses? Yes, I am talking about the “Dhak Bahiri Cave Trek”.
                Located on the Dhak peak in the Jambhavali region, to reach the Dhak Bahiri cave, one needs to ascend a col, walk along a scarp and finally a vertical ascent of almost 70-degree gradient. A small mistake and you will find yourself somewhere deep in the valleys of Sahayadri’s. Despite being so risky, the trek is quite popular among the Mumbaikar’s and the Punker’s who are looking to experience something extraordinary.

              </p>
            </div>
            <div class="modal-footer">
                    <button type="button" class="btn btn-danger"data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#bookModal5">Book</button>
            </div>
          </div>
      
        </div>
      </div>

      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#bookModal5">Book</button>



        <div id="bookModal5" class="modal fade" role="dialog" style="opacity:1;">
            <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content" style="background-color: black;color: white;opacity:0.95;top:190px;border:2px solid white;">
                <div class="modal-header">
                <center><h4 class="modal-title" >Dhak Bahiri</h4></center>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                <p>
                    <?php
                        if(!isset($_SESSION)){
                            session_start();
                        }
                        if(!isset($_SESSION['username']) or !isset($_SESSION['loggedin']) or $_SESSION['loggedin']!==true){
                            echo "Login to book this trip...";
                        }
                        else{                
                            echo "Confirm Booking to Dhak Bahiri?";
                        }
                    ?>
                </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger"data-dismiss="modal">Cancel</button>
                    <?php
                        if(!isset($_SESSION)){
                            session_start();
                        }
                        if(!isset($_SESSION['username']) or !isset($_SESSION['loggedin']) or $_SESSION['loggedin']!==true){
                            echo "<a href='login.php'><button type='button' class='btn btn-primary' data-toggle='modal'>Login</button></a>";
                        }
                        else{                
                            echo "<form method='POST' action='book.php'>
                            <input type='hidden' name='tripId' value='5' />
                            <button type='submit' class='btn btn-success' data-toggle='modal'>Confirm</button>
                            </form> ";
                        }
                    ?>
                    
                </div>
            </div>
        </div>
    </div>
      </center>
    </div>
  </div>
  

</div>
<!-- end CARDS-->
<!--grid1 end -->

<section id="buy">

<?php
include '../../mysqli_connect.php';
if(!isset($_SESSION)) 
{ 
    session_start(); 
}
if(isset($_SESSION['username']) and isset($_SESSION['loggedin']) and $_SESSION['loggedin']==true){
  echo "<div class='heading' id='offer-text-head'><h1><span style='color:white'>---------</span> Your Previous Trips <span style='color:white'>---------</span></h1></div>";
  $email=$_SESSION['username'];
  $select_trip_user_query="select * from trip_user where email='$email';";
  $select_trip_query="select * from trip;";
  $rows=mysqli_query($link,$select_trip_user_query);
 
  while($row=mysqli_fetch_array($rows,MYSQLI_BOTH)){
    $trip=mysqli_query($link,$select_trip_query);
    while($place=mysqli_fetch_array($trip,MYSQLI_BOTH)){
    if($row['trip_id']==$place['tripId'] ){
     
     echo "<div class='purchase-card'>
      <img src='../images/home/peb.jpg' alt='Avatar' class='trekk'>
      <div class='card-body'>
      <h5 class='card-title'>{$place['trip_name']}</h5>
          <p class='card-text'><span>{$place['height']} ft.</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style='align-item:right;'>{$place['days']}</span></p>
          <p class='card-text'>Rs.&nbsp;{$place['price']}</p>
          <p class='card-text'>Time: {$row['booking_time']}</p>
      </div>
    </div>";
    }
    
  }

  }


}

?>

</section>

<section id ="youtubesection">

  <div class="heading"><h1><span style="color:white">---------</span> Youtube Videos <span style="color:white">---------</span></h1></div>
 <center>
<iframe class="youtube-video" width="560" height="315" src="https://www.youtube.com/embed/gTTrjh3LZuU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</center> 
<div></div>

</section>

<section id="outer-blog">

<section id="blog-section">
  <div class="heading" id="blog-main-head"><h1><span style="color:white">---------</span> Our Blogs <span style="color:white">---------</span></h1></div>
  
<div class="blog-card">
  <img src="../images/home/blog1.jpg" alt="Avatar" class="blog-image">
    <h4 class="blog-heading">How Trekking can heal a broken you</h4>
    <a class="blog-link" href="#">Read More</a>
</div>

<div class="blog-card">
  <img src="../images/home/blog3.jpg" alt="Avatar" class="blog-image">
    <h4 class="blog-heading">How Trekking can heal a broken you</h4>
    <a class="blog-link" href="#">Read More</a>
</div>

<div class="blog-card">
  <img src="../images/home/blog2.jpg" alt="Avatar" class="blog-image">
    <h4 class="blog-heading">Get Lost in the beauty of Himalaya</h4>
    <a class="blog-link" href="#">Read More</a>
</div>

</section>
</section>

<footer>
 <p> COPYRIGHT @WORLD OF TREKKERS </p>
</footer>
    

</body>
</html>