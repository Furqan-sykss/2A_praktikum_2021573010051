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
            $query = mysqli_query($conn, "SELECT foto,judul,judul2,keterangan FROM tb_daftar_article WHERE id = '12'");
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
                <h3>Aristoteles adalah murid dari Plato sekaligus guru dari Alexander Agung</h3>
                <p>
                    Ia banyak menulis berbagai macam disiplin ilmu, termasuk fisika, metafisika, puisi, logika, retorika, politik, pemerintahan, etnis, biologi dan zoologi. Bersama dengan Socrates dan Plato, ia dianggap menjadi seorang di antara tiga orang filsuf yang paling berpengaruh di pemikiran Barat.
                </p>
                <p>
                    Aristoteles tertarik kepada ilmu pengetahuan. Dia ingin menggunakan metode logika Plato untuk mengetahui bagaimana dunia berjalan. Oleh karena itu, Aristoteles dianggap sebagai bapak metode ilmiah. Aristoteles secara khusus tertarik pada ilmu pengetahuan biologi, khususnya klasifikasi tumbuhan dan hewan.
                </p>
                <p>
                    Aristoteles lahir di Stagira, kota di wilayah Chalcidice, Yunani (dahulunya termasuk wilayah Makedonia tengah) tahun 384 SM. Ia bukan berasal dari keluarga yang kaya, ayahnya hanyalah seorang tabib pribadi Raja Amyntas dari Makedonia.
                </p>
                <p>
                    Pada usia 17 tahun, Aristoteles menjadi murid Plato. Aristoteles belajar di Akademi Plato, akademi yang didirikan oleh Plato pada tahun 387 SM di Athena. Plato sendiri saat itu sudah sangat tua. ketika Plato meninggal, Aristoteles meninggalkan akademi tersebut. Ia merasa kesal akibat tak terpilih menjadi salah satu pemimpin di akademi. Padahal, ia telah mengabdi selama 20 tahun menjadi guru di sana.
                </p>
                <p>
                    Beberapa waktu setelahnya, Aristoteles meninggalkan Athena dan pergi ke Makedonia dan menjadi guru bagi pangeran muda Alexander, yang kelak akan menjadi Raja Alexander Agung. Alexander tidak terlalu tertarik pada pembelajaran Aristoteles. Namun, mereka berhubungan baik. Ketika Aleksander menjelajahi Asia Barat, dia dan para armadanya mengambil tumbuh-tumbuhan eksotis untuk dipelajari oleh Aristoteles.
                </p>
                <p>
                    Setelah Alexander tumbuh dewasa dan menjadi raja, Aristoteles kembali ke Athena dan membuka akademinya sendiri di sana, yang disebut Lyceum, yang menjadi saingan Akademi Plato. Ketika Alexander meninggal pada tahun 323 SM, terjadi pemberontakan terhadap Kekaisaran Makedonia di Athena. Orang Athena menuduh Aristoteles memihak Makedonia, karena ia adalah sahabat Alexander dan seperti halnya Plato, ia bukan seorang demokrat. Dia dengan cepat meninggalkan Athena dan menghabiskan sisa hidupnya di Chalcidice, dan meninggal pada 322 SM.
                </p>
                <br>
                <h3>Pemikiran Dan Pandangan</h3>
                <p>
                    Pemikiran Aristoteles berkembang dalam tiga tahapan, pertama ketika ia masih belajar di Akademi Plato ketika gagasannya masih dekat dengan gurunya tersebut, kemudian ketika ia memimpin akademi Lyceum, dan yang terakhir pada waktu ia mengungsi ke daerah Yunani utara, di tempat kelahirannya.
                </p>
                <p>
                    Selama memimpin Lyceum, ia menerbitkan enam karya tulis yang membahas masalah logika, yang dianggap sebagai karya-karyanya yang paling penting, selain kontribusinya di bidang metafisika, fisika, etika, politik, ilmu kedokteran, ilmu alam dan karya seni.
                </p>
                <p>
                    Memang ciri khas kebudayaan Yunani, yang selalu ingin mengubah ketidakteraturan menjadi keberaturan, menerapkan keberaturan buatan manusia ke dalam dunia alami yang kacau. Aristoteles juga berusaha membuat keberaturan dalam sistem pemerintahan. Ia menciptakan sistem klasifikasi monarki, oligarki, tirani, demokrasi dan republik, yang masih dipakai hingga sekarang.
                </p>
                <p>
                    Di bidang ilmu pengetahuan alam, ia merupakan orang pertama yang mengelompokkan dan mengklasifikasikan spesies-spesies biologi secara sistematis. Observasinya ini termasuk suatu bentuk dari keberaturan yang ia ciptakan untuk menggambarkan hukum alam dan keseimbangan pada alam, yaitu metabolisme, perubahan suhu, pemrosesan informasi, embriogenesis, dan pewarisan sifat.
                </p>
                <p>
                    Hingga kini, Metode Aristoteles digunakan oleh ahli biologi moderen ketika menjelajahi wilayah baru, yaitu dengan mengumpulkan data secara sistematis, menemukan pola, dan membuat kesimpulan dari penjelasan kausal yang mungkin saja terjadi. Berlawanan dengan Plato, yang menyatakan teori tentang bentuk-bentuk ideal benda, Aristoteles menjelaskan bahwa materi tidak mungkin tanpa bentuk karena ia ada (eksis).
                </p>
                <p>
                    Pemikiran lainnya adalah tentang gerak, ia selalu mengatakan bahwa semua benda bergerak menuju satu tujuan. Karena benda tidak dapat bergerak dengan sendirinya, maka harus ada penggerak. Penggerak itu harus mempunyai penggerak lainnya, hingga tiba pada penggerak pertama yang tak bergerak, yang kemudian disebut dengan theos, yaitu Tuhan dalam pengertian Bahasa Yunani.
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