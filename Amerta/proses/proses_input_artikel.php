<?php
include "connect.php";
$judul = (isset($_POST['judul'])) ? htmlentities($_POST['judul']) : "";
$judul2 = (isset($_POST['judul2'])) ? htmlentities($_POST['judul2']) : "";
$keterangan = (isset($_POST['keterangan'])) ? htmlentities($_POST['keterangan']) : "";
$kategori = (isset($_POST['kategori'])) ? htmlentities($_POST['kategori']) : "";

$kode_rand = rand(10000, 99999) . "-";
$target_dir = "../assets/img/" . $kode_rand;
$target_file = $target_dir . basename($_FILES['foto']['name']);
$imageType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));


if (!empty($_POST['input_artikel_validate'])) {
    // Cek apakah gambar atau bukan
    $cek = getimagesize($_FILES['foto']['tmp_name']);
    if ($cek === false) {
        $message = "Ini bukan file gambar";
        $statusUpload = 0;
    } else {
        $statusUpload = 1;
        if (file_exists($target_file)) {
            $message = "Maaf. File yang Dimasukkan Telah Ada";
            $statusUpload = 0;
        } else {
            if ($_FILES['foto']['size'] > 500000) { // 500kb
                $message = "File foto yang di upload terlalu besar";
                $statusUpload = 0;
            } else {
                if ($imageType != "jpg" && $imageType != "png" && $imageType != "jpeg" && $imageType != "gif") {
                    $message = "Maaf hanya diperbolehkan gambar yang memiliki format JPG,JPEG,PNG, dan GIF";
                    $statusUpload = 0;
                }
            }
        }
    }
    if ($statusUpload == 0) {
        $message = '<script>alert("' . $message . ' Gambar tidak bisa diupload");
    window.location="../category"</script>';
    } else {
        $select = mysqli_query($conn, "SELECT * FROM tb_daftar_article WHERE judul ='$judul'");
        if (mysqli_num_rows($select) > 0) {
            $message = '<script>alert("Nama category yang dimasukkan telah ada");
        window.location="../category"</script>';
        } else {
            if (move_uploaded_file($_FILES['foto']['tmp_name'], $target_file)) {
                $query = mysqli_query($conn, "INSERT INTO tb_daftar_article (foto,judul,judul2,keterangan,kategori) 
    values ('" . $kode_rand . $_FILES['foto']['name'] . "','$judul','$judul2','$keterangan','$kategori')");
                if ($query) {
                    $message = '<script>alert("Data Berhasil Di Tambah");
        window.location="../category"</script>';
                } else {
                    $message = '<script>alert("Data gagal Di Tambah");
        window.location="../category"</script>';
                }
            } else {
                $message = '<script>alert("Maaf, terjadi kesalahan file tia=dak dapat diupload");
        window.location="../category"</script>';
            }
        }
    }
}
echo $message;
