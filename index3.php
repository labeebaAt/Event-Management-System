<html>
<head>
  <title>booking form</title>
  <link rel="stylesheet"href="style2.css">
  <link rel="stylesheet"href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
   </head>
   <body>
<a href="index2.php" class="navbar-brand" id="text">HOME</a>
<br><br>

     <form method="post" action="connect.php">
     <div class="booking-form-box">
        <h2>VENUE BOOKING FORM</h2>
        <div class="booking-form">
          <br>
          Venue Name: <br><input type="text" name="venuename"><br><br>
          Location:   <br><input type="text" name="location"><br><br>
          Date: <br>      <input type="date" name="datee"><br><br>
          Number of guests:<br> <input type="number" name="guests"><br><br>



     </div>
   </div>
<input type="submit" value="Submit">




</form>



<form method="post" action="checkout1.php">

<input type="submit" value="Pay" class="btn">

</form>




   </body>
</html>
