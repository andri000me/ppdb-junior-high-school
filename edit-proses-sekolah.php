<?php
//mulai proses edit data

//cek dahulu, jika tombol simpan di klik
if(isset($_POST['simpan'])){
	
	//inlcude atau memasukkan file koneksi ke database
	include('config.php');
	
	//jika tombol tambah benar di klik maka lanjut prosesnya
	$nosd			= $_POST['nosd'];	//membuat variabel $id dan datanya dari inputan hidden id
	$sekolahasal		= $_POST['sekolahasal'];	//membuat variabel $nis dan datanya dari inputan NIS
	$kepala		= $_POST['kepala'];	//membuat variabel $nama dan datanya dari inputan Nama Lengkap
	$alamat	= $_POST['alamat'];	//membuat variabel $kelas dan datanya dari inputan dropdown Kelas
	$telp	= $_POST['telp'];
	
	//melakukan query dengan perintah UPDATE untuk update data ke database dengan kondisi WHERE siswa_id='$id' <- diambil dari inputan hidden id
	$update = mysql_query("UPDATE sekolah SET sekolahasal='$sekolahasal', kepala='$kepala', alamat='$telp', alamat='$telp' WHERE nosd='$nosd'") or die(mysql_error());
	
	//jika query update sukses
	if($update){
		
		echo 'Data SD berhasil di simpan! ';		//Pesan jika proses simpan sukses
		echo '<a href="homeadmin.php">Kembali</a>';	//membuat Link untuk kembali ke halaman edit
		
	}else{
		
		echo 'Gagal menyimpan data! ';		//Pesan jika proses simpan gagal
		echo '<a href="edit.php?user='.$id.'">Kembali</a>';	//membuat Link untuk kembali ke halaman edit
		
	}

}else{	//jika tidak terdeteksi tombol simpan di klik

	//redirect atau dikembalikan ke halaman edit
	echo '<script>window.history.back()</script>';

}
?>