<?php

// set up PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// require composer and phpmailer
require 'vendor/autoload.php';

// Collect data to Variables

$purchaseDate = $_POST['dop'];
$name1 = $_POST['name1'];

$homeNum1 = $_POST['homeNum1'];
$email1 = $_POST['email1'];
$currAddress = $_POST['currAddress'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zip'];
$cluster = $_POST['cluster'];
$unit = $_POST['unit'];
$price = $_POST['price'];
$passes = $_POST['passes'];

if(!empty($_POST['name2'])) {
  $name2 = $_POST['name2'];
} else {
  $name2 = '';
}
if(!empty($_POST['homeNum2'])) {
  $homeNum2 = $_POST['homeNum2'];
} else {
  $homeNum2 = '';
}
if(!empty($_POST['workNum1'])) {
  $workNum1 = $_POST['workNum1'];
} else {
  $workNum1 = '';
}
if(!empty($_POST['workNum2'])) {
  $workNum2 = $_POST['workNum2'];
} else {
  $workNum2 = '';
}
if(!empty($_POST['cellNum1'])) {
  $cellNum1 = $_POST['cellNum1'];
} else {
  $cellNum1 = '';
}
if(!empty($_POST['cellNum2'])) {
  $cellNum2 = $_POST['cellNum2'];
} else {
  $cellNum2 = '';
}
if(!empty($_POST['faxNum1'])) {
  $faxNum1 = $_POST['faxNum1'];
} else {
  $faxNum1 = '';
}
if(!empty($_POST['faxNum2'])) {
  $faxNum2 = $_POST['faxNum2'];
} else {
  $faxNum2 = '';
}
if(!empty($_POST['email2'])) {
  $email2 = $_POST['email2'];
} else {
  $email2 = '';
}
if(!empty($_POST['runNum'])) {
  $runNum = $_POST['runNum'];
} else {
  $runNum = '';
}
if(!empty($_POST['loanAmount'])) {
  $loanAmount = $_POST['loanAmount'];
} else {
  $loanAmount = '';
}
if(!empty($_POST['mHolder'])) {
  $mHolder = $_POST['mHolder'];
} else {
  $mHolder = '';
}
if(!empty($_POST['loanNum'])) {
  $loanNum = $_POST['loanNum'];
} else {
  $loanNum = '';
}
if(!empty($_POST['mAddress'])) {
  $mAddress = $_POST['mAddress'];
} else {
  $mAddress = '';
}
if(!empty($_POST['mPhone'])) {
  $mPhone = $_POST['mPhone'];
} else {
  $mPhone = '';
}
if(!empty($_POST['contact'])) {
  $contact = $_POST['contact'];
} else {
  $contact = '';
}
if(!empty($_POST['lbName'])) {
  $lbName = $_POST['lbName'];
} else {
  $lbName = '';
}
if(!empty($_POST['lbPhone'])) {
  $lbPhone = $_POST['lbPhone'];
} else {
  $lbPhone = '';
}
if(!empty($_POST['caName'])) {
  $caName = $_POST['caName'];
} else {
  $caName = '';
}
if(!empty($_POST['caAddress'])) {
  $caAddress = $_POST['caAddress'];
} else {
  $caAddress = '';
}
if(!empty($_POST['caPhone'])) {
  $caPhone = $_POST['caPhone'];
} else {
  $caPhone = '';
}
if(!empty($_POST['caEmail'])) {
  $caEmail = $_POST['caEmail'];
} else {
  $caEmail = '';
}
if(!empty($_POST['sbName'])) {
  $sbName = $_POST['sbName'];
} else {
  $sbName = '';
}
if(!empty($_POST['sbAddress'])) {
  $sbAddress = $_POST['sbAddress'];
} else {
  $sbAddress = '';
}
if(!empty($_POST['sbPhone'])) {
  $sbPhone = $_POST['sbPhone'];
} else {
  $sbPhone = '';
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
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(190, 5, 'Registration Form', 0, 2, 'C');
$pdf->Ln();
$pdf->Ln();
$pdf->SetFont('Arial', '', 11);
$pdf->Cell(190, 5,'Date of Purchase: '.$purchaseDate, 0, 2, 'A');
$pdf->Ln();
$pdf->Cell(95, 5,'Owners Name:     '.$name1, 0, 0, 'A');
$pdf->Cell(95, 5,'Owners Name:     '.$name2, 0, 0, 'A');
$pdf->Ln();
$pdf->Cell(95, 5,'Home #     '.$homeNum1, 0, 0, 'A');
$pdf->Cell(95, 5,'Home #     '.$homeNum2, 0, 0, 'A');
$pdf->Ln();
$pdf->Cell(95, 5,'Work #     '.$workNum1, 0, 0, 'A');
$pdf->Cell(95, 5,'Work #     '.$workNum2, 0, 0, 'A');
$pdf->Ln();
$pdf->Cell(95, 5,'Cell #     '.$cellNum1, 0, 0, 'A');
$pdf->Cell(95, 5,'Cell #     '.$cellNum2, 0, 0, 'A');
$pdf->Ln();
$pdf->Cell(95, 5,'Fax #      '.$faxNum1, 0, 0, 'A');
$pdf->Cell(95, 5,'Fax #      '.$faxNum2, 0, 0, 'A');
$pdf->Ln();
$pdf->Cell(95, 5,'Email:     '.$email1, 0, 0, 'A');
$pdf->Cell(95, 5,'Email:     '.$email2, 0, 2, 'A');
$pdf->Ln();
$pdf->Cell(100, 5,'Primary Residence Address: '.$currAddress, 0, 0, 'A');
$pdf->Cell(29, 5,'City: '.$city, 0, 0, 'A');
$pdf->Cell(20, 5,'State: '.$state, 0, 0, 'A');
$pdf->Cell(20, 5,'Zip: '.$zip, 0, 2, 'A');
$pdf->Ln();
$pdf->Cell(100, 5,'RR Village Property Address Cluster: '.$cluster.' Unit: '.$unit, 0, 0, 'A');
$pdf->Cell(40, 5,'Village Number: '.$runNum, 0, 2, 'A');
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Cell(95, 5,'Price/Value $'.$price, 0, 0, 'A');
$pdf->Cell(95, 5,' Loan Amount $'.$loanAmount, 0, 0, 'A');
$pdf->Ln();
$pdf->Cell(95, 5,'Mortgage Holder: '.$mHolder, 0, 0, 'A');
$pdf->Cell(95, 5,' Loan # '.$loanNum, 0, 0, 'A');
$pdf->Ln();
$pdf->Cell(195, 5,'Address: '.$mAddress, 0, 0, 'A');
$pdf->Ln();
$pdf->Cell(95, 5,' Phone: '.$mPhone, 0, 0, 'A');
$pdf->Cell(95, 5,' Contact: '.$contact, 0, 0, 'A');
$pdf->Ln();
$pdf->Cell(95, 5,'Listing Broker: '.$lbName, 0, 0, 'A');
$pdf->Cell(95, 5,' Phone: '.$lbPhone, 0, 0, 'A');
$pdf->Ln();
$pdf->Cell(95, 5,'Closing Attorney Name: '.$caName, 0, 0, 'A');
$pdf->Cell(95, 5,' Address: '.$caAddress, 0, 0, 'A');
$pdf->Ln();
$pdf->Cell(95, 5,'Phone: '.$caPhone, 0, 0, 'A');
$pdf->Cell(95, 5,' Email: '.$caEmail, 0, 0, 'A');
$pdf->Ln();
$pdf->Cell(95, 5,'Selling Brokers Name: '.$sbName, 0, 0, 'A');
$pdf->Cell(95, 5,' Address: '.$sbAddress, 0, 0, 'A');
$pdf->Ln();
$pdf->Cell(95, 5,'Phone:'.$sbPhone, 0, 2, 'A');
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->MultiCell(190, 5,'****Each member of the Association was given 8 passes to the
recreational facilities. Four blue passes with keys, four without; with
the cluster and unit number printed on them. These passes must be
turned over to the new owner on or before closing. The replacement
cost for these passes and/or keys is $50.00 each. If the passes
and/or keys are unavailable, the purchaser will be responsible for the
cost of replacement.',0,'A', false);
$pdf->Ln();
$pdf->Cell(95, 5,'Passes Received: '.$passes, 0, 2, 'A');
$pdf->Ln();
$pdf->MultiCell(190, 5,'I/we, the undersigned, have been given the Declarations, By-Laws and
Rules and Regulations of the RR Village Association, Inc. by our broker
and have read and understand them.',0,'A', false);
$pdf->Ln();



// out source pdf
// $pdf->Output();
$epdf = $pdf->Output("",'S');

// Send PDF
sendEmail($epdf,$name1);

function sendEmail($ppdf,$pname)
{
  $mail = new PHPMailer(true);

  try {
      //Server settings
      $mail->SMTPDebug = false;                     // Enable verbose debug output
      $mail->isSMTP();                          // Set mailer to use SMTP

      $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
      $mail->SMTPAuth   = true;                 // Enable SMTP authentication
      $mail->Username   = '#';   // SMTP username
      $mail->Password   = '#';
      $mail->SMTPSecure = 'tls'; // Enable TLS encryption, `ssl` also accepted
      $mail->Port       = 587;     // TCP port to connect to

      //Recipients
      $mail->setFrom('rrva@website.com', 'Guest User');
      $mail->addAddress('rrvainc@gmail.com', 'Ms. Neif');// Add a recipient
      if($_POST['copy']=='Yes'){
        $mail->addAddress($_POST['email1'], $_POST['name1']);// Add a recipient
      }


      // Attachments
      $mail->addStringAttachment($ppdf, $pname.' registraion.pdf');


      // Content
      $mail->isHTML(true);            // Set email format to HTML
      $mail->Subject = 'Modify Home '.$pname;
      $mail->Body    = 'Hi Wendy my name is '.$pname.', here is my registration form.';
      $mail->AltBody = 'Hi Wendy my name is '.$pname.', here is my registration form.';

      $mail->send();
      header('Location:thanks.php?name='.$pname);
  } catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }
}
 ?>
