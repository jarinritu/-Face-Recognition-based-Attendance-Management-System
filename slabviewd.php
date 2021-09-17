<?php 
include "header.php";
include_once("attend.php");?>

<br>
<center><h3>Software Engineering Lab</h3></center>

<a href="bootatten.php" class="btn btn-info float-right">Take Attendance</a>
<a href="bootview.php"class = "btn btn-success">Back</a>
<input type="button" onclick="generate()" value="Export To PDF" />  

<div class="card-body">
				
				<form action="" method="post">
					<table id="simple_table" class="table table-striped">
                    <thead class="thead-dark">
                        <tr class = "text-center">     
                        <th width="35%">Name</th>
                        <th width="35%">Student Id</th>
                        <th width="35%">Status</th>
                        </tr>
                    </thead>
          <?php
    
          if($_GET['date']){
           $date = $_GET['date']; 

           $query="SELECT student.*,soft.* 
           FROM soft 
           inner join student on soft.std_id = student.std_id and soft.date = '$date' ";
           $result=$link->query($query);
           if($result->num_rows>0){
       
        while($val=$result->fetch_assoc()){
           
 

    ?>

    <tr class = "text-center">
        
        <td><?php echo $val['std_name']; ?></td>
        <td><?php echo $val['id']; ?></td>
        <td><?php echo $val['value']; ?></td>

    </tr>
        <?php } } }?>
        
					</table>
				</form>
			</div>
		</div>
	</div>

 <script>
 function generate() {  
    var doc = new jsPDF('p', 'pt', 'letter');  
    var htmlstring = '';  
    var tempVarToCheckPageHeight = 0;  
    var pageHeight = 0;  
    pageHeight = doc.internal.pageSize.height;  
    specialElementHandlers = {  
        // element with id of "bypass" - jQuery style selector  
        '#bypassme': function(element, renderer) {  
            // true = "handled elsewhere, bypass text extraction"  
            return true  
        }  
    };  
    margins = {  
        top: 150,  
        bottom: 60,  
        left: 40,  
        right: 40,  
        width: 600  
    };  
    var y = 20;  
    doc.setLineWidth(2);  
    doc.text(200, y = y + 30, "ATTENDANCE LIST");  
    doc.autoTable({  
        html: '#simple_table',  
        startY: 70,  
        theme: 'grid',  
        columnStyles: {  
            0: {  
                cellWidth: 180,  
            },  
            1: {  
                cellWidth: 180,  
            },  
            2: {  
                cellWidth: 180,  
            }  
        },  
        styles: {  
            minCellHeight: 40  
        }  
    })  
    doc.save('Attendance.pdf');  
}  
 </script>

    <?php include("footer.php"); ?>