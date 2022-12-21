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
            <?php
            include "proses/connect.php";
            $query = mysqli_query($conn, "SELECT foto,judul,judul2,keterangan FROM tb_daftar_article WHERE id = '7'");
            while ($hasil = mysqli_fetch_array($query)) {
            ?>

                <div class="col-lg-12 mt-5 ">
                    <h1 class="text-center"><?php echo $hasil['judul'] ?></h1>
                    <br>
                    <h3 class="text-center text-secondary"><?php echo $hasil['judul2'] ?></h3>
                    <br>
                    <div class="text-center">
                        <img class="" src="assets/img/<?php echo $hasil['foto'] ?>" alt="" width="50%">
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
    <div class="container-lg mt-5 ">

        <div class="row">
            <div class="col-lg-10">
                <p>
                    Ketika neglihat judul artikel ini tentang
                    <strong>
                        filosofi kehidupan Epicurus
                    </strong>
                    (bahagia dalam kesederhanaan), kayaknya terkesan terlalu naif.
                    <strong>
                        Sebagian besar mungkin beranggapan kalau jadi orang yang kaya raya, sudah pasti bahagia.
                    </strong>
                    Kalaupun sedih, setidaknya sedih dalam kemewahan, kan?
                </p>
                <p>
                    Tapi, terlepas dari apakah orang kaya bahagia atau tidak, coba kita berkaca kepada diri sendiri.
                    <strong>
                        Apakah kamu sudah merasa cukup bahagia dengan hidupmu saat ini?
                    </strong>
                </p>
                <p>
                    Kalau kamu masih merasa kurang bahagia karena belum mendapatkan apa yang kamu inginkan, belum bahagia karena belum punya mobil mewah, belum bahagia karena belum jalan-jalan ke Cappadocia, sepertinya ada yang harus direnungkan kembali. </p>
                <p>
                    Katanya, hidup sederhana bukan hanya indah, tapi juga penting. Kenapa?
                    <strong>
                        Di antara ide-ide filosofi kehidupan, hidup dalam kesederhanaan adalah ide yang abadi.
                    </strong>
                    Dari para filsuf dunia seperti Socrates hingga Thoreau, dan bahkan teori Buddha, para pemikir telah menjajakan tentang filosofi kehidupan ini selama bertahun-tahun yang lalu.
                </p>
                <p>
                    <strong>
                        Salah satu filsuf yang fokus pada konsep kebahagiaan adalah Epicurus, seorang filsuf Yunani yang hidup antara 341 SM dan 270 SM.
                    </strong>
                    Teorinya disebut filosofi Epicureanism.
                </p>
                <p>
                    Filosofi kehidupan Epicurus ini menyatakan kesederhanaan adalah kunci kebahagiaan. Bagaimana kunci hidup bahagia menurut filosofi kehidupan Epicurus? </p>
                <p>
                    Kali ini, aku, Sista, Blog Writer Satu Persen, akan berbagi informasi tentang filosofi kehidupan Epicurus, kunci hidup bahagia meski hidup dalam kesederhanaan. Yuk, baca keseluruhan artikelnya~ </p>
                <br>
                <h4>Apa itu Filosofi Kehidupan Epicurus?</h4>
                <div class="clearfix">
                    <p>
                        Menurut filosofi kehidupan Epicurus, seseorang dapat hidup dengan sempurna asalkan kebutuhan dasar terpenuhi. Banyak filsuf lain mengemukakan bahwa mendapatkan kesenangan dan kebahagiaan berarti membiarkan diri kita memanjakan dan menikmati hal-hal secara berlebihan. Sementara itu, Epicurus berpendapat kesenangan dapat ditemukan dalam hidup yang sederhana.
                    </p>
                    <img src="assets/img/epicurus2.jpg" height="280px" class="col-md-3 float-md-end mb-3 ms-md-3" alt="...">
                    <p>
                        <strong>
                            Karena arti filosofi kehidupan Epicurus ini menekankan bahwa kebahagiaan sering kali datang dari kesenangan sederhana,
                        </strong>
                        sangat mungkin untuk menemukan kegembiraan dalam berbagai hal tanpa menghabiskan banyak uang.
                    </p>
                    <p>
                        <strong>
                            Menurut perspektif Epicurean, sesuatu yang menyenangkan sebenarnya bisa menjadi kurang menyenangkan jika harus dibayar mahal.
                        </strong>
                        Jika kamu menggunakan pendekatan Epicurean, kamu justru akan menemukan kesenangan dan kebahagiaan yang lebih besar dengan:
                    </p>
                    <p>
                        Menikmati hal-hal dalam jumlah sedang
                        Hidup sederhana sesuai kemampuan
                        Menikmati hal-hal dan pengalaman yang paling penting bagi diri sendiri
                        Dapat menyimpan dana pensiun untuk membantu mengelola ketakutan akan masa depan
                    </p>
                    <p>
                        Ada satu faktor lainnya yang menurut
                        <strong>
                            filosofi kehidupan Epicurus
                        </strong>
                        memiliki kekuatan untuk menghancurkan kesenangan, yaitu kecemasan tentang masa depan kita. Overthinking dengan apa yang akan terjadi di masa depan dianggap sebagai hambatan kebahagiaan, kesenangan, dan ketenangan kita saat ini.
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
            $query  = mysqli_query($conn, "SELECT foto,judul,judul2,keterangan FROM tb_daftar_article WHERE id = '6'");
            while ($hasil = mysqli_fetch_array($query)) {

            ?>
                <div class="col-11 col-lg-12">

                    <div class="row featurette mb-3 border rounded overflow-hidden shadow-sm h-md-250 position-relative">
                        <div class="col-md-7 mt-2">
                            <h2 class="featurette-heading fw-normal lh-1"><?php echo $hasil["judul"]; ?> </h2>
                            <p class="lead" style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis;"><?php echo $hasil["keterangan"]; ?>.</p>
                            <a href="art6.php" class="stretched-link"></a>
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
        include "footer.php"
        ?>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>

</html>