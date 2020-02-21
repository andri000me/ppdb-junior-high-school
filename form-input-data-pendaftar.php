<div style="border:1px solid rgb(238,238,238); padding:10px; overflow:auto; width:138%; height:380; background-color: white;">
<form action="homeadmin.php?page=input-data-pendaftar" method="POST" name="form-input-data-pendaftar" enctype="multipart/form-data">
<table width="80%" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td width="70%">&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td width="70%"><font color="blue" size="3" face="arial"><b>Form Input Data Pendaftar</b></font></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td align="right" width="70%" height="32"><input type="button" value="Back To Home" onclick=location.href="homeadmin.php" title="kembali ke homeadmin">&nbsp;</td>
</tr>
<tr>
<td width="20" height="36">&nbsp;</td>
<td width="165">NIS</td>
<td><input type="text" name="nis" size="20" maxlength="15" onkeypress="return hanyaAngka(event)"> </td>
</tr>
<tr>
<td width="20" height="36">&nbsp;</td>
<td width="165">Nama Siswa</td>
<td><input type="text" name="nama" size="45" maxlength="40"> </td>
</tr>
<tr>
<td height="36">&nbsp;</td>
<td>Sekolah Asal</td>
<td>
  <select name="sekolahasal">
      <?php
      include "koneksi.php";
      $query = "select * from sekolah";
      $hasil = mysql_query($query);
      while ($qtabel = mysql_fetch_assoc($hasil))
      {
        echo '<option value="'.$qtabel['sekolahasal'].'">'.$qtabel['sekolahasal'].'</option>';        
      }
      ?>
    </select>
</td>
</tr>
<tr>
<td height="36">&nbsp;</td>
<td>Sekolah Tujuan</td>
<td>
<select name="sekolahtujuan">
      <?php
      include "koneksi.php";
      $query = "select * from sekolahsmp";
      $hasil = mysql_query($query);
      while ($qtabel = mysql_fetch_assoc($hasil))
      {
        echo '<option value="'.$qtabel['sekolahtujuan'].'">'.$qtabel['sekolahtujuan'].'</option>';        
      }
      ?>
    </select>
</td>
</td>
</tr>
<tr>
<td height="36">&nbsp;</td>
<td>Nilai MTK</td>
<td><input type="number" min="0" max="10" step="1" name="nilaimtk" onkeyup="sum();" id="txt1"></td>
</tr>
<tr>
<td height="36">&nbsp;</td>
<td>Nilai IPA</td>
<td><input type="number" min="0" max="10" step="1" name="nilaiipa" onkeyup="sum();" id="txt2"></td>
</tr>
<tr>
<td height="36">&nbsp;</td>
<td>Nilai Indonesia</td>
<td><input type="number" min="0" max="10" step="1" name="nilaiindo" onkeyup="sum();" id="txt3"></td>
</tr>
<tr>
<td height="36">&nbsp;</td>
<td>Nilai Total</td>
<td><input type="text" name="total" size="5" maxlength="3" id="txt4" readonly="readonly" onkeypress="return hanyaAngka(event)"></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input type="submit" name="Submit" value="Submit">&nbsp;&nbsp;&nbsp;
<input type="reset" name="reset" value="Reset"></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td width="589" height="32">&nbsp;</td>
</tr>
</table>
</form>
</div>
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
$('#numberbox').keyup(function(){
  if ($(this).val() > 10){
    alert("Maksimal 10");
    $(this).val('10');
  }
});
</script>