<?php

require('fpdf/fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();

// Logo
$pdf->Image('./image/web.png', 10, 10, 30);

// Set font for the content
$pdf->SetFont('Arial', '', 12);

// Split the page into two columns
$column1X = 10;
$column2X = 90;
$y = 40; // Starting Y position

$pdf->SetXY($column1X, $y);
$pdf->MultiCell(40, 8, "Line 1\nLine 2\nLine 3\nLine 4\n");
$column1Height = $pdf->GetY();

// Chapter 2 content in column 2
$pdf->SetXY($column2X, 40); // Reset Y position to the top
$pdf->MultiCell(0, 8, "Line 1\nLine 2\nLine 3\nLine 4\n \nLine 1");
$y = $pdf->GetY();

$column2Height = $pdf->GetY();

// Set the final page height based on the taller column
$pageHeight = max($column1Height, $column2Height);

// Output the PDF with adjusted page height
$pdf->SetAutoPageBreak(true, $pageHeight);

$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(0, 10, 'This is heading', 0, 1, '');

$pdf->SetFont('Arial', '', 10);
$pdf->Cell(0, 10, 'Multiple line text goes here. You can write as much text as you want', 0, 1, '');

$pdfFilePath = $_SERVER['DOCUMENT_ROOT'] . '/F_pdf2/sample.pdf';

$pdf->Output($pdfFilePath,'F');

echo "PDF created successfully!";