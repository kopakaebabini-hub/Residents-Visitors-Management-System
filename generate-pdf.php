<?php
//include connection file 
session_start();
include('includes/dbconnection.php');
include_once('pdf/fpdf.php');


 
class PDF extends FPDF
{



   

                                             
// Page header
function Header()
{

                                     
                                                                             

    // Logo
   $this->Image('nwu.png',10,10,50);
    $this->SetFont('Arial','B',13);

    // Move to the right
    $this->Cell(70);
    // Title
    $this->Cell(150,10,'NWU Mafikeng Campus Resident Visitor List',1,0,'C');
   // $this->Cell(80,10,"issue Date: ".date("Y/m/d"),1,0,'C');

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
     $this->Cell(80,10,"issue Date: ".date("Y/m/d"),1,0,'C');
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
   
}



}






 
$display_heading = array('ID'=>'No.', 'FullName'=> 'Full Name', 'Student_num'=> 'Student No.','Block'=> 'Block No.','Room'=> 'Room','WhomtoMeet'=> 'Visited','EnterDate'=> 'Entry Time','remark'=> 'Comments','outtime'=> 'Exit Time','Res'=> 'Resident Visited');
 
$result = mysqli_query($con, "SELECT ID, FullName, Student_num, Block, Room, WhomtoMeet, EnterDate, remark, outtime, Res FROM tblvisitor") or die("database error:". mysqli_error($con));
$header = mysqli_query($con, "SHOW columns FROM tblvisitor WHERE field != 'created_on'");
 
$pdf = new PDF();
//header
$pdf->addPage("L");
//foter page
$pdf->AliasNbPages();
$pdf->SetFont('Arial','B',8);
foreach($header as $heading) {
$pdf->Cell(28.5,10,$display_heading[$heading['Field']],100);
}
foreach($result as $row) {
$pdf->SetFont('Arial','',8);
$pdf->Ln();
foreach($row as $column)
$pdf->Cell(28.5,10,$column,1);
}
$pdf->Output()
?>