<?php 
include "header.php";
include_once("attend.php");?>

<br>
<nav>     
<center><h3>Software Engineering</h3></center>



<div class = "card-body">  
<a href="bootview.php" class="btn btn-info float-right">View Previous Attendance</a>
<a href="add.php"class = "btn btn-success">Add New Student</a>
<input id="myInput"class = "btn" type="text" placeholder="Search Name/ID..">
<br><br>
<form method = "post">
<table class="table table-striped" id ="myTable">
<thead class="thead-dark">
    <tr class = "text-center">
      <th>Name</th>
      <th>Student Id</th>
      <th>Status</th>
    </tr>
    </thead>

  <?php 
   $query = "select * from student";
   $result = $link->query($query);
   while($show=$result->fetch_assoc()){
 
  ?>
  <tr class = "text-center">
    <td><?php echo $show['std_name'];?></td>
    <td><?php echo $show['id'];?></td>
    <td>
      Present<input required type="radio" name="attend[<?php echo $show['std_id'];?>]" value="Present" checked>
     
     Absent<input required type="radio" name="attend[<?php echo $show['std_id'];?>]" value="Absent">
   
</td>
</tr>
   <?php } ?>
   <?php
    if($_SERVER['REQUEST_METHOD']=='POST'){
      $att=$_POST['attend'];
      $date = date('d-m-y');

     $query = "select distinct date from attend";
     $result=$link->query($query);
     $b=false;
     if($result->num_rows>0){
     while($check=$result->fetch_assoc()){
       if($date==$check['date']){
        
       
       $b=true;

       echo "<div class='alert alert-danger'>

       Attendance already taken today!!!;
       </div>";
       
    
    }
    }
  }

    if(!$b){
     

      foreach($att as $key => $value){
        if($value=="Present"){
          $query="insert into attend(value,std_id,date) values('Present',$key,'$date')";
          $insertResult=$link->query($query);
        }
        else{
          $query="insert into attend(value,std_id,date) values('Absent',$key,'$date')";
          $insertResult=$link->query($query);


        
        }
 

      }
      if($insertResult){
        echo "<div class='alert alert-success'>

        Attendance taken successfully!!!;
        </div>";

    
  }
}

}
    



?>
</table>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
</div> 
<br>
<div class="buttons">
<input type="submit"class="btn btn-primary"value="Submit">
</div>
</form>

   
<?php include "footer.php"; ?>