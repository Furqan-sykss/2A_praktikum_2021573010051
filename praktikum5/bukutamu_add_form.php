<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Simpan Buku Tamu MySQL</h1>
        <?php
            $nama = $_POST["nama"];
            $email = $_POST["email"];
            $komentar = $_POST["komentar"];
            $conn = mysqli_connect("localhost","root","","liga_champion")
            or die ("koneksi gagal");
            echo "Nama      : $nama <br>";
            echo "Email     : $email <br>";
            echo "Komentar  : $komentar <br>";
            $hasil = mysqli_query($conn,"INSERT INTO bukutamu (nama,email,komentar)
            values ('$nama','$email','$komentar')");
            echo "Simpan bukutamu berhasil dilakukan";
        ?>
</body>
</html>