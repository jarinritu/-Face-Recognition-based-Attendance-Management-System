<?php 
include "header.php";
include_once("attend.php");?>
<center><h3>Software Engineering</h3></center>


<div class="card-body">

<br><br>
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
    

    $query="select distinct date from attend";
    $result=$link->query($query);

    if($result->num_rows>0){
        $i=0;
        while($val=$result->fetch_assoc()){
            $i++;
  

    ?>

    <tr class = "text-center">
        <td><?php echo $i; ?></td>
        <td><?php echo $val['date']; ?></td>
        <td><a href="bviewdate.php?date=<?php echo $val['date'] ?>"class="btn btn-warning">View</a>
        
        </td>



    </tr>
        <?php } } ?>
        </table>
        </div>

        <?php include "footer.php"; ?>