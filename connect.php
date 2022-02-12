<?php
$venuename= filter_input(INPUT_POST,'venuename');
$location= filter_input(INPUT_POST,'location');
$datee= filter_input(INPUT_POST,'datee');
$guests= filter_input(INPUT_POST,'guests');

if(!empty($venuename))
{
  if(!empty($location))
  {
      if(!empty($datee))
      {

        if(!empty($guests))
         {
          $host="localhost";
          $dbusername="root";
          $dbpassword="";
          $dbname="bookingform";

        $conn=new mysqli($host,$dbusername,$dbpassword,$dbname);
        if(mysqli_connect_error()){
           die('Connect Error ('.mysqli_connect_errno() .') '.mysqli_connect_error());


        }
        else{
          $sql="INSERT INTO form (venuename,location,datee,guests)
          values('$venuename','$location','$datee','$guests')";

          if($conn->query($sql)){
           echo"Booking successful";



          }else{
            echo "Error:". $sql ."<br>". $conn->error;
          }
          $conn->close();



        }



        }
        else
        {
          echo "Number of Guests empty";
          die();
        }
      }
      else
      {
        echo "Date empty";
        die();
      }
  }
  else
  {
    echo "Location empty";
    die();
  }

}
else
{
  echo " Veunue Name empty";
  die();
}



 ?>
