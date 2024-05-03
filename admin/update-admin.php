<?php
include '../koneksi.php';

$id_anggota =$_POST['id_anggota'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];


$query = "UPDATE mahasiswa SET nama='$nama', jenis_kelamin='$jenis_kelamin', alamat='$alamat' WHERE id_anggota='$id_anggota'";
mysqli_query($koneksi, $query);


header("location:daftar-anggota.php");
?>