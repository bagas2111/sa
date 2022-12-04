<?php 
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'config.php';

// menangkap data yang dikirim dari form login
$email = $_POST['email'];
$password = md5($_POST['password']);


// menyeleksi data user dengan email dan password yang sesuai
$login = mysqli_query($koneksi,"SELECT * FROM user WHERE email='$email' AND password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if($cek > 0){

	$data = mysqli_fetch_assoc($login);

	// cek jika user login sebagai admin
	if($data['level']=="admin"){

		// buat session login dan username
		$_SESSION['email'] = $email;
		$_SESSION['level'] = "admin";
		// alihkan ke halaman dashboard admin
		header("location:admin/edit-kamar.php");

	// cek jika user login sebagai pegawai
	}else if($data['level']=="resepsionis"){
		// buat session login dan email
		$_SESSION['email'] = $email;
		$_SESSION['level'] = "resepsionis";
		// alihkan ke halaman dashboard pegawai
		header("location:resepsionis/yea.php");

	// cek jika user login sebagai pengurus
	}else if($data['level']=="customer"){
		// buat session login dan email
		$_SESSION['email'] = $email;
		$_SESSION['level'] = "customers";
		// alihkan ke halaman dashboard pengurus
		header("location:kamar.php");

	}else{

		// alihkan ke halaman login kembali
		header("location:index.php?pesan=gagal");
	}

	
}else{
	header("location:index.php?pesan=gagal");
}



?>