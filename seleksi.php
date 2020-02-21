<?php
// session_start();
include "koneksi.php";
$total = $_POST["total"];
if ($total >= 20) {
	echo "<input type="text" name="status" readonly="readonly" value="Diterima">";
}else{
	echo "<input type="text" name="status" readonly="readonly" value="Tidak Diterima">";
}
?>