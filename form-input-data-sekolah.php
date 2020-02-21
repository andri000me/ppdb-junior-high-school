<div style="border:1px solid rgb(238,238,238); padding:10px; overflow:auto; width:138%; height:380; background-color: white;">
<form action="homeadmin.php?page=input-data-sekolah" method="POST" name="form-input-data-sekolah" enctype="multipart/form-data">
<table width="80%" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td width="70%">&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td width="70%"><font color="blue" size="3" face="arial"><b>Form Input Data Sekolah Dasar</b></font></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td align="right" width="70%" height="32"><input type="button" value="Back To Home" onclick=location.href="homeadmin.php" title="kembali ke homeadmin">&nbsp;</td>
</tr>
<tr>
<td width="20" height="36">&nbsp;</td>
<td width="165">No Sekolah</td>
<td><input type="text" name="nosd" size="20" maxlength="15" onkeypress="return hanyaAngka(event)"> </td>
</tr>
</tr>
<tr>
<td width="20" height="36">&nbsp;</td>
<td width="165">Nama Sekolah</td>
<td><input type="text" name="sekolahasal" size="40" maxlength="40"> </td>
</tr>
<tr>
<td height="36">&nbsp;</td>
<td>Kepala Sekolah</td>
<td><input type="text" name="kepala" size="30" maxlength="30"></td>
</tr>
<tr>
<td height="36">&nbsp;</td>
<td>Alamat</td>
<td><input type="text" name="alamat" size="50" maxlength="50"></td>
</tr>
<tr>
<td height="36">&nbsp;</td>
<td>Telp</td>
<td><input type="text" name="telp" size="20" maxlength="15" onkeypress="return hanyaAngka(event)"></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td width="589" height="32">&nbsp;</td>
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
<script type="text/javascript">
	function hanyaAngka(evt) {
      var charCode = (evt.which) ? evt.which : event.keyCode
       if (charCode > 31 && (charCode < 48 || charCode > 57))
 
        return false;
      return true;
    }
</script>