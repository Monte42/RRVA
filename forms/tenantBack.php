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
$tenantsName = $_POST['tenant-name'];
$tenantsAddress = $_POST['tenant-current-address'];
$tenantsHomePhone = $_POST['tenant-home-phone'];
$tenantsMobilePhone = $_POST['tenant-mobile-phone'];
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
$pdf->Cell(190, 5, 'TENANT INFORMATON FORM', 0, 2, 'C');
$pdf->Ln();
$pdf->SetFont('Arial', '', 11);
$pdf->MultiCell(190, 5,'The following information must be provided at least three business days before the commencement of the rental.  It will be very helpful to both you and the Association in the event of an emergency.' ,0,'A', false);
$pdf->Ln();
$pdf->Ln();
$pdf->MultiCell(190, 5,'It is your obligation to make sure that your tenants abide by RRVA Rules and Regulations, plus the Common Ground Rules, Pool and Tennis Court Rules, etc. that each resident has a copy of and are available on our website. Please note that any and all exterior damages and/or infraction of Association rules by your tenant will be the ultimate responsibility of the homeowner. These rules include but are not limited to:',0,'A', false);
$pdf->Ln();
$pdf->Ln();
$pdf->Cell(190, 5,'* No motorcycles, 4 wheelers, trailers, etc. are allowed on RRVA
property;',0,0,'A');
$pdf->Ln();
$pdf->Cell(190, 5,'* No commercial vehicles are permitted on RRVA property between
the hours of 9:00 PM and 7:00 AM;;',0,0,'A');
$pdf->Ln();
$pdf->Cell(190, 5,'* Dogs must be on leashes and picked up after.',0,2,'A');
$pdf->Ln();
$pdf->MultiCell(190, 5,'Our Declarations specifically provide that no Unit may "be used in any way or for any purpose which may endanger the health or unreasonably disturb the Owner of any Townhouse Unit or any resident thereof.”',0,'A', false);
$pdf->Ln();
$pdf->SetFont('Arial', 'B', 12);
$pdf->MultiCell(190, 5,'We also remind everyone that while our By-Laws permit rentals for two weeks or more, such rentals are limited to four per year.',0,'A', false);
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
$pdf->Ln();
$pdf->Cell(190, 5,'Tenants Name: '.$tenantsName, 0, 0, 'A');
$pdf->Ln();
$pdf->Ln();
$pdf->Cell(190, 5,'Tenants Address: '.$tenantsAddress, 0, 0, 'A');
$pdf->Ln();
$pdf->Ln();
$pdf->Cell(95, 5,'Tenants Home Phone: '.$tenantsHomePhone, 0, 0, 'A');
$pdf->Cell(95, 5,'Tenants Mobile Phone: '.$tenantsMobilePhone, 0, 0, 'A');
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Cell(95, 5,'Number Of Occupants: '.$occupants, 0, 0, 'A');
$pdf->Cell(95, 5,'License Plates: '.$stringLicense, 0, 0, 'A');
$pdf->Ln();
$pdf->Ln();
$pdf->Cell(95, 5,'Rent Start Date: '.$rentStart, 0, 0, 'A');
$pdf->Cell(95, 5,'Rent End Date: '.$rentEnd, 0, 0, 'A');
$pdf->Ln();
$pdf->Ln();
$pdf->SetFont('Arial', '', 10);
$pdf->MultiCell(190, 5,'As you are aware, each townhouse is issued 8 passes only for the recreational facilities. This means that only eight people from your townhouse may use the facilities at one time. This is to prevent over-crowding at the pool and the fair usage of chairs and lounges for all of our residents.',0,'A', false);
$pdf->Ln();
$pdf->MultiCell(190, 5,'Please advise your tenants that they must contact you with any problems or questions they may have while renting.', 0,'A', false);
$pdf->Ln();
$pdf->Cell(190, 5,'There is a $50.00 rental fee that will be charged to your account.', 0, 0, 'A');
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
    //Server settings
    $mail->SMTPDebug = false;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    // $mail->Host       = 'mx.catskill.net.cust.b.hostedemail.com';  // Specify main and backup SMTP servers
    // $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    // $mail->Username   = 'rrvainc@catskill.net';                     // SMTP username
    // $mail->Password   = '#### #### ####';                               // SMTP password
    $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = '#';                     // SMTP username
    $mail->Password   = '#';
    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('rrva@website.com', 'Guest User');
    $mail->addAddress('rrvainc@gmail.com', 'Ms. Neif');     // Add a recipient

      // Attachments
      $mail->addStringAttachment($ppdf, $pname.'Tenant.pdf');


      // Content
      $mail->isHTML(true);                                  // Set email format to HTML
      $mail->Subject = 'Rent Form From '.$pname;
      $mail->Body    = 'Hi Wendy my name is '.$pname.', and I would like to rent out my unit.';
      $mail->AltBody = 'Hi Wendy my name is '.$pname.', and I would like to rent out my unit.';

      $mail->send();
      header('Location:thanks.php?name='.$pname);
  } catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }
}

 ?>
