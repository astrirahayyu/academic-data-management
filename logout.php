<?php
//mengaktifkan session
session_start();

//menghapuskan semua session
session_destroy();

//mengalihkan halaman sambil menirim pesan logout
header("location:login.php?pesan=logout");
?>