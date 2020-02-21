<br />
<body bgcolor="#EEF2F7">
<?php
//cek button
if ($_POST['Submit'] == "Submit") {
//Kirimkan Variabel
$nosd= $_POST['nosd'];
$sekolahasal = $_POST['sekolahasal'];
$kepala = $_POST['kepala'];
$alamat = $_POST['alamat'];
$telp = $_POST['telp'];
//validasi data jika user dan nama kosong
if (empty($_POST['nosd'])|| empty($_POST['sekolahasal'])|| empty($_POST['kepala'])|| empty($_POST['alamat'])|| empty($_POST['telp'])) {
?>
<script language="JavaScript">
alert('Data Harap Dilengkapi');
document.location='homeadmin.php?page=form-input-data-sekolah';
</script>
<?php
}
//Jika Validasi Terpenuhi
else {
include "koneksi.php";
//cek User di database
$cek=mysql_num_rows (mysql_query("SELECT nosd FROM sekolah WHERE nosd='$_POST[nosd]'"));
if ($cek > 0) {
?>
<script language="JavaScript">
alert('Data sekolah sudah ada !, silahkan diulang kembali');
document.location='homeadmin.php?page=form-input-data-sekolah';
</script>
<?php
}
//Masukan data ke Table Login
$input ="INSERT INTO sekolah (nosd, sekolahasal, kepala, alamat, telp) VALUES ('$nosd', '$sekolahasal', '$kepala', '$alamat', '$telp')";
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