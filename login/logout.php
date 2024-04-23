<?php
session_start();

// Hapus semua data sesi
$_SESSION = array();
session_destroy();

// Hapus cookie 'username' jika ada
if(isset($_COOKIE['username'])) {
    setcookie('username', '', time() - 3600, '/');
}

// Arahkan pengguna kembali ke halaman login
header("Location: ../index.php");
exit();
?>
