<?php
// set up PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// require composer and phpmailer
require 'vendor/autoload.php';

// Collect data to Variables
$name = $_POST['name'];
$cluster = $_POST['cluster'];
$unit = $_POST['unit'];
$address = $_POST['address'];
$desc = $_POST['desc'];
$phone = $_POST['phone'];
$date = date("m/d/Y");

if(!empty($_POST['email']))
{
  $email = $_POST['email'];
} else {
  $email = '';

}

if(!empty($_POST['fax']))
{
  $fax = $_POST['fax'];
} else {
  $fax = '';

}

if(!empty($_POST['windows']))
{
  $window = $_POST['windows'];
} else {
  $window = '';
}

if(!empty($_POST['skylights']))
{
  $skylights = $_POST['skylights'];
} else {
  $skylights = '';

}

if(!empty($_POST['storm-doors']))
{
  $stormDoors = $_POST['storm-doors'];
} else {
  $stormDoors = '';

}

if(!empty($_POST['front-door']))
{
  $frontDoor = $_POST['front-door'];
} else {
  $frontDoor = '';
}

if(!empty($_POST['slide-door']))
{
  $slideDoor = $_POST['slide-door'];
} else {
  $slideDoor = '';
}

if(!empty($_POST['slide-size']))
{
  $slideSize = $_POST['slide-size'];
} else {
  $slideSize = '';
}

if(!empty($_POST['found-vent']))
{
  $foundVent = $_POST['found-vent'];
} else {
  $foundVent = '';
}

if(!empty($_POST['f-d-height']))
{
  $foundDoorHeight = $_POST['f-d-height'];
} else {
  $foundDoorHeight = '';
}

if(!empty($_POST['f-d-width']))
{
  $foundDoorWidth = $_POST['f-d-width'];
} else {
  $foundDoorWidth = '';
}

if(!empty($_POST['dryer-vent']))
{
  $dryerVent = $_POST['dryer-vent'];
} else {
  $dryerVent = '';
}

if(!empty($_POST['awning']))
{
  $awning = $_POST['awning'];
} else {
  $awning = '';
}

if(!empty($_POST['awning-type']))
{
  $awningType = $_POST['awning-type'];
} else {
  $awningType = '';
}

if(!empty($_POST['handrails']))
{
  $handrails = $_POST['handrails'];
} else {
  $handrails = '';
}



// requre fpdf
require('fpdf/fpdf.php');

// Build PDF
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
$pdf->Cell(190, 5,'P.O. Box 115 130 Mountainside Circle Roxbury Run Village Denver Ny 12421 Phone: 607 326-7677 Fax: 607 326-2927',0, 3, 'C');
$pdf->Ln();
$pdf->Line(5, 20, 250-45, 20);
$pdf->Ln();
$pdf->SetFont('Arial', '', 11);
$pdf->Cell(190, 5,'As explained in our Governing Documents, exterior improvements or modification require approval by our ',0, 0, 'A');
$pdf->Ln();
$pdf->Cell(190, 5,'Architectural Control Committee and a permit is required. This form is for applying for such approval.',0, 0, 'A');
$pdf->Ln();
$pdf->Ln();
$pdf->Cell(190, 5,'Please describe all changes you propose to make to make to you townhouse exterior. Include a drawing(s)',0, 0, 'A');
$pdf->Ln();
$pdf->Cell(190, 5,'with top (plan) and side (elevation) necessary to cleary establish locatins and elevation of any',0, 0, 'A');
$pdf->Ln();
$pdf->Cell(190, 5,'structures or additions. Include dimensions and materials. Your drawings should include existing structures',0, 0, 'A');
$pdf->Ln();
$pdf->Cell(190, 5,'and boundaries where necessary to indicate relative location. To avoid delay of committee action, please',0, 0, 'A');
$pdf->Ln();
$pdf->Cell(190, 5,'include all the information the committee will need to make its decision. Please mail, email, fax, or drop',0, 0, 'A');
$pdf->Ln();
$pdf->Cell(190, 5,'off and additional pages of information needed.',0, 0, 'A');
$pdf->Ln();
$pdf->Ln();
$pdf->Cell(190, 5,'*Rquest for replacement windows, front door, storm/screen doors, skylights, awning, ect., please see attached',0, 0, 'A');
$pdf->Ln();
$pdf->Cell(190, 5,'specification sheet for approved models/styles and requirements.',0, 0, 'A');
$pdf->Ln();
$pdf->Ln();
$pdf->Cell(190, 5,'Once submitting this form please send or drop off any additional pages of information to RRVA Inc. Barring',0, 0, 'A');
$pdf->Ln();
$pdf->Cell(190, 5,'any unusual requests, a permit will be issued. All other requests will be directed to the Architectural',0, 0, 'A');
$pdf->Ln();
$pdf->Cell(190, 5,'Control Committee and the Board of Directors. As per our governing documents, you will be notified of the',0, 0, 'A');
$pdf->Ln();
$pdf->Cell(190, 5,'decision within 75 Days.',0, 0, 'A');
$pdf->Ln();
$pdf->Ln();
$pdf->Cell(190, 5,'***** IT YOUR OBLIGATION TO VERIFY THAT YOUR CONTRACTOR CARRIES THE NECESSARY',0, 0, 'A');
$pdf->Ln();
$pdf->Cell(190, 5,'INSURANCE FOR ANY WORK DONE ON YOUR BEHALF. YOUR CONTRACTOR MUST NAME RR Village',0, 0, 'A');
$pdf->Ln();
$pdf->Cell(190, 5,'Association, Inc AS AND ADDITIONAL INSURED ON THE LIABILITY COVERAGE AND SUPPLY',0, 0, 'A');
$pdf->Ln();
$pdf->Cell(190, 5,'THE OFFICE WITH A COPY OF THE INSURANCE CERTIFICATE BEFORE ANY WORK.', 0, 3, 'A');
$pdf->Ln();
$pdf->Cell(40, 5,'Date: '.$date, 0, 0, 'A');
$pdf->Cell(45, 5,'Owner: '.$name, 0, 0, 'A');
$pdf->Cell(17, 5,'Cluster: '.$cluster, 0, 0, 'A');
$pdf->Cell(20, 5,'Unit: '.$unit, 0, 0, 'A');
$pdf->Cell(75, 5,'Email: '.$email, 0, 0, 'A');
$pdf->Ln();
$pdf->Cell(105, 5,'Mailling Addres: '.$address, 0, 0, 'A');
$pdf->Cell(45, 5,'Phone# '.$phone, 0, 0, 'A');
$pdf->Cell(45, 5,'Fax# '.$fax, 0, 3, 'A');
$pdf->Ln();
$pdf->MultiCell(190, 5,'Job Description: '.$desc, 3);
$pdf->Ln();
$pdf->Cell(190, 5,'For Security Deposit Purpose Only', 0, 0, 'A');
$pdf->Ln();
$pdf->Cell(95, 5,'*Windows ~ how many: '. $window, 0, 0, 'A');
$pdf->Cell(95, 5,'Foundation Vents 8"x16" ~ how many: '. $foundVent, 0, 0, 'A');
$pdf->Ln();
$pdf->Cell(95, 5,'*Skylights ~ how many: '. $skylights, 0, 0, 'A');
$pdf->Cell(95, 5,'Foundation Door-Indicate Size H: '. $foundDoorHeight . ' W: ' . $foundDoorWidth, 0, 0, 'A');
$pdf->Ln();
$pdf->Cell(95, 5,'*Storm/Screen Doors: '. $stormDoors, 0, 0, 'A');
$pdf->Cell(95, 5,'Foundation Dryer Vent 4": '. $dryerVent, 0, 0, 'A');
$pdf->Ln();
$pdf->Cell(95, 5,'*From Door: '. $frontDoor, 0, 0, 'A');
$pdf->Cell(95, 5,'Awning~Size: '. $awning . 'Type: ' . $awningType, 0, 0, 'A');
$pdf->Ln();
$pdf->Cell(95, 5,'*Sliding Door ~ how many: '. $slideDoor . ' Size: '. $slideSize, 0, 0, 'A');
$pdf->Cell(95, 5,'Handrails ~ how many: '. $handrails, 0, 0, 'A');
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Line(5, 225, 250-45, 225);
$pdf->Cell(190, 5,'For Office Use Only', 0, 3, 'C');
$pdf->Ln();
$pdf->SetFont('Arial', '', 12);
$pdf->Cell(49, 5,'Permit Date:__________', 0, 0, 'A');
$pdf->Cell(56, 5,'Expiration Date:__________', 0, 0, 'A');
$pdf->Cell(46, 5,'Contractor:__________', 0, 0, 'A');
$pdf->Cell(44, 5,'Deposit $:__________', 0, 0, 'A');
$pdf->Ln();
$pdf->Ln();
$pdf->Cell(61, 5,'HO to RRVA Date:__________', 0, 0, 'A');
$pdf->Cell(42, 5,'INSUR:__________', 0, 0, 'A');
$pdf->Cell(63, 5,'RRVA Approved: Yes______', 0, 0, 'A');
$pdf->Cell(23, 5,'No______', 0, 0, 'A');
$pdf->Ln();
$pdf->Ln();
$pdf->Cell(182, 5,'Date:__________', 0, 0, 'R');

// out source pdf
// $pdf->Output();
$epdf = $pdf->Output("",'S');

// Send PDF
sendEmail($epdf,$name);

function sendEmail($ppdf,$pname)
{
  $mail = new PHPMailer(true);

  try {
      //Server settings
      ####

      $mail->send();
      header('Location:thanks.php?name='.$pname);
  } catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }
}
 ?>
