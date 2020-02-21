<?php
  //Memanggil file koneksi 
  require_once("config.php"); 
   
  //SQL Statement untuk menampilkan record yang akan di edit 
  $sql="SELECT *FROM pendaftar WHERE nis='".$_GET['nis']."'"; 
  $result=mysql_query($sql)or die(mysql_error()); 
  $row=mysql_fetch_array($result); 
   
  //Memproses jika ditekan tombol Edit 
  If((isset($_POST['Submit']))&&($_POST['Submit']=='Edit')){  
   
  //Update record pada tabel mahasiswa 
  $sql="UPDATE pendaftar SET nama='".$_POST['nama'].
 "',"."sekolahasal='".$_POST['sekolahasal'].
  "',sekolahtujuan='".$_POST['sekolahtujuan'].
   "',"."nilaimtk='".$_POST['nilaimtk'].
    "',"."nilaiipa='".$_POST['nilaiipa'].
     "',"."nilaiindo='".$_POST['nilaiindo'].
      "',"."total='".$_POST['total'].
       "',"."status='".$_POST['status'].
  "'". "WHERE nis='".$_POST['nis']."'"; 
 
  $result=mysql_query($sql) or die(mysql_error()); 
  if($result){ 
    echo"<script>alert('Data sudah ter-update');</script>"; 
    echo"<script>location='homeadmin.php?page=homeadmin';</script>"; 
  } 
  } 
?>
<html>
<head>
<title>EDIT DATA PESERTA PPDB</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
<form name="form1" method="post" action="<?php $_SERVER['PHP_SELF']; ?>" onSubmit="return cek_data()"> 
  <table width="600" border="1 black" align="center" cellpadding="15" cellspacing="0" bgcolor="white">
    <tr>
      <td height="50" align="center" bgcolor="#5697ff"><strong><font color="#FFFFFF">EDIT DATA PESERTA PPDB</font></strong></td>
    </tr>
    <tr>
      <td><table width="100%" border="0" align="center" cellpadding="5" cellspacing="0" bgcolor="#FFFFFF">
          <tr>
            <td width="99">No Induk Siswa</td>
            <td width="9">:</td>
            <td width="387"><input name="nis" type="text" size="15" maxlength="20" value="<?php echo $row['nis']?>" readonly><font color="red">&nbsp;&nbsp;* Tidak dapat diganti</font></td></tr>
          <tr>
            <td>Nama Lengkap</td>
            <td>:</td>
            <td><input name="nama" type="text" id="nama" size="25" maxlength="25" value="<?php echo $row['nama']?>"></td></tr>       
          <tr>
          <tr>
            <td>Asal Sekolah</td>
            <td>:</td>
            <td>
              <input name="sekolahasal" type="text" id="sekolahasal" size="25" maxlength="25" value="<?php echo $row['sekolahasal']?>" readonly><font color="red">&nbsp;&nbsp;* Tidak dapat diganti</font>
            </td></tr>
          <tr>
            <td>Sekolah Tujuan</td>
            <td>:</td>
            <td>
            <input name="sekolahtujuan" type="text" id="sekolahtujuan" size="25" maxlength="25" value="<?php echo $row['sekolahtujuan']?>" readonly><font color="red">&nbsp;&nbsp;* Tidak dapat diganti</font>
            </td></tr>
          <tr>
            <td>Nilai MTK</td>
            <td>:</td>
            <td><input name="nilaimtk" type="text" size="5" maxlength="2" onkeyup="sum();" id="txt1" onkeypress="return hanyaAngka(event)" value="<?php echo $row['nilaimtk']?>" readonly><font color="red">&nbsp;&nbsp;* Tidak dapat diganti</font></td></tr>
          <tr>
            <td>Nilai IPA</td>
            <td>:</td>
            <td><input name="nilaiipa" type="text" size="5" maxlength="2" onkeyup="sum();" id="txt2" onkeypress="return hanyaAngka(event)" value="<?php echo $row['nilaiipa']?>" readonly><font color="red">&nbsp;&nbsp;* Tidak dapat diganti</font></td></tr>
          <tr>
            <td>Nilai Indonesia</td>
            <td>:</td>
            <td><input name="nilaiindo" type="text" size="5" maxlength="2" onkeyup="sum();" id="txt3" onkeypress="return hanyaAngka(event)" value="<?php echo $row['nilaiindo']?>" readonly><font color="red">&nbsp;&nbsp;* Tidak dapat diganti</font></td></tr>
          <tr>
            <td>Nilai Total</td>
            <td>:</td>
            <td><input name="total" type="text" size="5" maxlength="3" readonly id="txt4" value="<?php echo $row['total']?>"></td></tr>
          <tr>
            <td>Status</td>
            <td>:</td>
            <td>
              <input name="status" type="text" id="status" size="25" maxlength="25" value="<?php echo $row['status']?>" readonly>
            </td></tr>
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
<script>
function sum() {
      var txtFirstNumberValue = document.getElementById('txt1').value;
      var txtSecondNumberValue = document.getElementById('txt2').value;
      var txtThirdNumberValue = document.getElementById('txt3').value;
      var result = parseInt(txtFirstNumberValue) + parseInt(txtSecondNumberValue) + parseInt(txtThirdNumberValue);
      if (!isNaN(result)) {
         document.getElementById('txt4').value = result;
      }
}
function hanyaAngka(evt) {
      var charCode = (evt.which) ? evt.which : event.keyCode
       if (charCode > 31 && (charCode < 48 || charCode > 57))
 
        return false;
      return true;
    }
    </script>