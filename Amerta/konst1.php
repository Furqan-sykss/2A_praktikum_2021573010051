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
                    $query = mysqli_query($conn, "SELECT foto,judul,judul2,keterangan FROM tb_daftar_article WHERE id = '17'");
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
                        <br>
                        <h3>Apa itu Jalur Rempah?</h3>
                        <br>
                        <P>Jatuhnya Konstantinopel ke tangan Turki merupakan peristiwa penting yang menjadi salah satu penanda berakhirnya Abad Pertengahan. Selama berabad-abad, Konstantinopel adalah pusat dunia Barat sekaligus pertahanan Kristen terhadap Islam. Selama itu pula, kota ini tidak lepas dari ancaman, namun selalu selamat dari penyerangan. Hingga akhirnya, pasukan Turki Ottoman yang dipimpin oleh Mehmet II atau Muhammad Al-Fatih berhasil menaklukkan Konstantinopel. Konstantinopel jatuh ke tangan Turki Ottoman pada 29 Mei 1453, setelah 53 hari dikepung oleh pasukan Mehmet II. Konstantin XI selaku raja pun terbunuh saat ibu kota kekaisaran Bizantium atau Romawi Timur jatuh ke tangan muslim. Konstantinopel yang terletak di tepi pantai Laut Marmora di dekat Selat Bosporus merupakan kota transit rempah-rempah pertama di sekitar Laut Tengah yang menghubungkan barang-barang antara Eropa dan Asia. Jatuhnya Konstantinopel ke tangan Turki kemudian membuat kondisi perdagangan bangsa Eropa mengalami kemandegan. Sebab, Bangsa Turki Usmani banyak membuat peraturan yang menyulitkan lalu lintas pelayaran bangsa Eropa, terutama dalam memperoleh rempah-rempah. Itulah mengapa, jatuhnya konstantinopel ke tangan Turki Ottoman menjadi salah satu faktor yang mendorong kedatangan bangsa Barat ke Indonesia.</P>
                        <br>
                        <h3>Sejarah singkat Konstantinopel</h3>
                        <br>
                        <p>Konstantinopel telah menjadi ibu kota kekaisaran sejak pentahbisannya pada tahun 330 di bawah kaisar Romawi Konstantinus Agung. Dalam kurun waktu 11 abad berikutnya, kota ini telah dikepung berkali-kali tetapi hanya pernah direbut sekali sebelumnya, selama Perang Salib Keempat pada 1204. Tentara Salib kemudian mendirikan negara Latin di sekitar Konstantinopel, sementara Kekaisaran Bizantium terpecah menjadi negara-negara kecil, seperti Nicea, Epirus dan Trebizond. Mereka bertempur sebagai sekutu melawan pendirian Latin, tetapi juga berjuang di antara mereka sendiri untuk takhta Bizantium. Bangsa Nicea akhirnya merebut kembali Konstantinopel dari orang Latin pada tahun 1261 dan membangun kembali Kekaisaran Bizantium di bawah dinasti Palaiologos. Setelah itu, kekaisaran ini semakin melemah karena harus terus menangkis serangan berturut-turut oleh orang Latin, Serbia, Bulgaria, dan Turki Usmani.</p>
                        <br>
                        <h3>Jatuhnya Konstantinopel</h3>
                        <br>
                        <p>Ketika Mehmed II mewarisi takhta ayahnya pada 1451, usianya baru 19 tahun. Hal ini membuat pihak Eropa berasumsi bahwa penguasa muda Turki Usmani tersebut tidak akan mengancam hegemoni Kristen di Balkan dan Laut Aegea. Bahkan bangsa Eropa sempat merayakan penobatan Mehmed II dan berharap minimnya pengalaman yang dimilikinya akan menyesatkan Ottoman. Namun siapa sangka, pada 1452, Mehmed II mulai menjalankan rencananya dengan membangun benteng di Bosphorus, beberapa mil di utara Konstantinopel. Pada Oktober 1452, Mehmed menempatkan pasukan di Peloponnese untuk memblokade Thomas dan Demetrios supaya tidak bisa memberi bantuan kepada saudara mereka, Konstantin XI, dalam serangan yang akan datang. Berbekal persenjataan baru nan canggih, pada 6 April 1453, sebanyak 80.000 pasukan Muslim yang dipimpin Mehmed memulai serangan terhadap 8.000 pasukan Kristen di bawah pimpinan Konstantin XI, kaisar Bizantium ke-57. Pemuda 21 tahun yang haus keagungan ini pun, berhasil melewati tembok pertahanan kota bersama bala tentaranya yang sangat besar. Setelah 53 hari dikepung, Konstantinopel akhirnya jatuh pada 29 Mei 1453, menandai runtuhnya kekuasaan Bizantium dan berakhirnya Abad Pertengahan. Setelah menaklukkan kota, Mehmed II menjadikan Konstantinopel sebagai ibu kota Ottoman yang baru, menggantikan Adrianople.</p>
                        <br>
                        <h3>Dampak Jatuhnya Konstantinopel ke tangan Turki</h3>
                        <br>
                        <p>Dampak jatuhnya Konstantinopel sangat besar sehingga mengubah peta kekuatan di wilayah Mediterania dan memperjelas ancaman bagi pemangku kepentingan dan bangsa-bangsa Kristen. Orang-orang Eropa sangat terkejut dan melihat peristiwa bersejarah ini sebagai bencana bagi peradaban mereka. Sementara di dunia Kristen, penaklukan ini memengaruhi kehidupan agama, militer, ekonomi, dan psikologis mereka. Mereka khawatir kerajaan Kristen Eropa lainnya akan bernasib sama dengan Konstantinopel. Selain itu, banyak ilmuwan Yunani dari Konstantinopel yang mengungsi ke Eropa dan menumbuhkan ilmu pengetahuan di sana. Salah satu dampak jatuhnya Konstantinopel ke tangan bangsa Turki bagi bangsa Eropa adalah terputusnya jalur perdagangan rempah-rempah Asia-Eropa. Sebab, Bangsa Turki Usmani banyak membuat peraturan yang menyulitkan lalu lintas pelayaran bangsa Eropa, terutama dalam memperoleh rempah-rempah. Keadaan ini mendorong para pedagang Eropa mencari jalan lain ke pusat penghasil rempah-rempah di Asia, termasuk Indonesia. Itulah mengapa, jatuhnya Konstantinopel ke tangan Turki telah mendorong bangsa Eropa datang ke Indonesia. Penjelajahan samudera kemudian menjadi cara bangsa Eropa untuk mencapai Asia. Bangsa Eropa yang memelopori penjelajahan samudera adalah Portugis dan Spanyol. Sebab, di antara bangsa-bangsa lain, dua negara ini menghadapi kesulitan ekonomi paling parah setelah jatuhnya Konstantinopel. Dalam perjalanannya, bangsa Eropa juga menemukan banyak wilayah baru di berbagai belahan dunia.</p>
                    </div>

                </div>
            </div>
            <div class="container-lg mt-5">

                <div class="row text-start mb-3">
                    <h3>Baca Juga</h3>
                </div>
                <?php
                include "proses/connect.php";
                $query  = mysqli_query($conn, "SELECT foto,judul,judul2,keterangan FROM tb_daftar_article WHERE id = '20'");
                while ($hasil = mysqli_fetch_array($query)) {

                ?>
                    <div class="col-11 col-lg-12">

                        <div class="row featurette mb-3 border rounded overflow-hidden shadow-sm h-md-250 position-relative">
                            <div class="col-md-7 mt-2">
                                <h2 class="featurette-heading fw-normal lh-1"><?php echo $hasil["judul"]; ?> </h2>
                                <p class="lead" style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis;"><?php echo $hasil["keterangan"]; ?>.</p>
                                <a href="rmph.php" class="stretched-link"></a>
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