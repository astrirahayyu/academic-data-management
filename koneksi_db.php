<?php
$connection = mysqli_connect("localhost:3307", "root", "", "academic_data_management");

if ($connection){
	echo "sukses terhubung ke MySQL";
}else{
	echo "Gagal terhubung ke MySQL: " . PHP_EOL;
}
?>