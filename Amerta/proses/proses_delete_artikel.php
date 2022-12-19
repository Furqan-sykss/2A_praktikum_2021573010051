<?php
include "connect.php";
$id = (isset($_POST['id'])) ? htmlentities($_POST['id']) : "";
$foto = (isset($_POST['foto'])) ? htmlentities($_POST['foto']) : "";

if (!empty($_POST['input_artikel_validate'])) {
    $query = mysqli_query($conn, "DELETE FROM tb_daftar_article where id='$id'");
    if ($query) {
        unlink("../assets/img/$foto");
        $message = '<script>alert("Data Berhasil Di Hapus");
        window.location="../category"</script>';
    } else {
        $message = '<script>alert("Data Gagal Di Hapus");
        window.location="../category"</script>';
    }
}
echo $message;
