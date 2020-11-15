<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
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

        img{
            height: 51.7vw;
            border-bottom: 1px solid white;
        }

         /* end of top navbar and banner*/

        /* grid */
    
        /*end of grid */



         /* sanyam */
         .heading{
            right: 0;
            left: 0;
            color: rgba(255,205,0, 1);
            font-size: 20px;
            text-align: center;
            font-family: Courier !important;
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
        <img src="../images/home/final.jpg" >
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




      <!--grid1 start -->
      <!--grid1 end -->
      <!--grid2 start -->
      <!--grid2 end -->
   
    
      
        <!-- sanyam -->
       


<section id="why-us">

  
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

  
    <h4 class="blog-heading">Kedarnatha - A Complete Guide</h4>
    
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