<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Talent</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        .center {
            margin: 10px auto;
            display: block;
            text-align: center;
        }

        table {
            margin-top: 20px;
            margin-bottom: 20px;
            padding: 50px;
        }

        .btn-margin {
            margin-left: 10px;
        }
        .navbar-custom {
            background-color: #1C1678; /* Warna latar belakang navbar */
        }

        .navbar-custom .navbar-brand,
        .navbar-custom .navbar-nav .nav-link {
            color: #ffffff; /* Warna teks navbar */
        }

        .navbar-custom .navbar-nav .nav-link:hover {
            color: #A3FFD6; /* Warna teks saat dihover */
        }
    </style>
</head>
<body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">BMC</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
    </ul>
  </div>
</nav>
    </header>
    <div class="alert alert-primary" role="alert" align="center"><h2>FORM ANGGOTA</h2></div>
    <table class="table table-bordered" align="center">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>GENDER</th>
            <th>ALAMAT</th>
        </tr>
        <?php
        include '../koneksi.php';
        $mahasiswa = mysqli_query($koneksi, "SELECT * from mahasiswa");
        $no = 1;
        foreach ($mahasiswa as $row) {
            $jenis_kelamin = $row['jenis_kelamin'] == 'P' ? 'Perempuan' : 'Laki Laki';
            echo "<tr>
                <td>$no</td>
                <td>" . $row['nama'] . "</td>
                <td>" . $jenis_kelamin . "</td>
                <td>" . $row['alamat'] . "</td>
                <td>
                    <a href='edit-admin.php?id_mhs=$row[id_anggota]' class='btn btn-sm btn-warning'>Edit</a>
                    <a href='delete.php?id_mhs=$row[id_anggota]' class='btn btn-sm btn-danger'>Delete</a>
                </td>
                </tr>";
            $no++;
        }
        
        ?>
    </table>
    <div class="center">
        <a href="admin-input.php" type="button" class="btn btn-outline-primary">Input data</a>
        <a href="cetak.php" type="button" class="btn btn-outline-success">Cetak</a>
        <a href="dasbord-admin.php"class='btn btn-sm btn-danger'>Kembali</a>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>