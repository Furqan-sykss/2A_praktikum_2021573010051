<?php
include "connect.php";
$name = (isset($_POST['nama'])) ? htmlentities($_POST['nama']) : "";
$username = (isset($_POST['username'])) ? htmlentities($_POST['username']) : "";
$level = ('2');
$nohp = (isset($_POST['nohp'])) ? htmlentities($_POST['nohp']) : "";
$alamat = (isset($_POST['alamat'])) ? htmlentities($_POST['alamat']) : "";
$password = (isset($_POST['password'])) ? md5(htmlentities($_POST['password'])) : "";

if (!empty($_POST['input_register_validate'])) {
    $select = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username'");
    if (mysqli_num_rows($select) > 0) {
        $message = '<script>alert("Akun yang dimasukkan telah ada");
                    window.location="../register"</script>';
    } else {
        $query = mysqli_query($conn, "INSERT INTO tb_user (nama,username,level,nohp,alamat,password) 
        values ('$name', '$username', '$level', '$nohp', '$alamat', '$password')");
        if ($query) {
            $message = '<script>alert("Akun anda berhasil didaftarkan")
                    window.location="../login"</script>';
        } else {
            $message = '<script>alert("Data Gagal dimasukkan")</script>';
        }
    }
}
echo $message;
