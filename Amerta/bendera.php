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
                    $query = mysqli_query($conn, "SELECT foto,judul,judul2,keterangan FROM tb_daftar_article WHERE id = '15'");
                    while ($hasil = mysqli_fetch_array($query)) {
                    ?>
                        <div class="col-lg-12 mt-2 text-center">
                            <h1><?php echo $hasil['judul'] ?></h1>
                            <br>
                            <h4><?php echo $hasil['judul2'] ?></h4>
                            <br>
                            <div class="">
                                <img class="" src="assets/img/<?php echo $hasil['foto'] ?>" alt="" width="60%" height="100%">
                            </div>
                        <?php
                    }
                        ?>
                        </div>
                </div>
                <div class="container-lg mt-5">
                    <div class="row">
                    </div>
                    <br>
                    <h3>Makna simbol negara</h3>
                    <br>
                    <p class="justify">Semua rakyat indonesia pasti tau simbol negara kita adalah merah putih tetapi tidak banyak yang tau perjalanan dari merah putih, dimana merah putih memiliki filosofi tersendiri, yang kita pahamin adalah para pejuang yang telah mengugurkan para penjajah dan mengorbankan nyawanya untuk bangsa kita, dengan kita pahamin lebih mendalam pasti kita akan lebih menghormati sebuah simbol negara, merah putih merupakan identitas dari <strong>KESATUAN REPUBLIK INDONESIA (NKRI)</strong>,bukan selembar kain biasa yang kita dapatkan dengan mudah tetapi memiliki makna yang dalam daripada itu.</p>
                    <p>Peristiwa yang belom banyak tau adalah disaat perobekan bendera belanda dibandung yang menjadi sejarah bandung lautan api, pada saat itu probekan bendera belanda terjadi digedung <strong>Eerste Nederlands-Indische Spaarkas en Hypotheekbank (Denis).</strong> Pelaku perobekan adalah <strong>Moh. Endang Karmas dan Mulyono</strong> yang waktu itu masih kecil. Disaat itu Moh. Endang Karmas dan Mulyono sedang jalan-jalan di alun alun asia-afrika dan jalan braga.</p>
                    <p>Tetapi pada saat itu bendera sedang tidak berkibar jadi mudah untuk Moh.endang menangkap ujung bendera yang berwarna biru itu lalu dia menyuruh Mulyono untuk memegangnya, dan Moh.endang mengambil sebuah pisau untuk merobek warna birunya,dan alhasil berhasil tetapi masih ada sedikit warna birunya, dan menjadi bendera merah putih itu sejarah perjuangan untuk mengibarkan sang saka merah putih.</p>
                    <h3>Penetapan Simbol Negara Indonesia !</h3>
                    <p>Bendera merah putih memiliki sejarah yang panjang hingga akhirnya berkibar sebagai bendera negara,sejarahnya merah putih dilatarbelakangi oleh <strong>izin</strong> kemerdekaan dari jepang pada tanggal <strong>7 September 1944</strong> , kaisar jepang berjanji akan memberikan kemerdekaan kepada bangsa indonesia untuk memproklamasikan kemerdekaan. Tidak mudah untuk mendapatkan izin kemerdekaan disaat itu, Chuuoo Sangi In atau badan yang membantu pemerintah pendudukan jepang terdiri dari orng jepang dan indonesia menindaklajuti izin kemerdekaan disaat itu.</p>
                    <center>
                        <figure>
                            <img src="assets/img/bendera2" style="width:500px;height:333px;">
                            <figcaption>
                                <p class="left">Foto pengibaran bendera Indonesia untuk pertama kali</p>
                            </figcaption>
                        </figure>
                    </center>
                    <p>Chuuoo sangi In mengadakan sidang tidak resmi pada <strong>2 september 1944</strong> 1, sidang itu dipimpin oleh Ir.Soekarno hal yang dibahas saat persidangan yaitu pengaturan pemakaian bendera dan lagu kebangsaan yang sama diseluruh indonesia. hasil dari sidang itu adalah pembentukan panitia terdiri dari Panitia bendera kebangsaan diketuai oleh Ki Hajar Dewantara. Adapun anggotanya antara lain Puradireja, Dr. Poerbatjaraka, Prof. Dr. Hoesein Djajadiningrat, Mr. Moh. Yamin, dr. Radjiman Wedyodiningrat, Sanusi Pane, KH. Mas Mansyur, PA Soerjadiningrat, dan Prof. Dr. Soepomo. </p>
                    <p>Panitia memutuskan memakai warna merah dan putih karna memiliki makna, merah yaitu berani dan putih berarti suci sehingga menjadi jati diri bangsa indonesia. begitu lah sejarah dan makna terciptanya bendera merah putih. Dan kita sebagai penerus bangsa wajib untuk menghargai sebuah perjuangan dan pengorbanan yang telah dilakukan pejuang kita disaat itu dan tidak boleh melupakan sejarah yang telah diberikan untuk bangsa indonesia,karena kalau tidak ada pejuang maka tidak ada kemerdekaan bangsa indonesia. </p>
                </div>

            </div>
        </div>
        <div class="container-lg mt-5">

            <div class="row text-start mb-3">
                <h3>Baca Juga</h3>
            </div>
            <?php
            include "proses/connect.php";
            $query  = mysqli_query($conn, "SELECT foto,judul,judul2,keterangan FROM tb_daftar_article WHERE id = '17'");
            while ($hasil = mysqli_fetch_array($query)) {

            ?>
                <div class="col-11 col-lg-12">

                    <div class="row featurette mb-3 border rounded overflow-hidden shadow-sm h-md-250 position-relative">
                        <div class="col-md-7 mt-2">
                            <h2 class="featurette-heading fw-normal lh-1"><?php echo $hasil["judul"]; ?> </h2>
                            <p class="lead" style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis;"><?php echo $hasil["keterangan"]; ?>.</p>
                            <a href="konst1.php" class="stretched-link"></a>
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