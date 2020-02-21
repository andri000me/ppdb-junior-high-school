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
<meta charset="utf-8">
<title>PPDB Kota Bandung Tahun Ajaran 2018/2019</title>
<!-- <link href="mycss/style.css" rel="stylesheet" type="text/css" /> -->
<style type="text/css">
<!--
body{
    font-family: sans-serif;
}
.style1 {font-weight: bold}

.bgku {
                background-attachment: fixed;
                background-size: 150%;
                background-image: url("image/login.jpg");
                background-repeat: no-repeat;
            }
.header {
    background-image: url("image/header2.png");
    background-attachment: all;
                background-size: 100%;
                height: 140;
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

div.polaroid {
    width: 284px;
    padding: 10px 10px 5px 10px;
    border: 1px solid #BFBFBF;
    background-color: white;
    box-shadow:3px 3px 2px #404142;
}

div.rotate_right {
    float: left;
    -ms-transform: rotate(7deg); /* IE 9 */
    -webkit-transform: rotate(7deg); /* Safari */
    transform: rotate(7deg);
}

div.rotate_left {
    float: left;
    -ms-transform: rotate(-8deg); /* IE 9 */
    -webkit-transform: rotate(-8deg); /* Safari */
    transform: rotate(-8deg);
}

* {margin:0; padding:0;}
 
 nav {
 text-align: left;
 width: 100.5%;
 font-family: script;
 } 
 nav ul {
 background:#35A9DB;
 padding: 0 0px;
 list-style: none;
 position: relative;
 display: inline-table;
 width: 100%;
 }
 nav ul li{
 float:left;
 }

 nav ul li:hover{
 background:#72afff;
 }

 nav ul li:hover a{
 color:#000;
 }

 nav ul li a{
 display: block;
 padding: 15px;
 color: #fff;
 text-decoration: none;
-->
</style>
</head>
<body onload="setInterval('displayServerTime()', 1000);" class="margin bgku">
    <div class="bgku"></div>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
<tr style="box-shadow: 0px 5px 7px 0px #404142;">
<td width="10" bgcolor="white">&nbsp;</td>
<td width="170" height="120" bgcolor="white"><div align="center"><img src="image/logo.png" width="150" height="140" onclick=location.href="index.php"></div></td>
<td width="10" bgcolor="white">&nbsp;</td>
<td width="1136" class="header" bgcolor="white"><div>
<p style="margin-left: 0px; margin-top: 30px;"><span class="shadow"><strong><font color="black" style="font-size: 40px; font-family: fantasy;"> DINAS PENDIDIKAN </strong></span></p> </font>
<p class="style1"><span class="shadow"> <font color="black" style="font-size: 15px; margin-left: 35px; font-family: cursive;">Penerimaan Peserta Didik Baru Kota Bandung 2018/2019
</font> </span></p>
<span class="header"><br>
</span></div></td>
<td width="10" bgcolor="white" colspan="3"><div align="center"><img src="image/logo.png" width="150" height="140" style="margin-left: 15px;" onclick=location.href="index.php"></div></td>
<td width="10" bgcolor="white">&nbsp;</td>
</tr>
<tr>
<td colspan="5">&nbsp;
<nav>
    <ul>
       <li><a href="index.php">Home</a></li>
       <li><a href="index.php?page=pendaftar">Data Peserta PPDB</a></li>
       <li><a href="index.php?page=sekolahd">Data SD</a></li>
       <li><a href="index.php?page=sekolahmp">Data SMP</a></li>
       <li><a href="index.php?page=about">About Us</a></li>
    </ul>
</nav>
</td>
</tr>
<tr>
    <td>&nbsp;</td>
</tr>
<tr class="center">
<td>
    </td>
<td rowspan="4" valign="top" style="padding-right: 20px;" >
<div align="center" style="margin-top: 20px; margin-bottom: 20px;"><strong style="font-size: 15px;">
Waktu Server <br> GMT+7:
<span id="clock"><?php print date('H:i:s'); ?></span>
</strong>
</div>
    <?php 
    include "default.php";
    ?>
</td>
<td rowspan="4">&nbsp;</td>
<td rowspan="4" valign="top"><table width="85%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td width="70%" valign="top">
<?php
$page = (isset($_GET['page']))? $_GET['page'] : "main";
switch ($page) {
case 'contact' : include "contact.php"; break;
case 'about' : include "about.php"; break;
case 'pendaftar' : include "lap-pendaftar2.php"; break;
case 'sekolahd' : include "lihat-data-sekolah22.php"; break;
case 'sekolahmp' : include "lihat-data-sekolah33.php"; break;
case 'pendaftar' : include "lap-pendaftar2.php"; break;
case 'main' :
default : include 'home.php';
}
?>
</td>
</tr></table></td>
<td rowspan="4">
   <!--  <div class="polaroid rotate_right" style="margin-top: 30px; margin-bottom: 20px;">
  <img src="image/polaroid1.jpg" alt="Pulpit rock" width="284" height="213">
  <p class="caption">Selalu Tersenyum Adalah Cara Terbaik Untuk Berbahagia</p>
</div> -->
</td>
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
<td></td>
<td>&nbsp;</td>
</tr>
<tr>
<td height="36" colspan="6"class="background" bgcolor="#3d87ff"><div align="right" style="margin:0 10px 0 0; font-size: 12px;" ><font color=black>
<marquee>
Development 2018 | &copy; Rifky Lovanto | Dika Meidaya Putra | Nisa Nurul Syamsu | Tsania Unzia Putri
</marquee>
</font></td>
</tr>
</table>
</body>
</html>