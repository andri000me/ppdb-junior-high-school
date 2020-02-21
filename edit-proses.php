<?php
//mulai proses edit data

//cek dahulu, jika tombol simpan di klik
if(isset($_POST['simpan'])){
	
	//inlcude atau memasukkan file koneksi ke database
	include('config.php');
	
	//jika tombol tambah benar di klik maka lanjut prosesnya
	$user			= $_POST['user'];	//membuat variabel $id dan datanya dari inputan hidden id
	$nama		= $_POST['nama'];	//membuat variabel $nis dan datanya dari inputan NIS
	$password		= $_POST['password'];	//membuat variabel $nama dan datanya dari inputan Nama Lengkap
	$level	= $_POST['level'];	//membuat variabel $kelas dan datanya dari inputan dropdown Kelas
	
	//melakukan query dengan perintah UPDATE untuk update data ke database dengan kondisi WHERE siswa_id='$id' <- diambil dari inputan hidden id
	$update = mysql_query("UPDATE login SET nama='$nama', password='$password', level='$level' WHERE user='$user'") or die(mysql_error());
	
	//jika query update sukses
	if($update){
		
		echo 'Data berhasil di simpan! ';		//Pesan jika proses simpan sukses
		echo '<a href="homeadmin.php">Kembali</a>';	//membuat Link untuk kembali ke halaman edit
		
	}else{
		
		echo 'Gagal menyimpan data! ';		//Pesan jika proses simpan gagal
		echo '<a href="edit.php?nosd='.$nosd.'">Kembali</a>';	//membuat Link untuk kembali ke halaman edit
		
	}

}else{	//jika tidak terdeteksi tombol simpan di klik

	//redirect atau dikembalikan ke halaman edit
	echo '<script>window.history.back()</script>';

}
?>