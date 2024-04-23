<?php
session_start();

include 'koneksi.php';

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Lakukan sanitisasi input untuk menghindari serangan SQL Injection
    $username = mysqli_real_escape_string($kon, $username);
    $password = mysqli_real_escape_string($kon, $password);

    // Query untuk memeriksa apakah username dan password cocok
    $sql = "SELECT id_petugas, nama_petugas FROM petugas WHERE username='$username' AND password='$password'";
    $res = mysqli_query($kon, $sql);

    // Periksa jumlah baris hasil query
    $count = mysqli_num_rows($res);

    if ($count == 1) {
        $data_login = mysqli_fetch_assoc($res);

        $_SESSION['id_petugas'] = $data_login['id_petugas'];
        $_SESSION['nama_petugas'] = $data_login['nama_petugas'];

        // Jika remember me dicentang, set cookie
        if(isset($_POST['remember']) && $_POST['remember'] == 'on') {
            setcookie('username', $username, time() + (86400 * 30), "/");
        } else {
            setcookie('username', '', time() - 3600, "/");
        }
        header("Location: ../aset/dashboard.php");
        exit(); 
    } else {
        $_SESSION['error'] = 'Username atau password salah!';
        header("Location: index.php");
        exit(); 
    }
}
?>
