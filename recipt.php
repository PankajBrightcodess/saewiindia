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
 if($_GET['id']){
  $id=$_GET['id'];
    $query="SELECT * FROM `sa_registration` WHERE `id`='$id'";
  $run=mysqli_query($conn,$query);
  $data=mysqli_fetch_assoc($run);
  // echo '<pre>';
  // print_r($data);die;
    // while(){
    //   $events=$data;
    //   // print_r($events);
    // }
    // die;
 }
require('fpdf/fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();
// $row=file('toys.txt');
$pdf->SetFont('Arial','B',15);
$pdf->Cell(180,10,'Payment Receipt',1,1,'C');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(40,5,'Date',1,0,'C');
$pdf->SetFont('Arial','',10);
$pdf->Cell(50,5,date('d-m-y', strtotime($data['added_on'])),1,0,'C');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(40,5,'Recipt No:',1,0,'C');
$pdf->SetFont('Arial','',10);
$pdf->Cell(50,5,$data['payment_id'],1,1,'C');
$pdf->Cell(180,5,'',1,1,'C');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(100,5,'Amount :',1,0,'L');
$pdf->SetFont('Arial','',10);
$pdf->Cell(80,5,$data['amount'].'/-',1,1,'L');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(180,5,'',1,1,'L');
$pdf->Cell(90,5,'Account Details',1,0,'C');
$pdf->Cell(90,5,'Payment Mode',1,1,'C');
$pdf->SetFont('Arial','',10);
$pdf->Cell(90,5,'Total Due Amount :                               '.$data['amount'].'/-',1,0,'L');
$pdf->SetFont('Arial','',10);
$pdf->Cell(45,5,'Cash',1,0,'C');
$pdf->Cell(45,5,'Online',1,1,'C');
$pdf->SetFont('Arial','',10);
$pdf->Cell(90,5,'Total Amount Paid :                              '.$data['amount'].'/-',1,0,'L');
$pdf->SetFont('Arial','',10);
$pdf->Cell(45,5,'Check No.:',1,0,'C');
$pdf->Cell(45,5,'-',1,1,'C');
$pdf->Cell(45,5,'Balance Due',1,0,'L');
$pdf->Cell(45,5,'0/-',1,0,'C');
$pdf->Cell(45,5,'Status :',1,0,'C');
$pdf->Cell(45,5,'Successful',1,1,'C');
$pdf->Cell(90,5,'',1,0,'L');
$pdf->Cell(90,5,'',1,1,'L');
$pdf->Cell(90,5,'',1,0,'L');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(90,5,'Recived By',1,1,'L');	

$pdf->Output();
?>
