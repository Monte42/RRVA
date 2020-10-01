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
$homePhone = $_POST['home-phone'];
$mobilePhone = $_POST['mobile-phone'];
$guestName = $_POST['guest-name'];
$guestHomePhone = $_POST['guest-home-phone'];
$guestMobilePhone = $_POST['guest-mobile-phone'];
$occupants = $_POST['occupants'];
$license = $_POST['plate'];
$stringLicense = implode (", ", $license);
$rentStart = $_POST['rent-start'];
$rentEnd = $_POST['rent-end'];

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
$pdf->Cell(190, 5, 'Guest INFORMATON FORM', 0, 2, 'C');
$pdf->Ln();
$pdf->SetFont('Arial', '', 11);
$pdf->MultiCell(190, 5,'As provided by our Declarations, in the event you make
your home available for use by guests while you are not present, you are required
to inform the Association of such use. This means that if you make your home
available without charge to friends or family members who do not reside with you
in your principal home, you must provide the following information at least two
business days before your Unit is occupied by a guest(s) or family members.',0,'A', false);
$pdf->Ln();
$pdf->MultiCell(190, 5,'It is your obligation to make sure that your guests abide
by the RRVA Rules and Regulations, plus the Common Ground rules, pool and tennis
Court Rules, etc. that each resident has a copy of and are available on our
website. Please note that any and all exterior damages and/or infraction of
Association rules by your guest will be the ultimate responsibility of the
homeowner. These rules include but are not limited to:',0,'A', false);
$pdf->Ln();
$pdf->Cell(190, 5,'* No motorcycles, 4 wheelers, trailers, etc. are allowed on
RRVA property;', 0, 0, 'A');
$pdf->Ln();
$pdf->Cell(190, 5,'* No commercial vehicles are permitted on RRVA property between
the hours of 9:00 PM and 7:00 AM;', 0, 0, 'A');
$pdf->Ln();
$pdf->Cell(190, 5,'* Dogs must be on leashes and picked up after;', 0, 3, 'A');
$pdf->Ln();
$pdf->MultiCell(190, 5,'Our Declarations specifically provide that no Unit may
be used in any way or for any purpose which may endanger the health or
unreasonably disturb the Owner of any Townhouse Unit or any resident thereof.',0,'A', false);
$pdf->Ln();
$pdf->Ln();
$pdf->SetFont('Arial', '', 12);
$pdf->Cell(50, 5,'Cluster: '.$cluster, 0, 0, 'A');
$pdf->Cell(50, 5,'Unit: '.$unit, 0, 0, 'A');
$pdf->Cell(90, 5,'Owners Name: '.$name, 0, 0, 'A');
$pdf->Ln();
$pdf->Ln();
$pdf->Cell(95, 5,'Owners Home Phone: '.$homePhone, 0, 0, 'A');
$pdf->Cell(95, 5,'Owners Mobile Phone: '.$mobilePhone, 0, 0, 'A');
$pdf->Ln();
$pdf->Ln();
$pdf->MultiCell(190, 5,'We also remind everyone that while our By-Laws permit rentals for less
less than one month intervals, such rentals are limited to four per year.',0,'A', false);
$pdf->Ln();
$pdf->Cell(190, 5,'Guests Name: '.$guestName, 0, 0, 'A');
$pdf->Ln();
$pdf->Ln();
$pdf->Cell(95, 5,'Guests Home Phone: '.$guestHomePhone, 0, 0, 'A');
$pdf->Cell(95, 5,'Guests Mobile Phone: '.$guestMobilePhone, 0, 0, 'A');
$pdf->Ln();
$pdf->Ln();
$pdf->Cell(190, 5,'Number Of Occupants: '.$occupants, 0, 0, 'A');
$pdf->Ln();
$pdf->Ln();
$pdf->Cell(190, 5,'License Plates: '.$stringLicense, 0, 0, 'A');
$pdf->Ln();
$pdf->Ln();
$pdf->Cell(95, 5,'Period of use: From '.$rentStart, 0, 0, 'R');
$pdf->Cell(95, 5,' To '.$rentEnd, 0, 0, 'A');
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->SetFont('Arial', 'I', 12);
$pdf->MultiCell(190, 5,'As you are aware, each townhouse is issued 8 passes only for the recreational facilities. This means that only eight people from your townhouse may use the facilities at one time. This is to prevent over-crowding at the pool and the fair usage of chairs and lounges for all of our residents.',0,'A', false);
$pdf->Ln();
$pdf->MultiCell(190, 5,'Please advise your guests that they must contact you with any
problems or questions they may have while visiting.',0,'A', false);
$pdf->Ln();


// out put PDF file
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
