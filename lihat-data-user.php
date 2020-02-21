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
/*fix margin pagination*/
            .pagination1{
                margin-top: 0px;
            }
</style>
<div style="border:1px solid rgb(238,238,238); padding:10px; overflow:auto; width:145%; height:380; background-color: white;">
<!-- <input name="button" type="button" title="Save as PDF Format" onclick=window.open('http:/ppdb/lap-user.php','_blank'); value="Export To PDF" /> -->
<a href='http:/ppdb/lap-user.php' style="float: right; padding-top: 30px; padding-right: 30px;" target="_blank" title="Simpan Dalam Format PDF"><img src="image/icon/pdf.png" width="30px" height="30px"></a>
<a href='homeadmin.php?page=form-input-data-user' style="float: right; padding-top: 30px; padding-right: 30px;" title="Tambah Data Baru"><img src="image/icon/add.png" width="30px" height="30px"></a>
<div style="padding-bottom: 30px;"></div>
<font color="blue" size="4" face="arial"><center><b> Data Pengguna </b></font></center>
<br />
<br />

<form action="" method="post" name="filter">
   <input type="text" name="input_cari" placeholder="  Cari Disini" class="css-input" style="width:250px;" />
   <input type="submit" name="cari" value="Cari" class="btn" style="padding:3px;" margin="6px;" width="50px;"  />
   <input type="submit" name="tampil" value="Semua Data" class="btn" style="padding:3px;" margin="6px;" width="50px;"  />
  </form>

<table width="95%" border="0" align="center" cellpadding="4" cellspacing="0" class="font table1">
<tr bgcolor="#89C4F4">
<th width="50"> No </th>
<th width="150" height="42">User&nbsp; </th>
<th width="150">Nama&nbsp; </th>
<th width="150">Level&nbsp; </th>
<th width="150">Opsi</th>
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
    $sql = mysql_query("select * from login where user like '%$input_cari%' OR nama like '%$input_cari%'") or die (mysql_error());   
    } else {
    $sql = mysql_query("select * from login") or die (mysql_error());
    }
    } else {
    $sql = mysql_query("select * from login") or die (mysql_error());
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
                            $user = stripslashes ($hasil['user']);
                            $nama = stripslashes ($hasil['nama']);
                            $level = stripslashes ($hasil['level']);
                            
                                {
                                    $nomer++;
                ?>


<tr align="center" bgcolor="#DFE6EF">
</tr>
<tr align="center">
<td height="32"><?=$nomer?>
<div align="center"></div></td>
<td><?=$user?>
<div align="center"></div></td>
<td><?=$nama?>
<div align="center"></div></td>
<td><?=$level?>
<div align="center"></div></td>
<?php 
echo '<td><a href="edit.php?user='.$hasil['user'].'"><img src="image/icon/update.png" width="33" height="33"></a> &nbsp;&nbsp;&nbsp;
<a href="hapus.php?user='.$hasil['user'].'" onclick="return confirm(\'Yakin?\')"><img src="image/icon/delete.png" width="33" height="33"></a></td>';	//menampilkan link edit dan hapus dimana tiap link terdapat GET id -> ?id=siswa_id
?>
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