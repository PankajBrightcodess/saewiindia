<?php
session_start();
include('database.php');
$msg="";
  if (isset($_SESSION['msg'])) {
      $msg = $_SESSION['msg'];
      unset($_SESSION['msg']);
  }
  if ($msg != "") {
      echo "<script> alert('$msg')</script>";
  }
 if($_POST['id']){
  $id=$_POST['id'];
    $query="SELECT `firstname`,`middlename`,`lastname` FROM `sa_registration` WHERE `id`='$id'";
  $run=mysqli_query($conn,$query);
  $data=mysqli_fetch_assoc($run);
 
 }
 // echo '<pre>';
 // print_r($data);die;
require('fpdf/fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();
$image1 = "images/logo.jpeg";

// $row=file('toys.txt');
$pdf->SetFont('Arial','B',20);

$pdf->Rect(5, 5, 200, 287, 'S'); //For A4
$pdf->Cell(180,20,'',0,1,'C');
$pdf->Cell(40,5,'',0,0,'C');
// $pdf->Cell(100,10,$pdf->Image($image1, $pdf->GetX(), $pdf->GetY(), 20.78),0,1,'R', false );
$pdf->Cell(40,10,'',0,1,'C');

$pdf->SetTextColor(194,8,8);
$pdf->Cell(180,10,'CERTIFICATE',0,1,'C');
$pdf->Cell(180,30,'',0,1,'C');
$pdf->SetTextColor(153,0,153);
$pdf->SetFont('Helvetica','B',10);
$pdf->Cell(180,10,'THIS CERTIFIES THAT',0,1,'C');
$pdf->SetFont('Arial','B',20);
$pdf->SetTextColor(0, 87, 92);
$pdf->Cell(180,10,$data['firstname'].' '.$data['middlename'].' '.$data['lastname'],0,1,'C');
$pdf->SetFont('Helvetica','B',10);
$pdf->SetTextColor(153,0,153);
$pdf->Cell(180,10,'has successfully completed.',0,1,'C');
$pdf->Cell(180,10,'June 4, 2021 ',0,1,'C');
$pdf->Cell(180,30,'',0,1,'C');


$pdf->Cell(60,5,'----------------------',0,0,'C');
$pdf->Cell(60,5,$pdf->Image($image1, $pdf->GetX()+18, $pdf->GetY()-15, 20.78),0,0,'C');
$pdf->Cell(60,5,'---------------------',0,1,'C');

$pdf->Cell(60,5,'Principal',0,0,'C');
$pdf->Cell(60,5,'',0,0,'C');
$pdf->Cell(60,5,'Superintendent',0,1,'C');











// $pdf->Cell(0,10,'Payment Receipt',0,1,'L');
// $pdf->Cell(90,12,'Hello',0,1,'C');	

$pdf->Output();
?>