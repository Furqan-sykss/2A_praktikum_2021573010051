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
                    $query = mysqli_query($conn, "SELECT foto,judul,judul2,keterangan FROM tb_daftar_article WHERE id = '14'");
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
                    <h3>Sejarah pendidikan di Indonesia</h3>
                    <br>
                    <p>Pengetahuan adalah kekuatan yang membedakan dan menjadi kelebihan bagi manusia. sepanjang sejarah kehidupan manusia pendidikan di temukannya dari pemahaman baru atas pengetahuan manusia. Dari penyebaran pemahaman dari individu satu dengan individu lainnya sebenarnya telah terjadi proses pendidikan. Pendidikan pada zaman dahulu sebenernya telah terjadi seperti contoh transfer budaya, yang di dalamnya juga meliputi system pengetahuan, kepercayaan, mata pencaharian, Bahasa dan tempat tinggal.</p>
                    <p>Pada masa-masa selanjutnya pendidikan berkembang lebih kompleks, karena seiring berjalannya waktu serta berkembangnya pengetahuan maka pendidikan berkembang lebih maju, pengaruh budaya luar juga sangat mempengaruhi banyaknya pengetahuan dan berkembangnya pendidikan
                    </p>
                    <h3>Awal mula pendidikan di Indonesia</h3>
                    <p>Awal mula pendidikan di Indonesia, pada umumnya Indonesia menerima agama dan pengetahuan serta budaya dari Negara tetangga seperti india. Boleh di katakan pendidikan di Indonesia awalnya adalah pengetahuan tentang agama, agama yang pertama kalli datang ke Indonesia adalah agama hindu budha. Lantas dengan pengetahuan agama dengan seiringnya waktu banyak masyarakat yang membangun tempat ibadah hingga membangun kerajaan.</p>
                    <p>Ditinjau dari kerajaan mulawarman pada abad (4-5) di kutai terdapat peninggalan yang berupa tulisan (yupa)  dalam tulisan palawa dalam Bahasa sanskerta. Ini menunjukkan adanya pengaruh dari agama siwa. dari tulisan-tulisan dapat di simpulkan bahwa pendidikan di Indonesia telah mengalami perkembangan sejak masa kerajaan.</p>
                    <p>Seiring berjalannya waktu dari abad 4-8 pendidikan telah di tunjukkan oleh kerajaan-kerajaan di Indonesia hingga pada abad-abad terakhir terjadi jatuhnya agama hindu di Indonesia. System pendidikan tidak lagi di jalankan secara besar besar an. tetapi di lakukan oleh ulama para guru dengan jumlah siswa terbatas di pedepokan. Dipedopakan tersebut tidak hanya di ajari tentang agama saja tetapi di ajari ilmu pengetahuan umum juga. Selain itu mereka di tuntut untuk bekerja memenuhi kebutuhan hidup sehari-hari</p>
                    <p>Pedepokan merupakan tempat untuk menggembleng ilmu agama, ilmu pengetahuan, seni bela diri, dan membahas tentang permasalahan social yang terjadi di masyarakat, kemudian pedepokan banyak di dirikan oleh kerajaan guna untuk mempersiapkan kader sebagai penerus kerajaan tersebut. ada juga pedepokan yang didirikan oleh kaum intelektual yang tidak mau di kekang oleh suatu pemerintahan tetapi memiliki tujuan untuk mengembangkan keilmuan yang di miliki secara mandiri.</p>
                    <p>Pemimpin pedepokan di namakan resi atau Begawan sementara murid yang belajar di pedepokan di namakan cantrik. Setiap pedepokan memiliki keilmuan khusus yang di ajarkan, ada padepokan yang khusus untuk ilmu kanuragan atau bela diri, ada padepokan khusus untuk agama, ad ilmu khusus kasustraan, ada ilmu khusus untuk pemerintahan, atau juga mencakup semuanya.
                    </p>
                    <h3>Perkembangan Pendidikan Di Indonesia</h3>
                    <br>
                    <center>
                        <figure>
                            <img src="assets/img/belajar2.jpg" style="width:500px;height:333px;">
                            <figcaption>
                                <p class="left">Suasana sekolah di zaman penjajahan. (Foto: Istimewa/KITLV)</p>
                            </figcaption>
                        </figure>
                    </center>
                    <p>Jadi dapat di simpulkan bahwa pendidikan pada zaman kerajaan-kerajaan di arahkan pada kesempurnaan pribadi terutama pada agama, kekuatan fisik, keahlian, dan keterampilan.</p>
                    <p>Pada permulaan abad 16 atau akhir dari abad 13 banyak masyarakat yang dulu memeluk agama hindu kemudian memeluk agama islam. Proses penyebaran agama islam di lakukan melalui banyak jalan. Mulai dari perdagangan, pernikahan, pengobatan, budaya, maupun pendidikan. Adapun lembaga pendidikan islam pada zam penyebaran islam yakni pendidikan masjid, langgar, dan surau. Pengajaran-pengajaran di langgar merupakan ilmu permulaan sedangkan di pesantren untuk mereka yang ingin memperdalam ilmu agama</p>
                    <p>System pengajaran yang secara individual yakni setiap anak maju satu persatu kehapan guru sedangkan anak yang lain menunggu gilirannya maju sambil belajar. Seiring berkembangnya kualitas pendidikan maka muncullah pendidikan madrasah
                    </p>
                    <p>Kemunculan pendidikan madrasah merupakan peralihan dan perkembangan pendidikan islam yang mengadopsi system pendidikan modern dengan tetap mempertahankan beberapa pokok ajaran islam di dalamnya. Semenjak adanya pendidikan madrasah inilah islam lebih di kenal lagi dan banyak di terima oleh masyarakat Indonesia.
                    </p>
                    <p>Pada permulaan abad 16 datanglah bangsa portugis ke Indonesia kemudiaan tidak begitu lama di susul oleh kebangsaan sepanyol. Tujuan utama mereka ke Indonesia adalah untuk mencari rempah-rempah. Di samping berdagang mereka berniat untuk menyebarkan agama katolik. Untuk menyebarkan agama katolik para misioner mendirikan sekolah, pada 1536. Di ternate didirikan sekolah yang mendidik calon-calon misionaris atau pekerja agama. Dengan adanya usaha dari misionaris banyak masyarakat yang mengalami kemajuan dalam bidang pendidikan. Kemudian datang pula bangsa belanda ke Indonesia dan menggantikan posisi bangsa portugis di ternate.
                    </p>
                    <p>Penjajahan belanda dalam sejarahnya perjalanannya menunjukkan bagaimana cara penerapan kebijakan diskriminatif dan menghalangi pertumbuhan penduduk local. Pada 1882 belanda mengawasi pendidikan-pendidikan pesantren di Indonesia hingga menjelang bubarnya voc baru pendidikan di Indonesia bisa didirikan hingga meluas ke pulau jawa.
                    </p>
                    <h3>Pengubahan Sistem Belajar</h3>
                    <p>Konteks pengajaran dan pendidikan ini pada prinsipnya adalah untuk memenuhi kebutuhan pegawai rendahan di kantor-kantor pamong praja atau kantor-kantor yang lain. Hingga pada akhir abad 18 dan awal abad 19 sistem ini di rubah menjadi system klasikal, dimana pengajaran di berikan kepada sekelompok anak anak dengan pelajaran dan waktu yang sama. Akhir abad 19 di dirikan sekolah kelas 2 yang lamanya 4 tahun di tempatkan di kota-kota kabupaten. Pengajaran ini lebih sederhana yaitu menulis, membaca, berhitung, dan Bahasa daerah.
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