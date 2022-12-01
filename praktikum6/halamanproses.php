<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
    session_start();
    $conn=mysqli_connect("localhost","root","","db_2022_kelas2a");
    $username=$_POST['username'];
    $password= $_POST['pass'];
    if($username =="" || $password == ""){
        echo "<script>
            alert('Maaf username dan password tidak boleh kosong');
            window.location = history.go(-1);
            </script>";
    }else{
        $query = mysqli_query($conn,"SELECT * FROM tb_mahasiswa WHERE nim='$username' && password='$password' ");
                $data=mysqli_fetch_array($query);

                if ($data) {
                echo "<script>window.location='dashboard.php'</script>";
                $_SESSION['username_xyz']=$username;
                }else{
                    echo "<script>
                    alert('Gagal Login');
                    window.location = history.back();
                    </script>";
                }
    }
    ?>
</body>
</html>

                <!-- window.location = history.back(); -->