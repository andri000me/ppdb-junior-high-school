<?php
session_start();
include "koneksi.php";
$user = $_POST['user'];
$password = $_POST['password'];
$op = $_GET['op'];
if($op=="in"){
$sql = mysql_query("SELECT * FROM login WHERE user='$user' AND password='$password'");

if(mysql_num_rows($sql)==1){//jika berhasil akan bernilai 1
$qry = mysql_fetch_array($sql);
$_SESSION['user'] = $qry['user'];
$_SESSION['nama'] = $qry['nama'];
$_SESSION['password'] = $qry['password'];
$_SESSION['level'] = $qry['level'];
if($qry['level']=="Admin"){
	?>
<script language="JavaScript">
alert('Selamat datang <?=$_SESSION['nama']?>');
</script>
	<?php
echo "<script> document.location.href='homeadmin.php'; </script>";
// header("location:homeadmin.php");
}else if($qry['level']=="User"){
echo "<script> document.location.href='homeuser.php'; </script>";
//header("location:homemanager.php");
}else if($qry['level']=="Gudang"){
echo "<script> document.location.href='homegudang.php'; </script>";
//header("location:homegudang.php");
}else if($qry['level']=="PPIC"){
echo "<script> document.location.href='HomePPIC.php'; </script>";
//header("location:homePPIC.php");
}else if($qry['level']=="SBU"){
echo "<script> document.location.href='homesbu.php'; </script>";
//header("location:homePPIC.php");
}else if($qry['level']=="PMO"){
echo "<script> document.location.href='homePmo.php'; </script>";
//header("location:homePPIC.php");
}else if($qry['level']=="PCR"){
echo "<script> document.location.href='homepcr.php'; </script>";
//header("location:homePPIC.php");
}else if($qry['level']=="Marketing"){
echo "<script> document.location.href='homemarketing.php'; </script>";
//header("location:homePPIC.php");
}
}else{
ob_flush();
?>
<script language="JavaScript">
alert('Username atau Password tidak sesuai. Silahkan diulang kembali!');
document.location.href='index.php';
</script>
<?php
}
}else if($op=="out"){
isset($_SESSION['user']);
isset($_SESSION['level']);
header("location:index.php");
}
ob_flush();
?>