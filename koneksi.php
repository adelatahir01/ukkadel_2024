<?php
$hostname = "localhost"; // Nama server
$dbuser = "root";    // Nama pengguna database
$dbpass = "";    // Kata sandi database
$dbname = "ukk_adel"; // Nama database

// Membuat koneksi
$conn = mysqli_connect($hostname, $dbuser, $dbpass, $dbname);

// Memeriksa koneksi
// if (!$conn) {
    // die("Connection Failed: " . mysqli_connect_error());
// }

// echo "Connection Successful";
?>
