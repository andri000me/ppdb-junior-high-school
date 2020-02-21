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
$pdf->Cell(190,7,'DATA SEKOLAH MENENGAH PERTAMA ',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'Rifky Lovanto | Dika Meidaya Putra | Nisa Nurul Syamsu | Tsania Unzia Putri',0,1,'C');
 
// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1);
 
$pdf->SetFont('Arial','B',8);
$pdf->Cell(35,6,'NO INDUK SEKOLAH',1,0);
$pdf->Cell(45,6,'NAMA SEKOLAH',1,0);
$pdf->Cell(40,6,'KEPALA SEKOLAH',1,0);
$pdf->Cell(45,6,'ALAMAT SEKOLAH',1,0);
$pdf->Cell(30,6,'TELP SEKOLAH',1,1);
 
$pdf->SetFont('Arial','',6);
 
include 'koneksi2.php';
$mahasiswa = mysqli_query($connect, "select * from sekolahsmp");
while ($row = mysqli_fetch_array($mahasiswa)){
    $pdf->Cell(35,6,$row['nosmp'],1,0);
    $pdf->Cell(45,6,$row['sekolahtujuan'],1,0);
    $pdf->Cell(40,6,$row['kepala'],1,0);
    $pdf->Cell(45,6,$row['alamat'],1,0);
    $pdf->Cell(30,6,$row['telp'],1,1);
}
 
$pdf->Output();
?>