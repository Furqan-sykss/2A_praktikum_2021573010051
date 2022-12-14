<?php

include "connect.php";
$id = (isset($_POST['id'])) ? htmlentities($_POST['id']) : "";

if(!empty($_POST['input_category_validate'])){
    $query = mysqli_query($conn, "DELETE FROM tb_daftar_article where id_daftar_article='$id'"); 
    if($query) {
        $message = '<script>alert("Data Berhasil Di Hapus");
        window.location="../category"</script>';
    }else{
        $message = '<script>alert("Data Gagal Di Hapus")</script>';
    }
}echo $message;
