<?php
//memulai proses hapus data
 
//cek dahulu, apakah benar URL sudah ada GET id -> hapus.php?id=siswa_id
if(isset($_GET['nosmp'])){
	
	//inlcude atau memasukkan file koneksi ke database
	include('config.php');
	
	//membuat variabel $id yg bernilai dari URL GET id -> hapus.php?id=siswa_id
	$nosmp = $_GET['nosmp'];
	
	//cek ke database apakah ada data siswa dengan siswa_id='$id'
	$cek = mysql_query("SELECT nosmp FROM sekolahsmp WHERE nosmp='$nosmp'") or die(mysql_error());
	
	//jika data siswa tidak ada
	if(mysql_num_rows($cek) == 0){
		
		//jika data tidak ada, maka redirect atau dikembalikan ke halaman beranda
		echo '<script>window.history.back()</script>';
	
	}else{
		
		//jika data ada di database, maka melakukan query DELETE table siswa dengan kondisi WHERE siswa_id='$id'
		$del = mysql_query("DELETE FROM sekolahsmp WHERE nosmp='$nosmp'");
		
		//jika query DELETE berhasil
		if($del){
			//Pesan jika proses hapus berhasil
			?>
			<script language="JavaScript">
			alert('Data sekolah menengah pertama berhasil dihapus !');
			document.location='homeadmin.php';
		</script>
		<?php
			
		}else{
			?>
			<script language="JavaScript">
			alert('Data gagal dihapus !');
			document.location='homeadmin.php';
		</script>
		<?php
		
		}
		
	}
	
}else{
	
	//redirect atau dikembalikan ke halaman beranda
	echo '<script>window.history.back()</script>';
	
}
?>