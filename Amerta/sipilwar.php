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
            $query = mysqli_query($conn, "SELECT foto,judul,judul2,keterangan FROM tb_daftar_article WHERE id = '18'");
            while ($hasil = mysqli_fetch_array($query)) {
            ?>
                <div class="col-lg-12 mt-2 text-center ">
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

                <br>
                <h3>Penyebab Perang Saudara Amerika</h3>
                </br>
                <p>Perang Saudara Amerika adalah perang antara Amerika Serikat (di utara) dengan 11 negara bagian di wilayah selatan yang memisahkan diri dan membentuk Negara Konfederasi Amerika. Sebelas negara bagian di wilayah selatan tersebut adalah Carolina Selatan, Mississippi, Florida, Alabama, Georgia, Louisiana, Texas, Virginia, Arkansas, Tennessee, dan Carolina Utara, yang mulai memisahkan diri dari tahun 1860-1861. Pertempuran antara dua kubu tersebut berlangsung selama empat tahun,<strong>antara 12 April 1861 - 9 Mei 1865.</strong> Perang Saudara Amerika adalah puncak dari gesekan-gesekan yang berkembang di Amerika Serikat karena masalah perbudakan.</p>
                <br>
                <h3>Penyebab Perang Saudara Amerika </h3>
                <br>
                <center>
                    <figure>
                        <img src="assets/img/sipilwar2.jpg" style="width:500px;height:333px;">
                        <figcaption>
                            <p class="left">Pertempuran Antietam, peperangan paling mematikan selama Perang Saudara Amerika (1861-1865).(Wikimedia Commons/Thure de Thulstrup)</p>
                        </figcaption>
                    </figure>
                </center>
                <p>Penyebab Perang Saudara Amerika Hal-hal yang memicu terjadinya Perang Saudara Amerika sangat kompleks, tetapi penyebab utamanya adalah masalah perbudakan. Perbudakan yang berlangsung di Amerika sejak abad ke-17 menjadi sumber ketegangan politik di negara itu pada 1850-an. Pada 1850-an, ketika Amerika Serikat mengalami pertumbuhan yang luar biasa, terdapat perbedaan pendapat terkait praktik perbudakan di wilayah utara dan selatan. Di utara, di mana perusahaan manufaktur dan industrinya telah mapan, penduduknya menentang perbudakan. Sementara penduduk di selatan sangat pro terhadap perbudakan, karena sektor ekonominya bergantung pada pertanian yang digarap oleh para budak kulit hitam.</p>
                <p>Para penentang perbudakan di utara kemudian membentuk Partai Republik, guna mencegah penyebaran perbudakan ke negara-negara bagian yang baru dibentuk. Setelah itu, muncul abolisionisme (gerakan untuk menghapus perbudakan) yang semakin membuat penduduk di wilayah selatan kalang-kabut. Keadaan semakin memanas saat Abraham Lincoln, yang anti perbudakan, terpilih menjadi Presiden Amerika Serikat pada 1860. Setelah Lincoln menang, banyak pemimpin Selatan merasa bahwa perpecahan adalah satu-satunya pilihan mereka. Dalam waktu beberapa bulan, Carolina Selatan, Mississippi, Florida, Alabama, Georgia, Louisiana, dan Texas memilih untuk memisahkan diri dari Amerika Serikat dan membentuk Negara Konfederasi Amerika.</p>
                <h3>Jalannya Perang saudara Amerika</h3>
                <p>Kebijakan Amerika Menentang Kolonialisme Eropa Jalannya Perang Saudara Amerika Ketika Abraham Lincoln mulai menjabat sebagai presiden, pada Maret 1861 pasukan Konfederasi mulai memberikan tekanan ke Benteng Sumter. Pada 12 April 1861, Lincoln mengirmkan armada ke Benteng Sumter dan di situlah terjadi serangan pertama Perang Saudara Amerika. Setelah Benteng Sumter jatuh ke tangan Konfederasi, Virginia, Arkansas, Tennessee, dan Carolina Utara juga memisahkan diri dari Amerika Serikat. Meskipun kubu utara (Uni) diuntungkan karena terdiri dari 23 negara bagian dan memiliki pasokan senjata yang lebih mumpuni, pihak Konfederasi memiliki pasukan militer sangat kuat. </p>
                <p>Dalam Pertempuran Bull Run Pertama pada 21 Juli 1861, tentara Konfederasi di bawah komando Thomas Jonathan "Stonewall" Jackson memaksa Uni mundur ke Washington. Hal ini membuat Lincoln harus mengerahkan 500.000 pasukan lagi ke medan perang. Pada 17 September 1862, saat tentara Uni menang dalam Pertempuran Antietam. Dalam pertempuran tersebut, 12.410 dari 69.000 tentara Uni tewas, dan 13.724 dari 52.000 tentara Konfederasi juga tewas. Lincoln menggunakan kesempatan ini untuk mengeluarkan Proklamasi Emansipasi pada 1 Januari 1863, yang isinya membebaskan semua budak dari negara-negara Konfederasi. Meski Proklamasi Emansipasi tetap tidak digubris oleh pihak Konfederasi, tetapi setelahnya para budak mulai berani melarikan diri ke Uni. </p>
            </div>
        </div>

    </div>

    <?php
    include "footer.php";
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>