<?php
  //Memanggil file koneksi 
  require_once("config.php"); 
   
  //SQL Statement untuk menampilkan record yang akan di edit 
  $sql="SELECT *FROM sekolah WHERE nosd='".$_GET['nosd']."'"; 
  $result=mysql_query($sql)or die(mysql_error()); 
  $row=mysql_fetch_array($result); 
   
  //Memproses jika ditekan tombol Edit 
  If((isset($_POST['Submit']))&&($_POST['Submit']=='Edit')){  
   
  //Update record pada tabel mahasiswa 
  $sql="UPDATE sekolah SET sekolahasal='".$_POST['sekolahasal'].
  "',"."kepala='".$_POST['kepala'].
  "',alamat='".$_POST['alamat'].
   "',"."telp='".$_POST['telp'].
  "'". "WHERE nosd='".$_POST['nosd']."'"; 
 
  $result=mysql_query($sql) or die(mysql_error()); 
  if($result){ 
    echo"<script>alert('Data sudah ter-update');</script>"; 
    echo"<script>location='homeadmin.php?page=homeadmin';</script>"; 
  } 
  } 
?>
<html>
<head>
<title>EDIT DATA SEKOLAH DASAR</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
<form name="form1" method="post" action="<?php $_SERVER['PHP_SELF']; ?>" onSubmit="return cek_data()"> 
  <table width="600" border="1 black" align="center" cellpadding="15" cellspacing="0" bgcolor="white">
    <tr>
      <td height="50" align="center" bgcolor="#5697ff"><strong><font color="#FFFFFF">EDIT DATA SEKOLAH DASAR</font></strong></td>
    </tr>
    <tr>
      <td><table width="100%" border="0" align="center" cellpadding="5" cellspacing="0" bgcolor="#FFFFFF">
          <tr>
            <td width="99">No Induk Sekolah</td>
            <td width="9">:</td>
            <td width="287"><input name="nosd" type="text" size="15" maxlength="20" value="<?php echo $row['nosd']?>" readonly><font color="red">&nbsp;&nbsp;* Tidak dapat diganti</font></td></tr>
          <tr>
            <td>Nama Sekolah</td>
            <td>:</td>
            <td><input name="sekolahasal" type="text" id="sekolahasal" size="25" maxlength="25" value="<?php echo $row['sekolahasal']?>" readonly><font color="red">&nbsp;&nbsp;* Tidak dapat diganti</font></td></tr>       
          <tr>
          <tr>
            <td>Kepala Sekolah</td>
            <td>:</td>
            <td><input name="kepala" type="text" id="kepala" size="25" maxlength="25" value="<?php echo $row['kepala']?>"></td></tr>
          <tr>
            <td>Alamat Sekolah</td>
            <td>:</td>
            <td><input name="alamat" type="text" id="alamat" size="40" maxlength="40" value="<?php echo $row['alamat']?>"></td></tr>
          <tr>
            <td>No Telp</td>
            <td>:</td>
            <td><input name="telp" type="text" id="telp" size="30" maxlength="25" value="<?php echo $row['telp']?>"></td></tr>
          <tr>
          <tr>
          </tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td height="50" colspan="4" align="center"><input type="submit" name="Submit" value="Edit">
            <input type="reset" name="Reset" value="Reset">
            <input type="button" name="batal"  value="Batal" onClick="javascript:history.back()"></td>
          </tr>

      </table></td>
    </tr>
  </table>
</form>
  <div align="center"><a href="homeadmin.php">Menu Utama</a></div>
</body>
</html>
