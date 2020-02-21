<?php
session_start();
//cek apakah user sudah login
if(!isset($_SESSION['user'])){
die("Anda belum login");//jika belum login jangan lanjut
}
//cek level user
// if($_SESSION['level']!="Admin"){
// die("Anda bukan admin");//jika bukan admin jangan lanjut
// }
?>
<html>
<head>
	<script type="text/javascript">
    //set timezone
    <?php date_default_timezone_set('Asia/Jakarta'); ?>
    //buat object date berdasarkan waktu di server
    var serverTime = new Date(<?php print date('Y, m, d, H, i, s, 0'); ?>);
    //buat object date berdasarkan waktu di client
    var clientTime = new Date();
    //hitung selisih
    var Diff = serverTime.getTime() - clientTime.getTime();    
    //fungsi displayTime yang dipanggil di bodyOnLoad dieksekusi tiap 1000ms = 1detik
    function displayServerTime(){
        //buat object date berdasarkan waktu di client
        var clientTime = new Date();
        //buat object date dengan menghitung selisih waktu client dan server
        var time = new Date(clientTime.getTime() + Diff);
        //ambil nilai jam
        var sh = time.getHours().toString();
        //ambil nilai menit
        var sm = time.getMinutes().toString();
        //ambil nilai detik
        var ss = time.getSeconds().toString();
        //tampilkan jam:menit:detik dengan menambahkan angka 0 jika angkanya cuma satu digit (0-9)
        document.getElementById("clock").innerHTML = (sh.length==1?"0"+sh:sh) + ":" + (sm.length==1?"0"+sm:sm) + ":" + (ss.length==1?"0"+ss:ss);
    }
</script>
<title>PPDB Kota Bandung Tahun Ajaran 2018/2019</title>
<style type="text/css">
ul.navbar {
list-style-type: none;
padding: 0;
margin: 0;
position: relative;
top: 0.5em;
left: 1em;
width: 11em;
}
ul.navbar li {
background: #e2e2e2;
margin: 0.5em 0;
border-right: 0.5em solid #225de8;
padding: 7px 7px 7px 7px;
}
ul.navbar a {
text-decoration: none;
}
address {
margin-top: 1em;
padding-top: 1em;
border-top: thin dotted
}
a:link,a:visited,a:active {
color: black;
text-decoration: none;
}
a:hover {
color: orange;
text-decoration: none;
}
.style1 {font-weight: bold}
.style2 {font-size: 15px; color: #000; background-color: #FFFF00; font-family: Verdana, Arial, Helvetica, sans-serif;}

.background {
    background-image: url("image/footer.jpg");
    background-attachment: fixed;
                background-size: 50%;
                background-repeat: repeat;
}
.header {
    background-image: url("image/header2.jpg");
    background-attachment: all;
                background-size: 100%;
                height: 140;
                background-repeat: no-repeat;
}
.left {
    background-image: url("image/login.jpg");
    background-attachment: fixed;
                background-size: 100%;
                height: 140;
                background-repeat: no-repeat;
                box-shadow: 0px 2px 7px 1px #404142;
}
.bgku {
                background-attachment: fixed;
                background-size: 150%;
                background-image: url("image/login.jpg");
                background-repeat: no-repeat;
            }

.margin {
	margin: 20px;
}

.flex-center {
                margin-top: 30px;
            }

.center{
	text-align: center;
	vertical-align: middle;

}
</style>
</head>
<body onload="setInterval('displayServerTime()', 1000);" class="margin bgku">
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
<tr style="box-shadow: 0px 5px 7px 0px #404142;">
<td width="10" bgcolor="white">&nbsp;</td>
<td width="230" height="120" bgcolor="white"><div align="center"><img src="image/logo.png" width="150" height="140" style="margin-left: 15px; " onclick=location.href="index.php"></div></td>
<td width="10" >&nbsp;</td>
<td width="1136" class="header"><div>
<p style="margin-left: 20px; margin-top: 30px;"><span class="shadow"><strong><font color="black" style="font-size: 40px;"> DINAS PENDIDIKAN </strong></span></p> </font>
<p class="style1"><span class="shadow"> <font color="black" style="font-size: 15px; margin-left: 25px;">Penerimaan Peserta Didik Baru Kota Bandung 2018/2019
</font> </span></p>
<span class="header"><br>
</span></div></td>
<td width="10" ><div align="center"><img src="image/logo.png" width="150" height="140" style="margin-left: 15px;" onclick=location.href="index.php"></div></td>
</tr>
<tr>
<td>&nbsp;</td>
<td height="50"><div align="center" style="margin-top: 20px; margin-bottom: 20px;"><strong>
Waktu Server <br> GTM+7:
<span id="clock"><?php print date('H:i:s'); ?></span>
</strong>
</div></td>
<td></td>
<td>&nbsp;</td>
<td width="400"><strong><center style="margin-top: 20px; margin-bottom: 20px;">Selamat Datang&nbsp;<font color="blue"><strong> <?=$_SESSION['nama']?></strong></font>&nbsp;|&nbsp;<a href="logout.php">
<font color="orange"><div style="margin-top: 4px;">Log Out >></div></font></a></td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td rowspan="4" valign="top"><table width="230" height="400" border="0" cellspacing="0" cellpadding="10">
<tr class="left">
<td valign="top"><ul class="navbar">
<div align="center"><font size="4.5" style="background-color: #d3d3d3; padding-bottom: 5px; padding-left: 24px; padding-right: 25px; padding-top: 5px;"><b>MENU UTAMA</b></font></div><br>
<li><a href="homeuser.php?page=homeuser" title="Beranda"><font color="black"> &nbsp;Beranda</font></a></li>
<li><a href="homeuser.php?page=lihat-data-pendaftar" title="Laporan Data Pendaftar"><font color="black"> &nbsp;Data Pendaftar</font></a></li>
<li><a href="homeuser.php?page=lihat-data-sekolah" title="Laporan Data Sekolah Dasar"><font color="black"> &nbsp;Data Sekolah Dasar</font></a></li>
<li><a href="homeuser.php?page=lihat-data-sekolah2" title="Laporan Data Sekolah Menengah Pertama"><font color="black"> &nbsp;Data Sekolah &nbsp;Menengah Pertama</font></a></li>
</ul></td>
</tr></table></td>
<td rowspan="4">&nbsp;</td>
<td rowspan="4" valign="top"><table width="80%" height="400" border="0" cellspacing="0" cellpadding="0">
<tr>
<td width="936" valign="top">
<?php
$page = (isset($_GET['page']))? $_GET['page'] : "main";
switch ($page) {
case 'lihat-data-sekolah' : include "lihat-data-sekolah.php"; break;
case 'lihat-data-sekolah2' : include "lihat-data-sekolah2.php"; break;
case 'lihat-data-pendaftar' : include "lihat-data-pendaftar.php"; break;
case 'main' :
default : include 'aboutuser.php';
}
?></td>
</tr>
</table></td>
<td rowspan="4">&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td height="36" colspan="5"class="background"><div align="right" style="margin:0 10px 0 0; vertical-align: bottom;" ><font color=black>
<marquee>
Development 2018 | &copy; Rifky Lovanto | Dika Meidaya Putra | Nisa Nurul Syamsu | Tsania Unzia Putri
</marquee>
</font></td>
</tr>
</table>
<div align="center"></div>
</body>
</html>