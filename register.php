<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="style2.css">
    <title>Hello, world!</title>
  </head>
  <body>
    <h1>DAFTAR BARU</h1>
    <form method="post" action="simpanregister.php">
    <div class="form-group">
        <label for="name">Nama atau Username</label>
        <input type="text" class="form-control" id="name" name="username" placeholder="Username">
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
    </div>
    <button type="submit" class="btn btn-primary">Daftar</button> 
</form>
