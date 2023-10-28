<?php
require('fpdf186/fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(0, 10, 'Data Mahasiswa', 0, 1, 'C');
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(20, 10, 'No.', 1);
$pdf->Cell(40, 10, 'NIM', 1);
$pdf->Cell(40, 10, 'Nama', 1);
$pdf->Cell(80, 10, 'Prodi', 1);
$pdf->Ln();

$dataMahasiswa = array(
    array('1', '001', 'John Thor', 'Informatika'),
    array('2', '002', 'John Wick', 'Sistem Informasi'),
    array('3', '003', 'John Doe', 'Teknik Komputer'),
);

$pdf->SetFont('Arial', '', 10);
foreach ($dataMahasiswa as $row) {
    $pdf->Cell(20, 10, $row[0], 1);
    $pdf->Cell(40, 10, $row[1], 1);
    $pdf->Cell(40, 10, $row[2], 1);
    $pdf->Cell(80, 10, $row[3], 1);
    $pdf->Ln();
}

$pdf->Output();
