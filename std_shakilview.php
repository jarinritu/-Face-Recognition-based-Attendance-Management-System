<!DOCTYPE html>
<html>
<?php

 session_start();

?>
    <head>
 <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!--Font awesome kit code-->
    <script src="https://kit.fontawesome.com/c3268b65c5.js" crossorigin="anonymous"></script>
    <!--external css file-->
    <link rel="stylesheet" href="css/style.css">
    <title>Student's Attendance System</title>
    </head>
    </head>
    <body>
        <div class="jumbotron">
        <div class="container">
            <img src="images/ju.jpg" style="display:block;
        margin-left: auto;
        margin-right: auto;">
          <h3 class="display-4 " style="text-align: center;">Jahangirnagar University</h3><br>
          <h5 class="display-6" style="text-align: center;">Student's Attendance Management System</h5><br><br>
       
        </div>
        
         </div>
        <div class="course_head">
            <?php

            $code = $_GET['id'];
            // $name = $_GET['nid'];
            $roll = $_SESSION['roll'];
            echo "<p style='color:white; font-size: 25px; padding: .5px;'> $code  </p>";

            echo "Attendance for ". $roll . "<br>";

            ?>


        </div>


        <div class="courses">
            <?php

            $code = $_GET['id'];

            $roll = $_SESSION['roll'];
            

            $conn = new mysqli('localhost','root','','attendance');
            if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT*FROM `{$code}` WHERE id = '$roll'";
            $result = $conn->query($sql);


            if ($result->num_rows > 0) {
             echo "<table class='center'><tr><th>Date</th><th>Presence</th></tr>";
             while($row = $result->fetch_assoc()) {
             echo "<tr><td>".$row["date"]."</td><td>".$row["value"]."</td></tr>";
              }
             echo "</table>";
            }
            
            

            ?>

        </div>

        <div class="footer">
        <p>About us</p>
        </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>