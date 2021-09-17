<?php include_once("attend.php");?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
<style>

body{
  background: url(images/att.jpg) no-repeat ;
  background-attachment: fixed;
  background-size: cover;
  height: 100vh;
}
table {
  font-family: comic sans ms;
  border-collapse: collapse;
  width: 100%;
  position: center;
  background:rgba(0,0,0,.6);
}
h2{
  margin:auto;
  color:  #ffff99;
  width: 900px;
  font-weight: bold;
  text-align:center;
  left:50%;
  font-family: comic sans ms;
  user-select: none;
  background-color: #331a00;
  padding-top: 3px
  padding-right: 0px;
  padding-bottom:3px;
  padding-left: 0px;
  background:rgba(0,0,0,.5);
}

.f{
  margin:auto;
  font-family: comic sans ms; 
  color:#ffff99;
  position: center;
  width: 200px;
  padding: 3px 23px 6px 10px;
  

}

.a{
  
  font-size: 18px;
  padding: 7px;
  width:100%;
  border:1px solid #ffff99;
  color:#ffffe8;
  display: block;
  background:transparent;

}


 th {
  padding-top: 12px;
  padding-bottom: 12px;
  padding-left: 12px;
  text-align: left;
  background-color: #331a00;
  color: white;
  font-size: 20px;
}


td{
  color: #ffff99;
  border: 1px solid #331a00;
  text-align: left;
  padding: 8px;
  
}

tr:nth-child(odd) {
  background-color: #331a00;
}

.buttons{
  text-align: center;
}

.buttons input  {
  text-align: center;
  height: 50px;
  width: 150px;
  font-size: 25px;
  font-weight: 600;
  color: black;
  background: #ffff99;
  outline: none;
  cursor: pointer;
  border: 3px solid #331a00;
  border-radius: 25px;
  transition: .4s;
  font-family: comic sans ms;
   
}

.buttons input:hover{
  background: #cc0000;}

</style>




</head>

<body class="b">


<h2 style="font-size: 45px">Routine</h2>
<h2 style="font-size: 25px"> 3rd Year 2nd Semester </h2>
<h2 style="font-size: 20px"> Session 2016-2017 </h2>

<br>

   <div class= "f">
    
   <a href="Teacher_profile.php" class="btn btn-warning">Back</a>
    
   </div>
<br>

    
<form method="post">
<table>
    <tr>
      <th>Date</th>
      <th>10 AM - 11.30 AM</th>
      <th>11.30 AM - 1.00 PM</th>
      <th>2 PM - 3.30 PM</th>
    </tr>
    <?php 
    if($_GET['date']){
        $date = $_GET['date'];
   $query = "select * from routine";
   $result=$link->query($query);
           if($result->num_rows>0){
       
        while($val=$result->fetch_assoc()){
 
  ?>

    <tr>
        <td><?php echo $val['date']; ?></td>
        <td><?php echo $val['c_name']; ?></td>
        <td><?php echo $val['c_name2']; ?></td>
        <td><?php echo $val['c_name3']; ?></td>
       


    </tr>
        <?php }}} ?>
        
</body>
</html>