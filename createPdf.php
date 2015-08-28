<?php
// Author Greg London
require('fpdf.php');
require('fpdi.php');

// variables -> hardcoded 1st...
$organization = 'Test Organization';
$eventName = 'Test Event';
$eventDate = '2015-03-16';
$eventLocation = 'New Orleans, LA';
$eventDescription = '***';
// will need to do some logic here... 
$organizationType501c = 'X';
$organizationTypeOther = 'X';
$organizationTypeOtherExplain = '***';
$contactPerson = '';
$contactPhone = '555-55-5555';
$contactEmail = 'na@na.com';
// more logic...
$typeOfDonationFood = 'X';
$typeOfDonationBeverage = 'X';
$typeOfDonationGiftCard = 'X';
$typeOfDonationOther = '****';
$servings = '300';
// login
$serviceDelivery = 'X';
$servicePickUp = 'X';
$serviceOnSite = 'X';
$serviceCookOnSite = 'X';
$materials = '***';
$descriptionSpace = '***';
$location = 'Harahan, LA';
$donationPast = 'Yes';
$donationExplain = '***.';
$marketing = 'Yes';
$marketingExplain = '***..';
$additional = '***';
$responseDate = '2015-02-03';

$pdf = new FPDI();
$pdf->AddPage('P', 'Letter', 'mm');
$pdf->SetSourceFile('donationForm.pdf');
$tplIdx = $pdf->importPage(2);
$pdf->useTemplate($tplIdx, 0, 0, 216, 279);
$pdf->SetFont('Arial', '', 10);

$startX = $pdf->GetX(); //initial x 
$currentY = $pdf->GetY();
$currentX = $pdf->GetX();

$pdf->SetXY(56.5, 29.5);
$pdf->Write(0, $organization);

$pdf->SetXY(140, 29.5);
$pdf->Write(0, $eventName);

$pdf->SetXY(56.5, 36.5);
$pdf->Write(0, $eventDate);

$pdf->SetXY(56.5, 44);
$pdf->Write(0, $eventLocation);

$pdf->SetXY(83, 49);
$pdf->MultiCell(100, 3.5, $eventDescription, 0);

// will need to do some logic here...
$pdf->SetXY(53, 71.5);
$pdf->Write(0, $organizationType501c);

$pdf->SetXY(74, 71.5);
$pdf->Write(0, $organizationTypeOther);

$pdf->SetXY(115, 65);
$pdf->MultiCell(75, 3.5, $organizationTypeOtherExplain, 0);

$pdf->SetXY(49, 83.5);
$pdf->Write(0, $contactPerson);

$pdf->SetXY(49, 90.5);
$pdf->Write(0, $contactPhone);

$pdf->SetXY(49, 97.5);
$pdf->Write(0, $contactEmail);

$pdf->SetXY(53, 108.5);
$pdf->Write(0, $typeOfDonationFood);

$pdf->SetXY(74, 108.5);
$pdf->Write(0, $typeOfDonationBeverage);

$pdf->SetXY(96.5, 108.5);
$pdf->Write(0, $typeOfDonationGiftCard);

$pdf->SetXY(114, 107);
$pdf->MultiCell(75, 3.5, $typeOfDonationOther, 0);

$pdf->SetXY(72, 129);
$pdf->Write(0, $servings);

$pdf->SetXY(56, 142);
$pdf->Write(0, $serviceDelivery);

$pdf->SetXY(93, 142);
$pdf->Write(0, $servicePickUp);

$pdf->SetXY(130.5, 142);
$pdf->Write(0, $serviceOnSite);

$pdf->SetXY(167, 142);
$pdf->Write(0, $serviceCookOnSite);

$pdf->SetXY(71.5, 151.5);
$pdf->MultiCell(110, 3.5, $materials, 0);

$pdf->SetXY(71.5, 167);
$pdf->MultiCell(110, 3.5, $descriptionSpace, 0);

$pdf->SetXY(109, 182);
$pdf->Write(0, $location);

$pdf->SetXY(94, 192.5);
$pdf->Write(0, $donationPast);

$pdf->SetXY(109, 189);
$pdf->MultiCell(80, 3.5, $donationExplain, 0);

$pdf->SetXY(183.5, 205);
$pdf->Write(0, $marketing);

$pdf->SetXY(100, 212);
$pdf->MultiCell(90, 3.5, $marketingExplain, 0);

$pdf->SetXY(100, 226);
$pdf->MultiCell(90, 3.5, $additional, 0);

$pdf->SetXY(100, 246);
$pdf->Write(0, $responseDate);

$pdf->Output();


