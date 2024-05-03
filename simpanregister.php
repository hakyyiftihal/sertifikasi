<?php
require 'koneksi.php'; // Pastikan file koneksi.php tersedia dan benar

$nim = $_POST["username"];
$nim = $_POST["password"];


// Query untuk register
$query = "INSERT INTO tbl_admin ( username, password)
          VALUES ('$username','$password')";

if(mysqli_query($koneksi, $query)){
    header("Location: admin/dasbord-admin.php");
} else {
    echo "Pendaftaran Gagal: " . mysqli_error($koneksi);
}
?>

