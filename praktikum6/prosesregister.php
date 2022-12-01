<?php
$conn= mysqli_connect("localhost","root","","db_2022_kelas2a",);
$username       =$_POST['username'];
$password       =$_POST['pass'];
$nama           =$_POST['nama'];
$kelas          =$_POST['kelas'];
$alamat         =$_POST['alamat'];
$ipk            =$_POST['ipk'];


$regist ="INSERT INTO tb_mahasiswa (nim,password,nama,kelas,alamat,ipk) 
 VALUES ('$username','$password','$nama','$kelas','$alamat','$ipk')";
 $query=mysqli_query($conn,$regist);
    if($query){
        echo "Selamat anda berhasil mendaftar <a href='login.php'>Login</a>";
        }else{
            echo "Anda gagal mendaftar";
        }





/*if(empty($username) || empty($password) || empty($confirm_password)){
    echo "Username dan Password tidak boleh kosong";
} elseif($password != $confirm_password){
    echo "confirm password harus sama";
}else{
    $conn = mysqli_connect("127.0.0.1","root","","db_2022_kelas2a");
    $query = mysqli_query($conn,"INSERT INTO tb_mahasiswa (nim,password,nama,kelas,alamat,ipk) 
    VALUES ('$username','$password','$nama','$kelas','$alamat','$ipk')");
    if($query){
        echo "Selamat anda berhasil mendaftar <a href='login.php'>Login</a>";
    }else{
        echo "Anda gagal mendaftar";
    }
}*/
?>