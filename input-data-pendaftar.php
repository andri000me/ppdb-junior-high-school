<br />
<body bgcolor="#EEF2F7">
<?php
//cek button
if ($_POST['Submit'] == "Submit") {
//Kirimkan Variabel
$nis= $_POST['nis'];
$nama = $_POST['nama'];
$sekolahasal = $_POST['sekolahasal'];
$sekolahtujuan = $_POST['sekolahtujuan'];
$nilaimtk = $_POST['nilaimtk'];
$nilaiipa= $_POST['nilaiipa'];
$nilaiindo = $_POST['nilaiindo'];
$total = $_POST['total'];
$status = $_POST['status'];

if ($total>=20) {
	$status="Diterima";
}else{
	$status="Tidak Diterima";
}
// $status = $_POST['status'];
//validasi data jika user dan nama kosong
if (empty($_POST['nis'])|| empty($_POST['nama'])|| empty($_POST['nilaimtk'])|| empty($_POST['nilaiipa'])|| empty($_POST['nilaiindo'])|| empty($_POST['total'])) {
?>
<script language="JavaScript">
alert('Data Harap Dilengkapi');
document.location='homeadmin.php?page=form-input-data-pendaftar';
</script>
<?php
}
//Jika Validasi Terpenuhi
else {
include "koneksi.php";
//cek User di database
$cek=mysql_num_rows (mysql_query("SELECT nis FROM pendaftar WHERE nis='$_POST[nis]'"));
if ($cek > 0) {
?>
<script language="JavaScript">
alert('Data peserta ppdb sudah ada !, silahkan diulang kembali');
document.location='homeadmin.php?page=form-input-data-pendaftar';
</script>
<?php
}
//Masukan data ke Table Login
$input ="INSERT INTO pendaftar (nis, nama, sekolahasal, sekolahtujuan, nilaimtk, nilaiipa, nilaiindo, total, status) VALUES ('$nis', '$nama', '$sekolahasal', '$sekolahtujuan', '$nilaimtk', '$nilaiipa', '$nilaiindo', '$total', '$status')";
$query_input =mysql_query($input);
if ($query_input) {
//Jika Sukses
?>
<script language="JavaScript">
alert('Data peserta ppdb Berhasil diinput');
document.location='homeadmin.php';
</script>
<?php
}
else {
//Jika Gagal
echo "Data peserta ppdb gagal diinput, Silahkan diulangi!";
}
//Tutup koneksi engine MySQL
mysql_close($Open);
}
}
?>
</body>