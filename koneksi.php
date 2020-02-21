<?php
$Open = mysql_connect("localhost","root","");
if (!$Open){
die ("Koneksi ke Engine MySQL Gagal !<br>");
}
else{
print ("");
}
$Koneksi = mysql_select_db("ppdb");
if (!$Koneksi){
die ("Koneksi ke Database Gagal !");
}
else{
print ("");
}
?>