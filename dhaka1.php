<!DOCTYPE html>
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



      <div class="col-md-2"></div>

        <div class="col-md-8">
          <div class="row">
          <h2 class="text-center">Venues</h2>
          <div class="col-md-4">
            <h4>Venue 28</h4>
            <img src="images/v5.jpg" alt="v1" id="images"/ />
            <p>Number of event spaces: 7
              Minimum Guests: 14
              Maximum Guests: 50
            </p>
            <button type="button" class="btn btn-success"data-toggle="modal"data-target="#details-1">Details</button>
          </div>

      <div class="col-md-3">
            <h4>Number Twenty</h4>
            <img src="images/v2.jpg" alt="v2" id="images"/ />
            <p>Number of event spaces: 3
               Minimum Guests: 20
               Maximum Guests: 150
            </p>
            <button type="button" class="btn btn-success"data-toggle="modal"data-target="#details-2">Details</button>
          </div>
        <div class="col-md-3">
            <h4>The Boathouse</h4>
            <img src="images/v4.jpg" alt="v3" id="images"/ />
            <p>Number of event spaces: 5
               Minimum Guests: 10
               Maximum Guests: 400
            </p>
            <button type="button" class="btn btn-success"data-toggle="modal"data-target="#details-3">Details</button>
        </div>

        <div class="col-md-3">
              <h4>S Twenty</h4>
              <img src="images/v6.jpg" alt="v2" id="images"/ />
              <p>Number of event spaces: 3
                 Minimum Guests: 20
                 Maximum Guests: 150
              </p>
              <button type="button" class="btn btn-success"data-toggle="modal"data-target="#details-11">Details</button>
            </div>








          <div class="col-md-12">

                <h4>Venue 25</h4>
                <img src="images/v3.jpg" alt="v1" id="images"/ />
                <p>Number of event spaces: 5
                   Minimum Guests: 10
                   Maximum Guests: 400
                </p>
                <button type="button" class="btn btn-success"data-toggle="modal"data-target="#details-12">Details</button>
            </div>












</div>
    </div>

     <?php include '1details-modal-v5.php';
           include '1details-modal-v2.php';
            include '1details-modal-v4.php';
            include'pic1.php';
              include'pic2.php';
      ?>
      </body>
      </html>
