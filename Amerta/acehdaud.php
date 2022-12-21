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
                    $query = mysqli_query($conn, "SELECT foto,judul,judul2,keterangan FROM tb_daftar_article WHERE id = '16'");
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
                    <h3>Latar Belakang</h3>
                    <br>
                    <p>Pemberontakan DI/TII di Aceh (Pemberontakan Daud Beureueh) akibat kekecewan Daud Beureueh dan rakyat Aceh terhadap pemerintah pusat yang tidak menepati janji.
                    </p>
                    <p>Meletusnya Pemberontakan DI/TII di Aceh yang dipimpim Teungku Muhammad Daud Beureueh terjadi dalam upaya menegakkan syariat Islam di Aceh.
                    </p>
                    <p>Masyarakat Aceh kecewa terhadap janji pemerintah pusat untuk mendirikan negara berlandaskan syariat Islam tidak kunjung ditepati oleh Soekarno yang saat itu menjabat menjadi presiden.
                    </p>
                    <p>Padahal, rakyat Aceh telah ikut mempertaruhkan jiwa dan raga untuk mempertahankan kedaulatan RI.
                    </p>
                    <p>Selain itu, peleburan Aceh dalam provinsi Sumatera Utara pada tahun 1950 menyebabkan kemarahan rakyat dan menuntut dikembalikan ke Provinsi Aceh otonom.
                    </p>
                    <p>F>Akhirnya, terjadi Pemberontakan DI/TII di Aceh dalam Negara Kesatuan Republik Indonesia.
                    </p>
                    <br>
                    <h3>Pemberontakan DI/TII di Aceh.</h3>
                    <br>
                    <br>
                    <br>
                    <center>
                        <figure>
                            <img src="assets/img/acehditii.jpg" style="width:500px;height:333px;">
                            <figcaption>
                                <p class="left">Anggota DI/TII Aceh(Foto: Istimewa/KITLV)</p>
                            </figcaption>
                        </figure>
                    </center>
                    <br>
                    <br>
                    <br>
                    <p>Soekarno telah melanggar perjanjian dengan Daud. Daud melakukan pemberontakan melalui gerakan DI/TII Aceh pada tanggal 20 September 1953 di Aceh.
                    </p>
                    <p>
                        Pemberontakan ini merupakan awal perjuangan dalam menegakkan syariat Islam.
                    </p>
                    <p>
                        Daud mengumumkan bahwa Aceh yang merupakan bagian Darul Islam, tidak lagi mengukuti pemerintah pusat.
                    </p>
                    <p>
                        Selain karena ideologi keagamaan, pemberontakan Darul Islam juga bentuk perlawanan terhadap pengaruh pemerintah pusat kedaerah.
                    </p>
                    <p>
                        Gerakan Darul Islam/Tentara Islam Indonesia (DI/TII) merupakan bagian proses sosial politik yang terjadi pada pasca kemerdekaan yang dipelopori oleh Kartosuwiryo.
                    </p>
                    <p>
                        Pemerintah Indonesia dalam usaha menyelesaikan konflik Aceh menggunakan dua cara, yaitu kekuatan militer dan diplomasi (musyawarah).
                    </p>
                    <p>
                        Untuk menumpas pemberontakan ini, pemerintah Indonesia membentuk operasi khusus militer, yaitu Operasi 17 Agustus dan Operasi Merdeka.
                    </p>
                    <p>
                        Sedangkan cara diplomasi, pemerintah Indonesia mengirimkan utusan-utusan khusus untuk berdialog dengan pihak pemberontak, khususnya dengan Teungku Muhammad Daud Beureueh.
                    </p>
                    <h3>Akhir Pemberontakan DI/TII di Aceh.</h3>
                    <p>
                        Akhirnya dengan negosiasi yang panjang disepakati status otonomi khusus untuk Aceh, yaitu terbentuknya Daerah Istimewa Aceh serta kebebasan menjalankan unsur-unsur syariat di dalamnya.
                    </p>
                    <p>
                        Dengan hasil negosiasi tersebut, maka berakhir pemberontakan DI/TII di Aceh dan tercipta kedamaian serta keamanan yang dirindukan masyarakat Aceh dan Indonesia.
                    </p>
                    <p>
                        Untuk merayakan perdamaian itu dilakukan upacara akbar di Blangpadang pada tanggal 18 sampai 22 Desember 1962, berupa Musyawarah Kerukunan Rakyat Aceh (MIKRA).
                    </p>
                    <p>
                        Adanya perdamaian tersebut pemerintah dan rakyat Aceh akan bersama-sama melaksanakan pembangunan untuk kemajuan bangsa dan negara Indonesia dan Aceh pada khususnya.
                    </p>

                </div>
            </div>
        </div>
        <div class="container-lg mt-5">

            <div class="row text-start mb-3">
                <h3>Baca Juga</h3>
            </div>
            <?php
            include "proses/connect.php";
            $query  = mysqli_query($conn, "SELECT foto,judul,judul2,keterangan FROM tb_daftar_article WHERE id = '15'");
            while ($hasil = mysqli_fetch_array($query)) {

            ?>
                <div class="col-11 col-lg-12">

                    <div class="row featurette mb-3 border rounded overflow-hidden shadow-sm h-md-250 position-relative">
                        <div class="col-md-7 mt-2">
                            <h2 class="featurette-heading fw-normal lh-1"><?php echo $hasil["judul"]; ?> </h2>
                            <p class="lead" style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis;"><?php echo $hasil["keterangan"]; ?>.</p>
                            <a href="bendera.php" class="stretched-link"></a>
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