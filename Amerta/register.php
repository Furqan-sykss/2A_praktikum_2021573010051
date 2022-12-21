<?php
//session_start();
if (!empty($_SESSION['username'])) {
    header("location:login");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Amerta - Mari Menambah Ilmu Pengetahuanmu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<body class="text-light" style="background-color: #004D40 ;">
    <H1 style="text-align:center; margin-top:50px;"><i class="bi bi-newspaper fs-1"><br></i> Amerta</H1>
    <h4 style="text-align:center; margin-top:40px;">Silahkan Daftarkan Akunmu</h4>
    <form action="proses/proses_register.php" method="POST">
        <table align="center" style="margin-top:25px;">
            <tr>
                <td class="mb-3">Nama</td>
                <td><input type="text" class="form-control" id="floatingInput" placeholder="Your Name" name="nama" required></td>
            </tr>
            <tr>
                <td>Username</td>
                <td><input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="username" required>
            </tr>
            <tr hidden>
                <td>Level</td>
                <td><input type="text" class="form-control" id="floatingInput" placeholder="password" name="level"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" class="form-control" id="floatingInput" placeholder="Password" name="password" required></td>
            </tr>
            <tr>
                <td>No HP</td>
                <td><input type="number" class="form-control" id="floatingInput" placeholder="No HP" name="nohp"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" class="form-control" id="floatingInput" placeholder="Alamat" name="alamat"></td>
            </tr>
            <tr>

                <td><button style="margin-top:30px;" type="submit" class=" btn btn-primary" name="input_register_validate" value="1234">Daftar</button></td>
            </tr>
</body>

</html>