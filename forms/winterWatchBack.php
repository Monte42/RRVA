<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';


$cluster = $_POST['cluster'];
$unit = $_POST['unit'];
$months = '';
if(isset($_POST['nov'])){
  $months .= 'November ';
};
if(isset($_POST['dec'])){
  $months .= ' December ';
};
if(isset($_POST['jan'])){
  $months .= ' January ';
};
if(isset($_POST['feb'])){
  $months .= ' February ';
};
if(isset($_POST['mar'])){
  $months .= ' March ';
};
$temp = $_POST['temp'];
if(isset($_POST['tape']) && $_POST['tape']=='tape-yes'){
  $tape = 'Yes';
} else {
  $tape = 'No';
};
if(isset($_POST['water']) && $_POST['water']=='water-yes'){
  $water = 'Yes';
} else {
  $water = 'No';
};
if(isset($_POST['waterHeater']) && $_POST['waterHeater']=='waterHeater-yes'){
  $waterHeater = 'Yes';
} else {
  $waterHeater = 'No';
};
$valve = $_POST['valve'];
$name = $_POST['name'];
if(isset($_POST['agree'])){
  $agree = 'I have read and agree with the terms and policies.';
};
if(isset($_POST['check'])){
  $check = 'Check will be mailed.';
};



require('fpdf/fpdf.php');
// New object created and constructor invoked
$pdf = new FPDF();
// Add new pages. By default no pages available.
$pdf->AddPage();
//$pdf->SetFont('font', 'style', size);
$pdf->SetFont('Times', 'B', 20);
// $pdf->Cell(size-x, size-y, 'Content', border, empty lines below, 'Center/Align');
$pdf->Cell(100, 5, 'RR Village Association, Inc.', 0, 0, 'C');
$pdf->SetFont('times', 'u', 10);
$pdf->Cell(35, 5, 'rrva@catskills.net', 0, 0, 'A');
$pdf->Cell(35, 5, 'www.roxburyrunvillage.com', 0, 0, 'A');
// Set it new line
$pdf->Ln();
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(190, 5,'P.O. Box 115 130 Mountainside Circle Roxbury Run Village Denver Ny 12421 Phone: 607 326-7677 Fax: 607 326-2927',0, 3, 'C');
$pdf->Ln();
$pdf->Line(5, 20, 250-45, 20);
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(190, 5,'I hereby request RRVA, Inc. through the maintenance staff, to do the "Winter House Watch"',0, 0, 'A');
$pdf->Ln();
$pdf->Cell(190, 5,' service in cluster: '.$cluster.' for unit: '.$unit.' for the months of:',0, 2, 'A');
$pdf->Ln();
$pdf->SetFont('Arial', 'U', 10);
$pdf->Cell(190, 5, $months ,0, 1, 'C');
$pdf->Ln();
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(190, 5, 'for which I will be charged $40.00 per month, payable in advance.',0, 3, 'A');
$pdf->Ln();
$pdf->Cell(190, 5, 'It is my understanding this service will be provided under the following conditions only:',0, 2, 'A');
$pdf->Ln();
$pdf->Cell(190, 5, '* Weekdays only, dependent upon outside temperatur and/or weather conditions.',0, 0, 'A');
$pdf->Ln();
$pdf->Cell(190, 5, '* As outside temperaturs warrant, my heat will be adjusted upwards and downwards as necessary',0, 0, 'A');
$pdf->Ln();
$pdf->Cell(190, 5, '* Should emergency services be required, i.e. defrosting and/or repairs of frozen pipes, ect. Such',0, 0, 'A');
$pdf->Ln();
$pdf->Cell(190, 5, '   service will billed to my accout at $50.00 per hour plus materials. Emergency service is done',0, 0, 'A');
$pdf->Ln();
$pdf->Cell(190, 5, '   on as time allows basis. You will be notified if you should call a plumber',0, 0, 'A');
$pdf->Ln();
$pdf->Cell(190, 5, '* This service does not include the checking of sewer lines',0, 0, 'A');
$pdf->Ln();
$pdf->Cell(190, 5, '* Neither the Association nor its employees are liable for any damage or consequential damage to my',0, 0, 'A');
$pdf->Ln();
$pdf->Cell(190, 5, '   property caused by the elementsand/or incuured during the preformance of said services,',0, 0, 'A');
$pdf->Ln();
$pdf->Cell(190, 5, '   including any utility costs.',0, 2, 'A');
$pdf->Ln();
$pdf->Cell(48, 5,$name,0, 0, 'A');
$pdf->Cell(100, 5,$agree,0, 0, 'A');
$pdf->Cell(42, 5,$check,0, 0, 'A');
$pdf->Ln();
$pdf->Ln();
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(190, 5,'Winter house watch is not available until payment and the submission of this form.',0, 0, 'A');
$pdf->Ln();
$pdf->Cell(190, 5,'Payment will be do at the office no later than 10 day prior to the beginning of the month.',0, 8, 'A');
$pdf->Ln();
$pdf->Ln();
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(190, 5,'Please Fill Out For Winter House Watch',0, 2, 'A');
$pdf->Ln();
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(110, 5,'When not occipied, what is the thermostat setting?',0, 0, 'A');
$pdf->Cell(80, 5,$temp.' degrees',0, 0, 'C');
$pdf->Ln();
$pdf->Ln();
$pdf->Cell(110, 5,'Do you have heat tape on water lines in',0, 0, 'A');
$pdf->Ln();
$pdf->Cell(110, 5,'unheated areas such as the basement or crawl space?',0, 0, 'A');
$pdf->Cell(80, 5,$tape,0, 0, 'C');
$pdf->Ln();
$pdf->Ln();
$pdf->Cell(110, 5,'Do you turn your water off?',0, 0, 'A');
$pdf->Cell(80, 5,$water,0, 0, 'C');
$pdf->Ln();
$pdf->Ln();
$pdf->Cell(110, 5,'Where is your water valve located?',0, 0, 'A');
$pdf->Cell(80, 5,$valve,0, 0, 'C');
$pdf->Ln();
$pdf->Ln();
$pdf->SetFont('Arial', 'U', 10);
$pdf->Cell(190, 5,'Faucets are tested for "running water" each day your house is checked.',0, 0, 'A');
$pdf->Ln();
$pdf->Ln();
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(110, 5,'Do you turn your water heater off?',0, 0, 'A');
$pdf->Cell(80, 5,$waterHeater,0, 0, 'C');
$pdf->Ln();
$pdf->Ln();
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(190, 5,'The Association suggests that when ever possible, turn your water off. Dripping ',0, 0, 'A');
$pdf->Ln();
$pdf->Cell(190, 5,'water (toilet running and/or slightest drip) can cause your sewer line to freeze. ',0, 0, 'A');
$pdf->Ln();
$pdf->Cell(190, 5,'If this happens, you can have a back up water while flushing your toilet, running ',0, 0, 'A');
$pdf->Ln();
$pdf->Cell(190, 5,'your water, ect.',0, 2, 'C');
$pdf->Ln();
$pdf->SetFont('Arial', 'I', 10);
$pdf->Cell(190, 5,'If you call the office by Friday morning of the weekend you are arriving the',0, 0, 'A');
$pdf->Ln();
$pdf->Cell(190, 5,'Association will turn you heat up and turn your outside light on. When Leaving a ',0, 0, 'A');
$pdf->Ln();
$pdf->Cell(190, 5,'message please indicate you name, cluster, unit number, and the temperaturs in ',0, 0, 'A');
$pdf->Ln();
$pdf->Cell(190, 5,'which rooms you want the heat set. If no temperatur is specified the Association ',0, 0, 'A');
$pdf->Ln();
$pdf->Cell(190, 5,'will set the living room thermostat to 70 degrees.',0, 3, 'A');

$pdf->Ln();
$pdf->Ln();

// out source pdf
// $pdf->Output();
$epdf = $pdf->Output("",'S');

// Send PDF
sendEmail($epdf,$name);

function sendEmail($ppdf,$pname)
{
  $mail = new PHPMailer(true);

  try {
    

      $mail->send();
      header('Location:thanks.php?name='.$pname);
  } catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }
}


?>
