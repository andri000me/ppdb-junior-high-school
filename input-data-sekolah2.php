<br />
<body bgcolor="#EEF2F7">
<?php
//cek button
if ($_POST['Submit'] == "Submit") {
//Kirimkan Variabel
$nosmp= $_POST['nosmp'];
$sekolahtujuan = $_POST['sekolahtujuan'];
$kepala = $_POST['kepala'];
$alamat = $_POST['alamat'];
$telp = $_POST['telp'];
//validasi data jika user dan nama kosong
if (empty($_POST['nosmp'])|| empty($_POST['sekolahtujuan'])|| empty($_POST['kepala'])|| empty($_POST['alamat'])|| empty($_POST['telp'])) {
?>
<script language="JavaScript">
alert('Data Harap Dilengkapi');
document.location='homeadmin.php?page=form-input-data-sekolah2';
</script>
<?php
}
//Jika Validasi Terpenuhi
else {
include "koneksi.php";
//cek User di database
$cek=mysql_num_rows (mysql_query("SELECT nosmp FROM sekolahsmp WHERE nosmp='$_POST[nosmp]'"));
if ($cek > 0) {
?>
<script language="JavaScript">
alert('Data sekolah sudah ada !, silahkan diulang kembali');
document.location='homeadmin.php?page=form-input-data-sekolah2';
</script>
<?php
}
//Masukan data ke Table Login
$input ="INSERT INTO sekolahsmp (nosmp, sekolahtujuan, kepala, alamat, telp) VALUES ('$nosmp', '$sekolahtujuan', '$kepala', '$alamat', '$telp')";
$query_input =mysql_query($input);
if ($query_input) {
//Jika Sukses
?>
<script language="JavaScript">
alert('Data sekolah Berhasil diinput');
document.location='homeadmin.php';
</script>
<?php
}
else {
//Jika Gagal
echo "Data sekolah Gagal diinput, Silahkan diulangi!";
}
//Tutup koneksi engine MySQL
mysql_close($Open);
}
}
?>
</body>