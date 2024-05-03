<?php
include '../koneksi.php';
// menyimpan data kedalam variabel
$nama =$_POST['nama'];
$jenis_kelamin =$_POST['jenis_kelamin'];
$alamat =$_POST['alamat'];

//query SQL untuk insert data
$query="INSERT INTO mahasiswa SET nama='$nama',jenis_kelamin='$jenis_kelamin',alamat='$alamat'";
mysqli_query($koneksi,$query);

//mengalihkan ke halaman index.php
header("location:daftar-anggota.php");
 
?>