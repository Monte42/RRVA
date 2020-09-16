<?php

// set up phpmailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// require composer all;
require 'vendor/autoload.php';

// collect Variables
$cluster = $_POST['cluster'];
$unit = $_POST['unit'];
$name = $_POST['name'];
$stickers = $_POST['stickers'];

// requre fpdf
require('fpdf/fpdf.php');
// build PDF file
$pdf = new FPDF();
$pdf->AddPage();
//$pdf->SetFont('font', 'style', size);
$pdf->SetFont('Times', 'B', 20);
// $pdf->Cell(size-x, size-y, 'Content', border, empty lines below, 'Center/Align');
$pdf->Cell(100, 5, 'RR Village Association, Inc.', 0, 0, 'C');
$pdf->SetFont('times', 'u', 10);
$pdf->Cell(35, 5, 'rrva@catskills.net', 0, 0, 'A');
$pdf->Cell(35, 5, 'www.roxburyrunvillage.com', 0, 0, 'A');
$pdf->Ln();
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(190, 5,'P.O. Box 115 130 Mountainside Circle Roxbury Run Village
Denver Ny 12421 Phone: 607 326-7677 Fax: 607 326-2927',0, 3, 'C');
$pdf->Ln();
$pdf->Line(5, 20, 250-45, 20);
$pdf->Ln();
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(190, 5, 'Parking Sticker Application', 0, 2, 'C');
$pdf->Ln();
$pdf->SetFont('Arial', '', 11);
$pdf->MultiCell(190, 5,"As we indicated at our annual meeting last fall, we are
implementing various steps to promote compliance with our rental policy. Enclosed
with/ attached to this letter is a very brief form which will permit us to issue
RRVA stickers to homeowners that should be affixed to the driver's side of the car.
We will provide a sticker for each car registered in the name of a homeowner or
a dependent that resides with them at their principal home." ,0,'C', false);
$pdf->Ln();
$pdf->MultiCell(190, 5,'In addition to providing these stickers, we will also
subscribe to a service that tracks all of the major home rental sites. This will
allow us to track rentals and enforce our rules in the event of violations of the
rental policy.',0,'C', false);
$pdf->Ln();
$pdf->Cell(190, 5,'Stickers will be available in the office.',0,2,'C');
$pdf->Ln();
$pdf->Ln();

$pdf->SetFont('Arial', '', 12);
$pdf->Cell(50, 5,'Cluster: '.$cluster, 0, 0, 'C');
$pdf->Cell(50, 5,'Unit: '.$unit, 0, 0, 'C');
$pdf->Cell(90, 5,'Owners Name: '.$name, 0, 0, 'C');
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Cell(190, 5,'Number os stickers requested: '.$stickers, 0, 0, 'C');

// out put PDF file
// $pdf->Output();
$epdf = $pdf->Output("",'S');

// Send PDF
sendEmail($epdf,$name);

function sendEmail($ppdf,$pname)
{
  $mail = new PHPMailer(true);

  try {
    ####

      $mail->send();
      header('Location:thanks.php?name='.$pname);
  } catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }
}

 ?>
