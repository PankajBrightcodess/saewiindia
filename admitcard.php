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
  // 
 
 }
 // echo '<pre>';
 //  print_r($data);die;
require('fpdf/fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();
$image1 = "images/logo.jpeg";

// $row=file('toys.txt');
$pdf->Rect(5, 5, 200, 287, 'S'); //For A4
$pdf->SetFont('Arial','B',15);
$pdf->Cell(180,10,'ADMIT CARD',0,1,'C');
$pdf->SetTextColor(0,0,0);
$pdf->SetFont('Arial','',10);
$pdf->Cell(0,10,$pdf->Image($image1, $pdf->GetX(), $pdf->GetY()-8, 15.78),0,1,'R', false );
$pdf->Cell(180,5,'Admit Card for the written examination',0,1,'C');
$pdf->Cell(90,10,' ',0,1,'C');

$pdf->SetFont('Helvetica','B',10);
$pdf->Cell(90,8,'Examine Name ',1,0,'L');
$pdf->SetFont('Arial','',10);
$pdf->Cell(90,8,$data['firstname'].' '.$data['middlename'].' '.$data['lastname'],1,1,'L');
$pdf->SetFont('Helvetica','B',10);
$pdf->Cell(90,8,'Roll No. ',1,0,'L');
$pdf->SetFont('Helvetica','',10);
$pdf->Cell(90,8,'ROLL-'.$data['id'],1,1,'L');
$pdf->SetFont('Helvetica','B',10);
$pdf->Cell(90,8,'Date.',1,0,'L');
$pdf->SetFont('Helvetica','',10);
$pdf->Cell(90,8,' 12/12/2021',1,1,'L');
$pdf->SetFont('Helvetica','B',10);
$pdf->Cell(180,20,'Name and address of the exam center :        Ranchi Collage',1,1,'L');
$pdf->Cell(90,20,'Date :12/12/2021',1,0,'L');
$pdf->Cell(90,20,'Chairman :',1,1,'L');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(180,10,'Instruction',0,1,'C');
$pdf->SetFont('Arial','',10);
$pdf->Cell(180,10,'1. As a precaution for COVID-19,the candidate must reach centre as indicated against Reporting/Entry time at centre.',0,1,'L');
$pdf->Cell(180,10,'2. No candidate shall be permitted to enterafter theGate Closing Time.
',0,1,'L');
$pdf->Cell(180,10,'3. No candidate shall be permitted to leave the Examination Room/ Hall before theend of theexamination.
',0,1,'L');
$pdf->Cell(180,10,'4. On completion ofthe examination, pleasewait for instructions from Invigilator and do notget up from yourseat until advised.
',0,1,'L');
$pdf->Cell(180,10,'5. No Candidate would be allowed to enter the Examination Centre, without Admit Card, Valid IDProof and proper frisking.
',0,1,'L');
$pdf->Cell(180,10,'6. Candidates are advised to carry only the following items with them into the examination venue.
',0,1,'L');
$pdf->Cell(180,10,'Admit Card along with Self Declaration(Undertaking) downloaded from the NTAwebsite(a clear printout on A4 size paper).
',0,1,'L');
$pdf->Cell(180,10,'A simple transparent Ball Point Pen.',0,1,'L');
$pdf->Cell(180,10,'Additional photograph,to be pasted on attendance sheet',0,1,'L');
$pdf->Cell(180,10,'Personal hand sanitizer(50ml)',0,1,'L');


// $pdf->Cell(40,10,'',0,1,'C');

// $pdf->SetTextColor(0,0,0);
// // $pdf->Cell(180,10,'CERTIFICATE',0,1,'C');
// $pdf->Cell(180,30,'',0,1,'C');
// $pdf->SetTextColor(0,0,0);
// $pdf->SetFont('Helvetica','B',10);
// $pdf->Cell(180,10,'THIS CERTIFIES THAT',0,1,'C');
// $pdf->SetFont('Arial','B',20);
// $pdf->SetTextColor(0,0,0);
// $pdf->Cell(180,10,'RAJESH SINGH',0,1,'C');
// $pdf->SetFont('Helvetica','B',10);
// $pdf->SetTextColor(0,0,0);
// $pdf->Cell(180,10,'has successfully completed.',0,1,'C');
// $pdf->Cell(180,10,'June 4, 2021 ',0,1,'C');
// $pdf->Cell(180,30,'',0,1,'C');


// $pdf->Cell(60,5,'----------------------',0,0,'C');
// $pdf->Cell(60,5,$pdf->Image($image1, $pdf->GetX()+18, $pdf->GetY()-15, 20.78),0,0,'C');
// $pdf->Cell(60,5,'---------------------',0,1,'C');

// $pdf->Cell(60,5,'Principal',0,0,'C');
// $pdf->Cell(60,5,'',0,0,'C');
// $pdf->Cell(60,5,'Superintendent',0,1,'C');











// $pdf->Cell(0,10,'Payment Receipt',0,1,'L');
// $pdf->Cell(90,12,'Hello',0,1,'C');	

$pdf->Output();
?>




Array
(
    [id] => 4
    [order_no] => RHHIFPFX68307951XUOw
    [firstname] => Ajay
    [middlename] => singh
    [lastname] => Singh
    [fathername] => sanjay singh
    [mothername] => neha singh
    [dob] => 2021-06-29
    [occupation] => abcd
    [address1] => ranchi
    [address2] => 
    [address3] => 
    [town] => ranchi
    [state] => ranchi
    [pincode] => 85964
    [contactno] => 7894562587
    [email] => adb@gmail.com
    [amount] => 200
    [photo] => 
    [payment_id] => pay_HhrcBOXMbsKILC
    [payment_details] => {"razorpay_payment_id":"pay_HhrcBOXMbsKILC","merch
    [payment_status] => 1
    [added_on] => 2021-08-06 15:01:28
    [status] => 1
)