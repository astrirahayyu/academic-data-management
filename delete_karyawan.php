<?php 
include_once 'koneksi_db.php';

$nip = $_GET['nk'];

//Delete user from database based on id
$result = mysqli_query($connection, "DELETE FROM karyawan WHERE nk = '$nk'");

header("Location: index.php");

?>