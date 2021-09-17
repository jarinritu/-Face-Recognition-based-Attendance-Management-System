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
    <style>
    	body{
    		margin: 40px;
    		padding: 40px;
    	}
    </style>
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
            <h3 style="text-align: center;">Courses</h3>
        </div>


        <div class="courses" style="text-align: center;">
            <?php

            
            $email = $_SESSION['email'];

            $conn = new mysqli('localhost','root','','attendance');
            if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT semester,roll FROM stdreg WHERE email = '$email'";
            $result = $conn->query($sql);

            $semester;
           
            if ($row = $result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
              $semester = $row['semester'];
              $roll = $row['roll'];
              $_SESSION['roll'] = $roll;
             }
            }

            $sql = "SELECT course_name,course_id FROM courses WHERE semester = '$semester'";
            $result = $conn->query($sql);

            $link_address = "std_shakilview.php";
            // ei page e student attendance dekhbe

            if ($row = $result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
              $name = $row['course_name'];
              $code = $row['course_id'];

             // 

              echo "<a href='$link_address?id={$code}&nid={$name}'><p style='color:blue; font-size: 25px; padding: .5px;'> $name </p> </a>";

              echo "<br>";
             }
            }

            $conn->close();



            ?>

        </div>

        <div class="footer" style="text-align: center;">
        <p style="text-align: center;">About us</p>
        </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>