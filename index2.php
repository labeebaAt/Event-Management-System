<!DOCTYPE html>
<?php
session_start();
if(!isset($_SESSION['username'])){
  header('location:login.php');
}
 ?>

<html>

<head>
  <title>Event Manager</title>

  <link rel="stylesheet" href="css/bootstrap.min.css"/>
  <link rel="stylesheet" href="css/main.css"/>
  <meta name="viewport" content="width=device-width, initial-scale=1,user-scaleable=no">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
  </script>
  <script src="js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container">



  </div>

     <nav class="navbar navbar-default navbar-fixed-top" id="navbar">
        <div class="container">
          <a href="/tutorial/index2.php" class="navbar-brand" id="text">Event Venues</a>
            <a href="index3.php" class="navbar-brand" id="text">BOOKING</a>
          <ul class="new navbar-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="text">DHAKA<span class="caret"></span>
              <ul class="dropdown-menu" role="menu">
                <li><a href="dhaka1.php">Historic + Traditional</a></li>
                <li><a href="dhaka2.php">Hotel, Restaurant</a></li>
                <li><a href="#">With a View</a></li>
                <li><a href="#">Rooftops + Outside spaces</a></li>
              </ul>
            </li>
           </ul>
           <ul class="new navbar-nav">
             <li class="dropdown">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="text">CHITTAGONG<span class="caret"></span>
               <ul class="dropdown-menu" role="menu">
                 <li><a href="#">Historic + Traditional</a></li>
                 <li><a href="#">Hotel, Restaurant</a></li>
                 <li><a href="#">With a View</a></li>
                 <li><a href="#">Rooftops + Outside spaces</a></li>
               </ul>
             </li>
            </ul>


       <a href="logout.php" class="navbar-brand" id="text">LOGOUT</a>





        </div>
      </nav>










      <div id="background-image">
        <div id="image-1"></div>
        <div id="image-2"></div>
      </div>

      <div class="col-md-2"></div>

        <div class="col-md-8">
          <div class="row">
          <h2 class="text-center">Featured Event Venues</h2>
          <div class="col-md-5">
            <h4>Venue 28</h4>
            <img src="images/v5.jpg" alt="v1" id="images"/ />
            <p>Number of event spaces: 7 </p>
            <p>  Minimum Guests: 14</p>
            <p>  Maximum Guests: 50</p>
            <button type="button" class="btn btn-success"data-toggle="modal"data-target="#details-1">Details</button>
          </div>

      <div class="col-md-3">
            <h4>Number Twenty</h4>
            <img src="images/v2.jpg" alt="v2" id="images"/ />
            <p>Number of event spaces:5</p>
            <p>Minimum Guests: 14</p>
            <p>Maximum Guests: 200</p>
            <button type="button" class="btn btn-success"data-toggle="modal"data-target="#details-2">Details</button>
          </div>
        <div class="col-md-3">
            <h4>The Boathouse</h4>
            <img src="images/v4.jpg" alt="v3" id="images"/ />
            <p>Number of event spaces: 5</p>
              <p> Minimum Guests: 10</p>
              <p> Maximum Guests: 400</p>
            <button type="button" class="btn btn-success"data-toggle="modal"data-target="#details-3">Details</button>
        </div>
      </div>
    </div>

     <?php include 'details-modal-v5.php';
           include 'details-modal-v2.php';
            include 'details-modal-v4.php';
      ?>


      </body>
      </html>
