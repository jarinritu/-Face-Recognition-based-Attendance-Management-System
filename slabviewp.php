<?php 
include "header.php";
include_once("attend.php");?>

<br>
<center><h3>Software Engineering Lab</h3></center>
<a href="softlab.php" class="btn btn-info float-right">Take Attendance</a>
<a href="test.php"class = "btn btn-success">Back</a>

<div class="card-body">
<form method="post">
<table class="table table-striped">
<thead class="thead-dark">
    <tr class = "text-center">
      <th width="30%">Serial No</th>
      <th width="30%">Date</th>
      <th width="30%">View</th>
    </tr>
</thead>

    <?php
    

    $query="select distinct date from soft";
    $result=$link->query($query);

    if($result->num_rows>0){
        $i=0;
        while($val=$result->fetch_assoc()){
            $i++;
  

    ?>

    <tr class = "text-center">
        <td><?php echo $i; ?></td>
        <td><?php echo $val['date']; ?></td>
        <td><a href="slabviewd.php?date=<?php echo $val['date'] ?>"class="btn btn-warning">View</a>
        
        </td>



    </tr>
        <?php } } ?>
        </table>
        </div>

        <?php include "footer.php"; ?>