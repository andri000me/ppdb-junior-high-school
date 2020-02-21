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
$pdf->Cell(190,7,'DATA PENGGUNA WEBSITE PPDB BANDUNG ',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,5,'Rifky Lovanto | Dika Meidaya Putra | Nisa Nurul Syamsu | Tsania Unzia Putri',0,1,'C');
 
// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1);
 
$pdf->SetFont('Arial','B',8);
$pdf->Cell(30,6,'USERNAME',1,0);
$pdf->Cell(55,6,'NAMA LENGKAP',1,0);
$pdf->Cell(20,6,'LEVEL',1,1);
 
$pdf->SetFont('Arial','',7);
 
include 'koneksi2.php';
$mahasiswa = mysqli_query($connect, "select * from login");
while ($row = mysqli_fetch_array($mahasiswa)){
    $pdf->Cell(30,6,$row['user'],1,0);
    $pdf->Cell(55,6,$row['nama'],1,0);
    $pdf->Cell(20,6,$row['level'],1,1);
}
 
$pdf->Output();
?>