<?php 
include "header.php";
include_once("attend.php");
include('pdf/fpdf.php');

class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    $this->Image('https://i2.wp.com/tutorialswebsite.com/wp-content/uploads/2016/01/cropped-LOGO-1.png',10,10,50);
    $this->SetFont('Arial','B',13);
    // Move to the right
    $this->Cell(80);
    // Title
    $this->Cell(80,10,'Attendance Sheet',1,0,'C');
    // Line break
    $this->Ln(20);
}
 
// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}
$display_heading = array('user_id'=>'ID', 'name'=> 'Name', 'email'=> 'Email','department'=> 'Department','role'=> 'Role');
if($_GET['date']){
    $date = $_GET['date']; 

    $query="SELECT student.*,attend.* 
    FROM attend 
    inner join student on attend.std_id = student.std_id and attend.date = '$date' ";
    $result=$link->query($query);
//$result = mysqli_query($conn, "SELECT user_id, name, email, department, role FROM attend") or die("database error:". mysqli_error($conn));
$header = mysqli_query($conn, "SHOW columns FROM attend inner join student  on attend.std_id = student.std_id and attend.date = '$date' WHERE field != 'created_on'");
 
$pdf = new PDF();
//header
$pdf->AddPage();
//foter page
$pdf->AliasNbPages();
$pdf->SetFont('Arial','B',16);
foreach($header as $heading) {
$pdf->Cell(35,10,$display_heading[$heading['Field']],1);
}
foreach($result as $row) {
$pdf->SetFont('Arial','',10);
$pdf->Ln();
foreach($row as $column)
$pdf->Cell(35,10,$column,1);
}
$pdf->Output();
?>