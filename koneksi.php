<?php
//konfigurasi database
$host = "localhost";
$user = "root";
$password = "";
$database = "db_users";

//perintah php untuk akses ke database
$koneksi = mysqli_connect ($host,$user,$password,$database);

if (!$koneksi){
    die("Koneksi gagal :".mysqli_connect-error());
} else {
    echo "Koneksi Berhasil";
}
?>