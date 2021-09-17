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
  background:rgba(0,0,0,.5);

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
.add{
  
  font-size: 18px;
  padding: 7px;
  width:50%;
  border:1px solid #ffff99;
  color:#ffffe8;
  position: center;
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


<h2 style="font-size: 45px">Student Attendance Sheet</h2>
<h2 style="font-size: 25px"> Software Engineering </h2>
<h2 style="font-size: 20px"> Session 2016-2017 </h2>

<br>

<div class= "panel-body">

<?php
if($_SERVER ['REQUEST_METHOD']=='POST'){
    $std_name = $_POST['std_name'];
    $id = $_POST['id'];

    $query ="insert into student(std_name,id)values('$std_name','$id')";
    $result = $link->query($query);
    if($result){
        echo "<div class='alert alert-success'>
        
        Data inserted successfully";
    }

}


?>

    <form method ="post">
    <a href="attendanc.php"class = "btn btn-primary pull-right">Back</a>
</div>
<div class ="add">
   <div class = "form-group">
    <label for="name">Name:</label>
    <input type="text"name = "name"class = "form-control">
    
      
    </div>
    <div class = "form-group">
    <label for="name">Student Id:</label>
    <input type="text"name = "name"class = "form-control">
    
      
   
    
    </form>
    </div>


    </div>
<br>


   

<br>
   <div class="buttons">
        
      <input type="submit" > 
      
    </div>

  </form>
   

</body>
</html>