    <?php
    require '../koneksi.php';

    $username = $_POST["username"];
    $password = $_POST["password"];

    // Query untuk login
    $query = "SELECT * FROM tbl_admin WHERE username = '$username' AND password = '$password'";

    $result = mysqli_query($koneksi, $query);

    if (mysqli_num_rows($result) > 0) {
        header("Location: dasbord-admin.php");
    } else {
        echo "<center><h1>Email atau password anda salah</h1></center>";
        echo '<button><strong><a href="login-admin.php">Login</a></strong></button>';
    }
    ?>