<?php

require('./fpdf/fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();

// Set font and font size for the heading
$pdf->SetFont('Arial', 'B', 25); // 'B' indicates bold

$pdf->Cell(0, 18, 'A Simple PDF File', 0, 1, ''); // Add the heading centered

// Reset font for the content
$pdf->SetFont('Arial', '', 12);

$pdf->Cell(0, 20, 'This is a small demonstration .pdf file -', 0, 1, '');
$pdf->Cell(0, 0, 'just for use in the Virtual Mechanics tutorials. More text. And more', 0, 1, '');
$pdf->Cell(0, 8, 'text. And more text. And more text. And more text.', 0, 1, '');
$pdf->Cell(0, 4, 'And more text. And more text. And more text. And more text. And more', 0, 1, '');
$pdf->Cell(0, 4, 'text. And more text. Boring, zzzzz. And more text. And more text. And', 0, 1, '');
$pdf->Cell(0, 4, 'more text. And more text. And more text. And more text. And more text.', 0, 1, '');
$pdf->Cell(0, 8, 'And more text. And more text.', 0, 1, '');
$pdf->Cell(0, 4, 'And more text. And more text. And more text. And more text. And more', 0, 1, '');
$pdf->Cell(0, 4, 'text. And more text. And more text. Even more. Continued on page 2 ...', 0, 1, '');
$pdf->AddPage();

// Set font and font size for the heading
$pdf->SetFont('Arial', 'B', 25); // 'B' indicates bold

$pdf->Cell(0, 18, 'Simple PDF File 2', 0, 1, ''); // Add the heading centered

// Reset font for the content
$pdf->SetFont('Arial', '', 12);

$pdf->Cell(0, 4, '...continued from page 1. Yet more text. And more text. And more text.', 0, 1, '');
$pdf->Cell(0, 4, 'And more text. And more text. And more text. And more text. And more', 0, 1, '');
$pdf->Cell(0, 4, 'text. Oh, how boring typing this stuff. But not as boring as watching', 0, 1, '');
$pdf->Cell(0, 4, 'Boring. More, a little more text. The end, and just as well.', 0, 1, '');


// Set the file path for the PDF
$pdfFilePath = $_SERVER['DOCUMENT_ROOT'] . '/F_pdf/sample.pdf';

// Output the PDF to the specified file path
$pdf->Output($pdfFilePath, 'F'); // 'F' means save to a file

// Display a success message
echo "PDF created successfully!";