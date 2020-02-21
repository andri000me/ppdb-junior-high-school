<style type="text/css">
	table.font{
		font-size: 12px;
	}
	.table1 {
    font-family: sans-serif;
    color: #444;
    border-collapse: collapse;
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
<div style="border:0px solid rgb(238,238,238); padding:10px; overflow:auto; width:136%; height:380;">
<div style="padding-bottom: 30px;"></div>
<font color="blue" size="4" face="arial"><center><b> Data Sekolah Menengah Pertama </b></font></center>
<br />

<form action="" method="post" name="filter">
   <input type="text" name="input_cari" placeholder="  Cari Disini" class="css-input" style="width:250px;" />
   <input type="submit" name="cari" value="Cari" class="btn" style="padding:3px;" margin="6px;" width="50px;"  />
   <input type="submit" name="tampil" value="Semua Data" class="btn" style="padding:3px;" margin="6px;" width="50px;"  />
  </form>
<br>
<table width="95%" border="0" align="center" cellpadding="5" cellspacing="0" class="font table1" style="margin-right: 20px; margin-left: 20px;">
<tr bgcolor="#89C4F4">
<th width="30"> No </th>
<th width="50"> No Sekolah</th>
<th width="150" height="42">Nama Sekolah&nbsp; </th>
<th width="150">Kepala Sekolah&nbsp; </th>
<th width="150">Alamat&nbsp; </th>
<th width="150">No.Telp&nbsp; </th>
</tr>

<?php 

   include('koneksi.php');
   $input_cari = @$_POST['input_cari']; 
   $cari = @$_POST['cari'];
   $tampil = @$_POST['tampil'];

   // jika tombol cari di klik
   if($cari) {

    // jika kotak pencarian tidak sama dengan kosong
    if($input_cari != "") {
    // query mysql untuk mencari berdasarkan nama negara. .
    $sql = mysql_query("select * from sekolahsmp where nosmp like '%$input_cari%' OR sekolahtujuan like '%$input_cari%' OR alamat like '%$input_cari%'") or die (mysql_error());   
    } else {
    $sql = mysql_query("select * from sekolahsmp") or die (mysql_error());
    }
    } else {
    $sql = mysql_query("select * from sekolahsmp") or die (mysql_error());
    }

   // mengecek data
   $cek = mysql_num_rows($sql);
   // jika data kurang dari 1
   if($cek < 1) {
    ?>
     <tr> <!--muncul peringata bahwa data tidak di temukan-->
      <td colspan="10" align="center" style="padding:10px;"> Data Tidak Ditemukan</td>
     </tr>
    <?php
   } else {

   // mengulangi data agar tidak hanya 1 yang tampil
   $nomer=0;
   while ( $hasil = mysql_fetch_array ($sql)) {
    $user2 = stripslashes ($hasil['nosmp']);
$user = stripslashes ($hasil['sekolahtujuan']);
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
</tr>
<?php
}
}
}
//Tutup koneksi engine MySQL
mysql_close($Open);
?>
</table>
</div>