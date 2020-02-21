<?php
// memanggil library FPDF
require('fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l','mm','A5');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',16);
// mencetak string 
$pdf->Cell(190,7,'DATA PESERTA PPDB BANDUNG TAHUN AJARAN 2018',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,5,'Rifky Lovanto | Dika Meidaya Putra | Nisa Nurul Syamsu | Tsania Unzia Putri',0,1,'C');
 
// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1);
 
$pdf->SetFont('Arial','B',5);
$pdf->Cell(30,6,'NIS',1,0);
$pdf->Cell(35,6,'Nama Lengkap',1,0);
$pdf->Cell(30,6,'Sekolah Asal',1,0);
$pdf->Cell(30,6,'Sekolah Tujuan',1,0);
$pdf->Cell(10,6,'Nilai MTK',1,0);
$pdf->Cell(10,6,'Nilai IPA',1,0);
$pdf->Cell(20,6,'Nilai Indonesia',1,0);
$pdf->Cell(10,6,'Total',1,0);
$pdf->Cell(20,6,'Status',1,1);
 
$pdf->SetFont('Arial','',7);
 
include 'koneksi2.php';
$mahasiswa = mysqli_query($connect, "select * from pendaftar");
while ($row = mysqli_fetch_array($mahasiswa)){
    $pdf->Cell(30,6,$row['nis'],1,0);
    $pdf->Cell(35,6,$row['nama'],1,0);
    $pdf->Cell(30,6,$row['sekolahasal'],1,0);
    $pdf->Cell(30,6,$row['sekolahtujuan'],1,0);
    $pdf->Cell(10,6,$row['nilaimtk'],1,0);
    $pdf->Cell(10,6,$row['nilaiipa'],1,0);
    $pdf->Cell(20,6,$row['nilaiindo'],1,0);
    $pdf->Cell(10,6,$row['total'],1,0);
    $pdf->Cell(20,6,$row['status'],1,1);
}
 
$pdf->Output();
?>