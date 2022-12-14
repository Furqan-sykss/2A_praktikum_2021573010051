<?php
session_start();
if (empty($_SESSION['username'])) {
    header('location:login');
}

include "proses/connect.php";
$query  = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$_SESSION[username]'");
$hasil = mysqli_fetch_array($query);

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<body style="font-style: italic;">
    <!-- Navbar -->
    <?php include "header.php" ?>
    <!-- End Navbar -->

    <div class="container-lg">
        <div class="row">
            <!-- Sidebar -->
            <?php include "sidebar.php"; ?>
            <!-- End Sidebar -->

            <?php
            include "proses/connect.php";
            $query = mysqli_query($conn, "SELECT foto,judul,judul2,keterangan FROM tb_daftar_article WHERE id_daftar_article = '4'");
            while ($hasil = mysqli_fetch_array($query)) {
            ?>
                <div class="col-lg-6 mt-2">
                    <h1><?php echo $hasil['judul'] ?></h1>
                    <br>
                    <h4><?php echo $hasil['judul2'] ?></h4>
                    <br>
                    <div class="">
                        <img class="" src="assets/img/<?php echo $hasil['foto'] ?>" alt="" width="115%" height="100%">
                    </div>
                    <br>
                    <h3>Apakah Stoisisme itu?</h3>
                    <br>
                    <p>Stoisisme didasarkan pada ide bahwa tujuan hidup adalah hidup selaras dengan alam. Alam itu sendiri didefinisikan sebagai keseluruhan kosmos, termasuk rekan-rekan kita sesama manusia.
                        Epictetus, yang mazhab Stoisismenya berkembang pada abad kedua Masehi, memberitahu kita cara mewujudkan ide ini. Dia berkata, “ada hal-hal yang berada dalam kendali kita dan ada hal-hal yang tidak berada dalam kendali kita.” Maka, jika sesuatu tidak berada dalam kendali kita, tidak layak mengerahkan energi untuk itu.</p>
                    <br>
                    <img src="assets/img/art1bg.png" alt="">
                    <br>
                    <br>
                    <p>Kendati demikian, ada masanya, bahkan bagi para pemikir itu, saat-saat mereka menemui kesulitan untuk menjalankan tugas-tugas mereka. Marcus Aurelius, yang, sebagai kaisar Imperium Romawi dari tahun 161-180 M, adalah orang paling berkuasa di dunia, menjelaskan dalam salah satu bagian “Meditasi”, kumpulan tulisannya, bahwa dia sedang berjuang untuk bangkit dari tempat tidur. Dia pun berkata kepada dirinya sendiri,</p>
                    <br>
                    <p>""Aku bangun untuk melakukan pekerjaan seorang manusia. Lalu, mengapa aku begitu jengkel ketika aku keluar untuk melakukan hal yang ditakdirkan untukku dan merupakan alasan aku ada di dunia ini? Atau aku memang diciptakan untuk ini, berbaring di tempat tidur dan menghangatkan diri di balik selimut?""</p>
                    <br>
                    <p>Dia juga tahu bahwa nasihat ini bisa ampuh bisa juga tidak suatu hari nanti. Karena itulah, walaupun dia memaksa dirinya menjalani hidup, Markus menegaskan apa yang mungkin dia hadapi:</p>
                    <br>
                    <p>""Katakan kepada dirimu sendiri di awal hari, aku akan bertemu dengan orang-orang usil, tak tahu di untung, brutal, pengkhianat, pendengki, dan tidak ramah.""</p>
                </div>
            <?php
            }
            ?>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (() => {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            const forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
        })()
    </script>
</body>

</html>