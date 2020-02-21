<?php
session_start();
//include'koneksi.php';
$sql = mysql_query("SELECT * FROM login");
?>
<html xmlns="http://www.w3.org/1999/xhtml"> <!-- Bagian halaman HTML yang akan konvert -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Laporan User MRP</title>
</head>
<body>
<div id="logo">
<div align="center"><img src="logo2.png" width="1060" height="120"></div>
</div>
<div class="col-md">
<div id="title">
  <div align="center"><br>
  <hr color="black" width="100%" size="4" align="left">
    <strong>LAPORAN USER MRP </strong></div>
</div>
<div id="isi">
  <table width="46%" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr class="tr-title">
  	<td width="9%"><div align="center">NO</div></td>
    <td width="14%"><div align="center">User</div></td>
    <td width="23%"><div align="center">Nama</div></td>
    <td width="19%"><div align="center">Password</div></td>
    <td width="35%"><div align="center">level</div></td>
  </tr>
<?php
	$Open = mysql_connect("localhost","root","");
		if (!$Open){
		die ("Koneksi ke Engine MySQL Gagal !<br>");
		}
	$Koneksi = mysql_select_db("gudang");
		if (!$Koneksi){
		die ("Koneksi ke Database Gagal !");
		}
	$Cari="SELECT * FROM Login ORDER BY user";
	$Tampil = mysql_query($Cari);
	$nomer=0;
    while (	$hasil = mysql_fetch_array ($Tampil)) {
			$user = stripslashes ($hasil['user']);
			$nama = stripslashes ($hasil['nama']);
			$password = stripslashes ($hasil['password']);
			$level = stripslashes ($hasil['level']);
		{
	$nomer++;
?>
    <tr align="center" bgcolor="#DFE6EF">
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr align="center">
      <td height="32"><?=$nomer?>
          <div align="center"></div></td>
      <td><?=$user?>
          <div align="center"></div></td>
      <td><?=$nama?>
          <div align="center"></div></td>
      <td><?=$password?>
          <div align="center"></div></td>
      <td><?=$level?>
          <div align="center"></div></td>
    </tr>
    <tr align="center" bgcolor="#DFE6EF">
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <?php  
		}
	}
//Tutup koneksi engine MySQL
	mysql_close($Open);
?>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</div>
<div>
  
  <p align="right">Bandung, <?php
 $tgl= date('F j, Y');
 echo $tgl;
 ?></p>
    <p align="right">Penanggung Jawab </p>
    <p align="right"> <?php echo $_SESSION['level'];?><br /></p>
	<p>&nbsp;</p>
    <p>&nbsp;</p>
<p align="right"> <?php echo $_SESSION['nama'];?><br /></p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
</div></div>