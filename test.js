<?php 
include "header.php";
include_once("attend.php");?>

<br>



<a href="bootview.php" class="btn btn-info float-right">View Previous Attendance</a>
<a href="add.php"class = "btn btn-success">Add New Student</a>
 <div class = "card-body">  
<form method = "post">
<table class="table table-striped">
<thead class="thead-dark">
    <tr class = "text-center">
      <th width="25%">Name</th>
      <th width="25%">Student Id</th>
      <th width="25%">Status</th>
    </tr>
    </thead>

  <?php 
   $query = "select * from student";
   $result = $link->query($query);
   while($show=$result->fetch_assoc()){
 
  ?>
  $("button").click(function(){
  $("button").removeClass("active");
  $(this).addClass("active");
});
.active {
  background-color: green !important;
}
  <tr class = "text-center">
    <td><?php echo $show['std_name'];?></td>
    <td><?php echo $show['id'];?></td>
    <td>
    <button type="button" id="btnOUs" class="btn btn-primary" ng-click="levelOU()">Organization Unitss </button>
      Present<input required type="radio" name="attend[<?php echo $show['std_id'];?>]" value="Present">
     
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
</div> 
<br>
<div class="buttons">
<input type="submit"class="btn btn-primary"value="Submit">
</div>
</form>

   
<?php include "footer.php"; ?>