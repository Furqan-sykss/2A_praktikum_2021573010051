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

            <div class="container-lg">
                <div class="row">
                    <?php
                    include "proses/connect.php";
                    $query = mysqli_query($conn, "SELECT foto,judul,judul2,keterangan FROM tb_daftar_article WHERE id = '19'");
                    while ($hasil = mysqli_fetch_array($query)) {
                    ?>
                        <div class="col-lg-12 mt-2 text-center">
                            <h1><?php echo $hasil['judul'] ?></h1>
                            <br>
                            <h4><?php echo $hasil['judul2'] ?></h4>
                            <br>
                            <div class="">
                                <img class="" src="assets/img/<?php echo $hasil['foto'] ?>" alt="" width="80%" height="100%">
                            </div>
                        <?php
                    }
                        ?>
                        </div>
                </div>
                <div class="container-lg mt-5">
                    <div class="row">
                        <div class="col col-lg-10">

                            <br>
                            <h3>Apa perintah pertama Soekarno saat resmi menjadi Presiden RI</h3>
                            <br>
                            <p class="justify">Sehari setelah<strong>kemerdekaan Republik Indonesia pada 17 Agustus 1945</strong>, Panitia Persiapan Kemerdekaan Indonesia (PPKI) menetapkan Soekarno sebagai Presiden RI dan Mohammad Hatta sebagai Wakil Presiden RI pertama.</p>
                            <br>
                            <div class="text-center">
                                <img src="assets/img/sukarno3.jpg">
                            </div>
                            <center>
                                <figure>

                                    <figcaption>
                                        <p class="left">Foto saat Soekarno memakan sate favoritnya </p>
                                    </figcaption>
                                </figure>
                            </center>
                            <br>
                            <p>Setelah ditetapkan, perintah pertama Soekarno sebagai seorang Presiden ternyata bukan lah membentuk kabinet, mempersiapkan rapat, ataupun menetapkan kebijakan penting lainnya. Perintah pertamanya ternyata adalah memesan 50 tusuk sate ayam!</p>
                            <p class="justify">Yap, konon kala itu pada saat perjalanan pulang Soekarno melihat pedagang sate. Tanpa pikir panjang, ia langsung memerintahkan tukang sate untuk membuatkan 50 tusuk sate untuknya. Ia pun langsung memakannya dengan berjongkok di pinggir parit.</p>
                            <p>Konon masih banyak hal-hal dan kisah unik yang terjadi di balik peristiwa kemerdekaan Republik Indonesia. Di balik kisah unik tersebut marilah kita selalu mengingat jasa para pahlawan kita yang berjuang dan rela mati untuk memerdekakan Bangsa Indonesia</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="container-lg mt-5">

            <div class="row text-start mb-3">
                <h3>Baca Juga</h3>
            </div>
            <?php
            include "proses/connect.php";
            $query  = mysqli_query($conn, "SELECT foto,judul,judul2,keterangan FROM tb_daftar_article WHERE id = '16'");
            while ($hasil = mysqli_fetch_array($query)) {

            ?>
                <div class="col-11 col-lg-12">

                    <div class="row featurette mb-3 border rounded overflow-hidden shadow-sm h-md-250 position-relative">
                        <div class="col-md-7 mt-2">
                            <h2 class="featurette-heading fw-normal lh-1"><?php echo $hasil["judul"]; ?> <span class="text-muted">It’ll blow your mind.</span></h2>
                            <p class="lead" style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis;"><?php echo $hasil["keterangan"]; ?>.</p>
                            <a href="acehdaud.php" class="stretched-link"></a>
                        </div>
                        <div class="col-md-5 mt-2 mb-3">
                            <img src="assets/img/<?php echo $hasil['foto'] ?>" width="500" height="500" class="img-thumbnail" alt="...">
                            </svg>

                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>



        <?php
        include "footer.php";
        ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>