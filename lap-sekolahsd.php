<style type="text/css">
	table.font{
		font-size: 12px;
	}
	.table1 {
    font-family: sans-serif;
    color: #444;
    border: #ccc 1px solid;
}
 
.table1 tr th{
    background: #35A9DB;
    color: #fff;
    font-weight: normal;
}
 

 
.table1 tr:hover {
    background-color: #76a6f2;
}
 
.table1 tr:nth-child(even) {
    background-color: #f2f2f2;
}
</style>
<div style="border:1px solid rgb(238,238,238); padding:10px; overflow:auto; width:140%; height:380; background-color: white;">
	<font size=""></font>
<!-- <font color="blue" size="4" face="arial"><center><b> Data Sekolah</b></font></center>
<input name="button" type="button" title="Save as PDF Format" onclick=window.open('http:/ppdb/lap-sekolah.php','_blank'); value="Export To PDF" /> -->
<a href='http:/ppdb/lap-sekolah.php' style="float: right; padding-top: 30px; padding-right: 30px;" target="_blank" title="Save as PDF Format"><img src="image/icon/pdf.png" width="30px" height="30px"></a>
<a href='homeadmin.php?page=form-input-data-sekolah' style="float: right; padding-top: 30px; padding-right: 30px;" title="Tambah Data Baru"><img src="image/icon/add.png" width="30px" height="30px"></a>
<div style="padding-bottom: 30px;"></div>
<font color="blue" size="4" face="arial"><center><b> Data Sekolah Dasar </b></font></center>
<br />
<br />
<table width="95%" border="0" align="center" cellpadding="5" cellspacing="0" class="font table1" style="margin-right: 20px; margin-left: 20px;">
<tr bgcolor="#89C4F4">
<th width="30"> No </th>
<th width="50"> No Sekolah </th>
<th width="50" height="42">Nama Sekolah&nbsp; </th>
<th width="50">Kepala Sekolah&nbsp; </th>
<th width="50">Alamat&nbsp; </th>
<th width="50">No.Telp&nbsp; </th>
<th width="50">Opsi&nbsp; </th>
</tr>
<?php
$Open = mysql_connect("localhost","root","");
if (!$Open){
die ("Koneksi ke Engine MySQL Gagal !<br>");
}
$Koneksi = mysql_select_db("ppdb");
if (!$Koneksi){
die ("Koneksi ke Database Gagal !");
}
$Cari="SELECT * FROM sekolah ORDER BY nosd";
$Tampil = mysql_query($Cari);
$nomer=0;
while ( $hasil = mysql_fetch_array ($Tampil)) {
	$user2 = stripslashes ($hasil['nosd']);
$user = stripslashes ($hasil['sekolahasal']);
$nama = stripslashes ($hasil['kepala']);
$password = stripslashes ($hasil['alamat']);
$level = stripslashes ($hasil['telp']);
{
$nomer++;
?>
<tr align="center" bgcolor="#DFE6EF">
</tr>
<tr align="center">
<td height="32"><?=$nomer?>
<div align="center"></div></td>
<td><?=$user2?>
<div align="center"></div></td>
<td><?=$user?>
<div align="center"></div></td>
<td><?=$nama?>
<div align="center"></div></td>
<td><?=$password?>
<div align="center"></div></td>
<td><?=$level?>
<div align="center"></div></td>
<?php 
echo '<td><a href="edit-sekolah.php?nosd='.$hasil['nosd'].'"><img src="image/icon/update.png" width="33" height="33"></a> &nbsp;&nbsp;&nbsp;
<a href="hapus-sekolah.php?nosd='.$hasil['nosd'].'" onclick="return confirm(\'Yakin?\')"><img src="image/icon/delete.png" width="33" height="33"></a></td>';	//menampilkan link edit dan hapus dimana tiap link terdapat GET id -> ?id=siswa_id
?>
</tr>
<?php
}
}
//Tutup koneksi engine MySQL
mysql_close($Open);
?>
</table>
</div>