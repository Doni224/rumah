<?php
if($_POST['kirim']){
	$admin = 'zizam2340@gmail.com'; //ganti email dg email admin (email penerima pesan)
	
	$nama	= htmlentities($_POST['nama']);
	$email	= htmlentities($_POST['email']);
	$komentar	= htmlentities($_POST['komentar']);
	
	$headers =  'MIME-Version: 1.0' . "\r\n"; 
	$headers .= 'From: Your name <zizam2340@gmail.com>' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
	
	if(mail($nama, $email, $komentar, $headers)){
		echo 'SUCCESS: Pesan anda berhasil di kirim. <a href="index.html">Kembali</a>';
	}else{
		echo 'ERROR: Pesan anda gagal di kirim silahkan coba lagi. <a href="index.html">Kembali</a>';
	}
}else{
	header("Location: rumah.php");
}
?>