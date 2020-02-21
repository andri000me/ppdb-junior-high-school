<br />
<body bgcolor="#EEF2F7">
<?php
//cek button
if ($_POST['Submit'] == "Submit") {
//Kirimkan Variabel
$user = $_POST['user'];
$nama = $_POST['nama'];
$password = $_POST['password'];
$level = $_POST['level'];
//validasi data jika user dan nama kosong
if (empty($_POST['user'])|| empty($_POST['nama'])|| empty($_POST['password'])) {
?>
<script language="JavaScript">
alert('Data Harap Dilengkapi');
document.location='homeadmin.php?page=form-input-data-user';
</script>
<?php
}
//Jika Validasi Terpenuhi
else {
include "koneksi.php";
//cek User di database
$cek=mysql_num_rows (mysql_query("SELECT user FROM login WHERE user='$_POST[user]'"));
if ($cek > 0) {
?>
<script language="JavaScript">
alert('USERNAME sudah dipakai !, silahkan diulang kembali');
document.location='homeadmin.php?page=form-input-data-user';
</script>
<?php
}
//Masukan data ke Table Login
$input ="INSERT INTO login (user, nama, password, level) VALUES ('$user','$nama','$password','$level')";
$query_input =mysql_query($input);
if ($query_input) {
//Jika Sukses
?>
<script language="JavaScript">
alert('Data User Berhasil diinput');
document.location='homeadmin.php';
</script>
<?php
}
else {
//Jika Gagal
echo "Data User Gagal diinput, Silahkan diulangi!";
}
//Tutup koneksi engine MySQL
mysql_close($Open);
}
}
?>
</body>