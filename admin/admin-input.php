<!DOCTYPE html>
<html>
    <head>
        <title>Membuat Form Inputan Data</title>
        <link rel="stylesheet" href="styleinput.css">
    </head>
    <body>
        <form method="post" action="simpan.php">
            <table>
                <tr><td>ID</td><td><input type="text" onkeyup="isi_otomatis()" name="id_anggota"></td>
                <tr><td>Nama</td><td><input type="text" name="nama"></td>
                <tr><td>JENIS KELAMIN</td><td>
                <input type="radio" name="jenis_kelamin" value="L">Laki laki
                <input type="radio" name="jenis_kelamin" value="P">Perempuan
                </td> </tr>
                    <tr><td>ALAMAT</td><td><input type="text" name="alamat"></td></tr>
                    <tr><td colspan="2"><button type="submit" value="simpan">SIMPAN</button></td></tr>
                    </tr>
                </tr>
            </table>
        </form>
    </body>
</html>