<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar and Sidebar</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Style untuk sidebar */
        .sidebar {
            height: 100%;
            width: 150px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #333;
            padding-top: 20px;
            color: #fff;
            z-index: 2; /* Menetapkan z-index yang lebih tinggi dari pada navbar */
            margin-top: 100px; /* Menambahkan margin atas agar tidak menutupi bagian atas */
            padding-right: 20px; /* Menambahkan padding agar tidak menutupi bagian kanan */
            height: calc(100vh - 50px); /* Mengatur tinggi sidebar */
        }

        .sidebar a {
            padding: 10px 15px;
            text-decoration: none;
            font-size: 18px;
            color: #fff;
            display: block;
        }

        .sidebar a:hover {
            background-color: #555;
        }

        /* Style untuk konten */
        .content {
            padding: 20px;
            display: flex;
            justify-content: center; /* Menengahkan secara horizontal */
            align-items: center; /* Menengahkan secara vertical */
            height: calc(100vh - 100px); /* Mengatur tinggi konten */
            margin-left: 150px; /* Mengatur margin kiri untuk mengakomodasi sidebar */
            background-color: #929AAB;
            color: #ffff;
        }

        /* Style untuk navbar */
        .navbar {
            z-index: 1; /* Membuat navbar tampil di atas sidebar */
            height: 100px; /* Mengatur tinggi navbar */
            line-height: 50px; /* Mengatur jarak antara teks dan border atas navbar */
            color: #000; /* Mengatur warna teks navbar menjadi hitam */
            position: fixed;
            width: 100%; /* Menjadikan navbar penuh lebar */
        }
        
        /* Style untuk foto profil */
        .profile-image {
            height: 100px; /* Mengatur tinggi foto profil */
            width: auto; /* Menyesuaikan lebar secara otomatis */
            border-radius: 50%;
        }

        /* Style untuk tulisan pada navbar berada di tengah */
        .navbar-nav {
            text-align: center;
            width: 100%;
        }

        .navbar-nav .nav-item {
            float: none;
            display: inline-block;
        }
        
        .nav-link{
          text-align:center;
        }
        
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php"><img src="logo.jpg" alt="Profile Image" class="profile-image ml-2">
    <span>BMC CLUB</span>
  </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="profil.php">PROFILE <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="visi.php">VISI DAN MISI</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="produk.php">PRODUK KAMI</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="kontak.php">KONTAK KAMI</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="about.php">ABOUT US</a>
            </li>
        </ul>
    </div>
</nav>

<!-- Sidebar -->
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-auto">
            <div class="sidebar">
            <a href="#">Artikel</a>
                <a href="event.php">Event</a>
                <a href="galeri.php">Galery Foto</a>
                <a href="klien.php">Klien kami</a>
                <a href="admin/login-admin.php">Login</a>
                <a href="register.php"></a>
            </div>
          </div>
        </div>
    </div>
</div>



<!-- Bootstrap JS (Optional) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
