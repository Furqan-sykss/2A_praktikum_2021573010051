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
            $query = mysqli_query($conn, "SELECT foto,judul,judul2,keterangan FROM tb_daftar_article WHERE id = '11'");
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
                <h3>Jembatan Filsafat Yunani dan Islam</h3>
                <p>
                    <strong>
                        Al-Kindi
                    </strong>
                    berasal dari etnis Arab dari suku Kinda. Ia lahir dan mengenyam pendidikan di Kufa sebelum melanjutkan pendidikan di Baghdad. Ia meninggal dunia di Baghdad antara 866-873 M. Ia dikenal sebagai
                    <strong>
                        filsuf Arab.
                    </strong>
                    Tidak banyak yang diketahui mengenai kehidupan pribadi al-Kindi.
                    Berbeda dengan filsuf sebelumnya yang meski Muslim, bukanlah berasal dari Arab. Ilmuwan tersebut biasanya mempelajari bahasa Arab sebagai bahasa kedua mereka.
                </p>
                <p>
                    Al-Kindi memiliki daftar karya yang panjang, yang sayangnya hilang sehingga tidak banyak ilmuwan modern yang bisa mempelajari naskahnya. Tulisan al-Kindi tidak terlalu populer karena dibayang-bayangi filsuf lain yang lebih terkenal, seperti al-Farabi dan Ibnu Sina.
                </p>
                <p>
                    Ilmuwan Renaisans dari Italia, Geralomo Cardano (1501-1575), menganggapnya sebagai salah satu dari 12 pemikir besar di abad pertengahan. Menurut Ibnu al-Nadim, al-Kindi telah menulis sedikitnya 260 buku, buku mengenai geometri sebanyak 22 buku, medis dan filsafat masing-masing 22 buku, sembilan buku logika, dan 12 buku fisika.
                </p>
                <p>
                    Pengaruhnya di berbagai bidang tersebut jauh melebihi ilmuwan-ilmuwan di zamannya dan bertahan selama berabad-abad. Karyanya yang masih tersisa terdapat dalam bentuk terjemahan Latin oleh Gerard dari Cremona, hanya sedikit dalam bahasa Arab.
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
        $query  = mysqli_query($conn, "SELECT foto,judul,judul2,keterangan FROM tb_daftar_article WHERE id = '8'");
        while ($hasil = mysqli_fetch_array($query)) {

        ?>
            <div class="col-11 col-lg-10">

                <div class="row featurette mb-3 border rounded overflow-hidden shadow-sm h-md-250 position-relative">
                    <div class="col-md-7 mt-2">
                        <h2 class="featurette-heading fw-normal lh-1"><?php echo $hasil["judul"]; ?> </h2>
                        <p class="lead" style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis;"><?php echo $hasil["keterangan"]; ?>.</p>
                        <a href="art4.php" class="stretched-link"></a>
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