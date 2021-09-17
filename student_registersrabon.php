<!DOCTYPE html>
<html>
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
    <body>
        <style>
        body {
            font-family: Calibri, Helvetica, sans-serif;
            background-color: bisque;
            padding: 50px;
            margin: 50px;
           
        }

        .container {
            padding: 50px;
            background-color: rgb(57, 121, 238);
        }

        input[type=text],
        input[type=password],
        textarea {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: #f1f1f1;
        }

        input[type=text]:focus,
        input[type=password]:focus {
            background-color: orange;
            outline: none;
        }

        div {
            padding: 10px 0;
        }

        hr {
            border: 1px solid #f1f1f1;
            margin-bottom: 25px;

        }

        .registerbtn {
            background-color: #4CAF50;
            color: white;
            padding: 16px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
        }

        .registerbtn:hover {
            opacity: 1;
        }
    </style>
</head>

<body>
    <form action="student_connect_register.php" id="register" method="POST">
       
        <div>
            <center>
                <h1> Student Registration Form</h1>
            </center>
            <hr>
            <label> First Name: </label>
            <input type="text" name="f_name" placeholder="First name" size="15" required />
            <label> Middle Name: </label>
            <input type="text" name="m_name" placeholder="Middle name" size="15" required />
            <label>Last Name: </label>
            <input type="text" name="l_name" placeholder="Last name" size="15" required />

            <label>
                Session :
            </label>
            <select name="session">
                <option value="2014-15">2014-15</option>
                <option value="2015-16">2015-16</option>
                <option value="2016-17">2016-17</option>
                <option value="2017-18">2017-18</option>
                <option value="2018-19">2018-19</option>
            </select>
        </div>

         <div>
            <label>
                Semester :
            </label>
            <select name="semester">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
            </select>
        </div>

        <label><b>Phone </b></label>
        <input type="text" name="phone" placeholder="Country Code" value="+880" size="3" />

        <label for="roll"><b>Roll No</b></label>
        <input type="text" placeholder="Enter Roll No" name="roll" required>

        <label for="email"><b>Email Address</b></label>
        <input type="text" placeholder="Enter Personal Email Address" name="email" required>

        <label for="g_email"><b>Guardian Email Address</b></label>
        <input type="text" placeholder="Enter Guardian Email Address" name="g_email" required>


        <label for="password"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" id="p1" required>

        <button type="submit" class="registerbtn" >Register</button>

    </form>



        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
    



















