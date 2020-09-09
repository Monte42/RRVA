<?php

require('../fpdf/fpdf.php');
// New object created and constructor invoked
$pdf = new FPDF();
// Add new pages. By default no pages available.
$pdf->AddPage();
//$pdf->SetFont('font', 'style', size);
$pdf->SetFont('Times', 'B', 20);
// $pdf->Cell(size-x, size-y, 'Content', border, empty lines below, 'Center/Align');
$pdf->Image('img/transparent-logo.png',10,10,-600);
$pdf->Cell(185, 5, 'Legend-Gary Developments', 0, 2, 'C');
$pdf->Ln();
$pdf->SetFont('Times', 'B', 14);
$pdf->Cell(185, 5, 'Make Your Website Legendary', 0, 1, 'C');
$pdf->Ln();
$pdf->SetFont('Times', 'B', 11);
$pdf->Cell(100, 5, 'Phone: (607) 326-4268', 0, 0, 'C');
$pdf->Cell(85, 5, 'Email: garyd42@legend-gary.com', 0, 0, 'C');
$pdf->Ln();
$pdf->SetFont('Times', 'B', 10);
$pdf->Cell(185, 5, 'www.legend-gary.com', 0, 0, 'C');
$pdf->Ln();
$pdf->Line(20, 45, 250-65, 45);
$pdf->Ln();
$pdf->Ln();
$pdf->SetFont('Times', 'B', 11);
$pdf->Cell(185, 5, 'This document is a proposal of cost for the construction of the RR Village Association, Inc.', 0, 0, 'C');
$pdf->Ln();
$pdf->Cell(185, 5, 'website.  This cost will include the build of the site and the inclusion of all of the following:', 0, 2, 'C');
$pdf->Ln();
$pdf->Cell(185, 5, '1.) 20-25 pages of content                                      ', 0, 0, 'C');
$pdf->Ln();
$pdf->Cell(185, 5, '2.) 5 submittable forms ~ Email as PDF              ', 0, 0, 'C');
$pdf->Ln();
$pdf->Cell(185, 5, '3.) Video content for header                                 ', 0, 0, 'C');
$pdf->Ln();
$pdf->Cell(185, 5, '4.) Photos for gallery                                             ', 0, 0, 'C');
$pdf->Ln();
$pdf->Cell(185, 5, '5.) Incorporation of weather API                        ', 0, 0, 'C');
$pdf->Ln();
$pdf->Cell(185, 5, '6.) Incorporation of Google Map API                 ', 0, 0, 'C');
$pdf->Ln();
$pdf->Cell(185, 5, '7.) Incorporation of IP camera (no-installation)', 0, 2, 'C');
$pdf->Ln();
$pdf->Cell(185, 5, 'I will build the site from start to finish following the layout of the current site.  I will', 0, 0, 'C');
$pdf->Ln();
$pdf->Cell(185, 5, 'make changes in order to re-style for a more appealing look, ease the navigation of the site, and', 0, 0, 'C');
$pdf->Ln();
$pdf->Cell(185, 5, 'to make it reactive so it will fit any screen size nicely.  I will also increase the backend of the', 0, 0, 'C');
$pdf->Ln();
$pdf->Cell(185, 5, 'website by adding forms that when submitted will create a PDF file and email to the office email', 0, 0, 'C');
$pdf->Ln();
$pdf->Cell(185, 5, 'address.  I will help Wendy obtain the domain name and purchase the server space.  Apon completion ', 0, 0, 'C');
$pdf->Ln();
$pdf->Cell(185, 5, 'of the website I will deploy on said server at said domain.  Finally I will be responible for monthly', 0, 0, 'C');
$pdf->Ln();
$pdf->Cell(185, 5, 'maintenance and uploading new website content for a monthly fee listed below:', 0, 2, 'C');
$pdf->Ln();
$pdf->Cell(185, 5, '     Website Construction Cost: $3,000                       Monthly Maintenance Fee: $30.00           ', 0, 0, 'C');
$pdf->Ln();

$pdf->Output('proposal.pdf', 'D');
 ?>

 
<?php echo $_GET['name'] ?>
