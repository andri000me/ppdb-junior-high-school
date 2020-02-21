<?php
  //Memanggil file koneksi 
  require_once("config.php"); 
   
  //SQL Statement untuk menampilkan record yang akan di edit 
  $sql="SELECT *FROM login WHERE user='".$_GET['user']."'"; 
  $result=mysql_query($sql)or die(mysql_error()); 
  $row=mysql_fetch_array($result); 
   
  //Memproses jika ditekan tombol Edit 
  If((isset($_POST['Submit']))&&($_POST['Submit']=='Edit')){  
   
  //Update record pada tabel mahasiswa 
  $sql="UPDATE login SET nama='".$_POST['nama'].
  "',"."password='".$_POST['password'].
  "',level='".$_POST['level'].
  "'". "WHERE user='".$_POST['user']."'"; 
 
  $result=mysql_query($sql) or die(mysql_error()); 
  if($result){ 
    echo"<script>alert('Data sudah ter-update');</script>"; 
    echo"<script>location='homeadmin.php?page=homeadmin';</script>"; 
  } 
  } 
?>
<html>
<head>
<title>EDIT DATA PENGGUNA</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
<form name="form1" method="post" action="<?php $_SERVER['PHP_SELF']; ?>" onSubmit="return cek_data()"> 
  <table width="600" border="1 black" align="center" cellpadding="15" cellspacing="0" bgcolor="white">
    <tr>
      <td height="50" align="center" bgcolor="#5697ff"><strong><font color="#FFFFFF">EDIT DATA PENGGUNA</font></strong></td>
    </tr>
    <tr>
      <td><table width="100%" border="0" align="center" cellpadding="5" cellspacing="0" bgcolor="#FFFFFF">
          <tr>
            <td width="99">Username</td>
            <td width="9">:</td>
            <td width="287"><input name="user" type="text" size="25" maxlength="20" value="<?php echo $row['user']?>" readonly><font color="red">&nbsp;&nbsp;* Tidak dapat diganti</font></td></tr>
          <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input name="nama" type="text" id="nama" size="30" maxlength="25" value="<?php echo $row['nama']?>"></td></tr>       
          <tr>
          <tr>
            <td>Password</td>
            <td>:</td>
            <td><input name="password" type="password" id="password" size="30" maxlength="25" value="<?php echo $row['password']?>"></td></tr>
          <tr>
          	<td>Level</td>
          	<td>:</td>
          	<td>
          		<input name="level" type="text" id="level" size="30" maxlength="25" value="<?php echo $row['level']?>" readonly>
          	</td>
          </tr>
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


<?php
function fungsiku($n)
{
  if ($n === 0) {
    return 1;
  } else{
    return $n * fungsiku($n-1);
  }

  echo "Hasil = ". fungsiku(3);
}
?>

A. <a href="profil.html">PROFIL</a>
B. <a href="src/profil.html">PROFIL</a>
C. <a href="main/profil.html">PROFIL</a>
D. <a href="../src/profil.html">PROFIL</a>
E. <a href="img/profil.html">PROFIL</a>

A. <head>
  <style>
    table{
        border-collapse: collapse;
        width: 100%;
      }
      th, td{
        text-align: left;
        padding: 8px;
      }
      tr:nth-child(odd){
        background-color: #F2F2F2;
        color: white;
      }
  </style>
</head>

B. <head>
    <style>
      table{
        border-collapse: collapse;
        width: 100%;
      }
      th, td{
        text-align: left;
        padding: 8px;
      }
      td{
        background-color: #4CAF50;
        color: white;
      }
    </style>
  </head>

C. <head>
  <style>
    table{
        border-collapse: collapse;
        width: 100%;
      }
      th, td{
        text-align: left;
        padding: 8px;
      }
      tr{
        background-color: #4CAF50;
        color: white;
      }
  </style>
</head>

D. <head>
  <style>
    table{
        border-collapse: collapse;
        width: 100%;
      }
      th, td{
        text-align: left;
        padding: 8px;
      }
      tr:nth-child(even){
        background-color: #F2F2F2;
        color: white;
      }
  </style>
</head>