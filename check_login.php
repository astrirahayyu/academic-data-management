<?php
session_start();
//menhubungkan ke database
include 'koneksi_db.php';

//menangkapparameter yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];

//mencari data username dan passowrd yang sesuai dengan database
$data = mysqli_query($connection, "SELECT * FROM users WHERE username='$username' and password='$password'");

//menhitung jumlah data yang ditemukan
$count = mysqli_num_rows($data);

if($count > 0){
	$_SESSION['username'] = $username;
	$_SESSION['password'] = $password;
	$_SESSION['status'] = "login";
	header("location:index.php");
	
}else{
	header("location:login.php?pesan=gagal");


}
?>
