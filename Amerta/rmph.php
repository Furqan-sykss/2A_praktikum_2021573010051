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
                    $query = mysqli_query($conn, "SELECT foto,judul,judul2,keterangan FROM tb_daftar_article WHERE id = '20'");
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
                    </div>
                    <br>
                    <h3>Apa itu Jalur Rempah?</h3>
                    <br>
                    <p class="justify"><strong>Jalur rempah</strong> adalah jalur sutra yang melewati maritim, merupakan jalur perdagangan dan wadah pertukaran segala peradaban budaya dan agama,” kata Dr. Alan Chong dari Universitas Teknologi Nanyang Singapura</p>
                    <p>Jalur rempah di Nusantara telah dikenal sejak berabad-abad lamanya di mana jalur khayal ini merupakan jalur yang biasa pada masa itu dilalui oleh para pedagang dari berbagai belahan di dunia. Tome pires menyebutkan dalam bukunya <strong>Summa Oriental que trata do Mar Roxo ate aos Chins </strong>(Ikhtisar Wilayah Timur: dari Laut Merah hingga negeri China) mengisahkan pengalamannya selama berada di Nusantara pada awal abad ke 16.</p>
                    <p>Nusantara pada masa itu begitu terkenal sehingga tak heran jika Nusantara disebut sebagai negeri tumbuh suburnya keanekaragaman hayati dunia.Jalur rempah merupakan sebuah julukan spesifik oleh para ahli maupun sejarawan Nusantara untuk mendeskripsikan, merekonstruksi dan melacak kembali perjalanan para pedagang di masa lampau karena dari rute ini membentuk aktivitas global perdagangan dunia.
                        Rute ini diandang memiliki nilai penting di mana komunikasi yang terjalin selama berabad-abad lamanya.</p>
                    <br>
                    <center>
                        <figure>
                            <img src="assets/img/rmph2.jpg" style="width:500px;height:333px;">
                            <figcaption>
                                <p class="left">Ilustrasi berjudul 'Embarkasi dan Keberangkatan Columbus dari Pelabuhan Palos', dilukis pada penjelajahan samudra pertama Columbus pada 3 Agustus 1492.(Ricardo Balaca)</p>
                            </figcaption>
                        </figure>
                    </center>
                    <br>
                    <p>Pada masa lampau, rempah ini lebih identik dengan eksotisme, prestise dan kemuliaan penuh dengan hal-hal yang sakral. Catatan Mesir Kuno menjelaskan rempah-rempah ini digunakan sebagai bahan utama pengobatan daripada pecitarasa. Senada dalam hal tersebut Theophratus menegaskan bahwa rempah-rempah baik itu lada telah banyak digunakan oleh para tabib sebagai bahan baku obat-obatan dibanding juru masak. </p>
                    <p class="justify">Catatan Tiongkok, Mesopotamia, India, Yunani dan Romawi bahkan Jazirah Arab menuliskan tentang tanaman eksotik ini.Kajian Maritim begitu sangat penting jika dikaitkan dengan sejarah perjalanan bangsa Indonesia. Sejak jalur perdagangan laut di benua Asia pada abad 1 M. Kawasan Nusantara menjadi bagian terpenting dari hasil manfaat akibat jalur ini. Terbentuknya kantong-kantong niaga atau istilahnya emporium menjadi berkembang dalam tatanan politik besar sehingga proses penyiaran agama masehi pada jalur ini tidak terelakkan di samping perniagaan</p>
                </div>

            </div>
        </div>
        <div class="container-lg mt-5">

            <div class="row text-start mb-3">
                <h3>Baca Juga</h3>
            </div>
            <?php
            include "proses/connect.php";
            $query  = mysqli_query($conn, "SELECT foto,judul,judul2,keterangan FROM tb_daftar_article WHERE id = '14'");
            while ($hasil = mysqli_fetch_array($query)) {

            ?>
                <div class="col-11 col-lg-12">

                    <div class="row featurette mb-3 border rounded overflow-hidden shadow-sm h-md-250 position-relative">
                        <div class="col-md-7 mt-2">
                            <h2 class="featurette-heading fw-normal lh-1"><?php echo $hasil["judul"]; ?> </h2>
                            <p class="lead" style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis;"><?php echo $hasil["keterangan"]; ?>.</p>
                            <a href="belajar.php" class="stretched-link"></a>
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