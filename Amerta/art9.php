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


    <div class="container-lg mt-3">
        <div class="row">
            <?php
            include "proses/connect.php";
            $query = mysqli_query($conn, "SELECT foto,judul,judul2,keterangan FROM tb_daftar_article WHERE id = '9'");
            while ($hasil = mysqli_fetch_array($query)) {
            ?>
                <div class="col-lg-12 mt-2 text-center">
                    <h1><?php echo $hasil['judul'] ?></h1>
                    <br>
                    <h4 class="text-secondary"><?php echo $hasil['judul2'] ?></h4>
                    <br>
                    <div class="">
                        <img class="" src="assets/img/<?php echo $hasil['foto'] ?>" alt="" width="80%" height="100%">
                    </div>
                <?php
            }
                ?>
                </div>
        </div>

        <div class="container-lg mt-4">
            <div class="row">
                <br>
                <h3>
                    Kita Dapat tersenyum Kapan Saja
                </h3>
                </br>
                <p>
                    Epictetus adalah seorang budak. Awal kehidupannya tidak pernah beruntung. Dia disiksa dan dipukuli oleh majikan pertamanya hingga kakinya patah dan pincang seumur hidup. Tak cukup sampai disitu, ia juga hidup miskin, sebatang kara, dan terkekang sepanjang hidupnya. Saking miskinnya, nama 'Epictetus' pun adalah hasil 'sumbangan' dari majikan keduanya yang baik, Epaphroditus.
                </p>
                <p>
                    Di bawah 'naungan' majikannya yang kedua inilah kemudian Epictetus diperbolehkan menjalani laku tirakat belajarnya kepada salah satu filsuf stoik terbesar kala itu, Musonius Rufus. Berkontemplasi atas kisah hidup pribadinya yang tragis inilah dia kemudian menjadi salah satu tokoh Filsuf Stoik besar di Yunani.
                </p>
                <p>
                    <strong>
                        Filsafat
                    </strong>
                    Stoik sendiri akhir-akhir ini menjadi lebih dikenal berkat buku laris Henry Manampiring berjudul Filosofi Teras. Kata 'teras' diambil dari selasar/teras di salah satu sudut pasar di Yunani tempat orang-orang berkerumun dan belajar filsafat di jalananan. Mereka belajar dari siapapun pengunjung yang mau mengajarkan kebijaksanaan hidup. Di teras ini terdapat banyak pilar-pilar (stoik) khas bangunan Yunani. Dari pilar-pilar yang menemari para filsuf belajar inilah kemudian diambil nama Filsafat Stoik. Di tempat ini pula Epictetus belajar dan mengajarkan kebijaksanaannya.
                </p>
                <p>
                    Salah satu ajaran besar Epictetus yang legendaris adalah filsafat resiliensi. Suatu laku kognitif untuk mengidentifikasi mana aspek yang benar-benar dalam kendali kita, dan mana yang bukan dalam kendali kita. Epictetus mengajukan thesis bahwa dengan memahami betul kedua ranah tersebut, dapat meningkatkan 'daya tahan' kita terhadap peristiwa hidup maupun penderitaan yang kita hadapi.
                </p>
                <p>
                    Filsafat resiliensi yang ditawarkan Epictetus menyebutkan bahwa resiliensi (kemampuan diri untuk pulih kembali secara cepat dari keadaan sulit) dan kesehatan jiwa tumbuh dari fokus pada apa yang ada di bawah kendali kita dalam satu situasi, tanpa menjadikan diri kita gila karena hal-hal di luar kendali (Jules Evans dalam bukunya Philosophy for Life and Other Dangerous  Situation). Kita cukup mengontrol apa-apa yang memang benar dalam kendali kita dan berhenti mencemaskan dan menyalahkan hal-hal yang berada di luar kontrol kita.
                </p>
                <p>
                    Epictetus kemudian merumuskan hanya ada satu hal yang benar-benar dapat kita kendalikan, yakni pikiran kita. Semua hal di luar pikiran kita adalah aspek yang tidak dapat kita kendalikan. Kesehatan, kondisi cuaca, nyinyiran orang, kecelakaan yang menimpa, orang tua kita, pekerjaan kita, pasangan, jodoh, ekonomi, masa depan, masa lalu, atasan, kondisi tabungan, kondisi wabah, dan segala hal lain sebenarnya bukan benar-benar di bawah kendali kita.
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
        $query  = mysqli_query($conn, "SELECT foto,judul,judul2,keterangan FROM tb_daftar_article WHERE id = '4'");
        while ($hasil = mysqli_fetch_array($query)) {

        ?>
            <div class="col-11 col-lg-10">

                <div class="row featurette mb-3 border rounded overflow-hidden shadow-sm h-md-250 position-relative">
                    <div class="col-md-7 mt-2">
                        <h2 class="featurette-heading fw-normal lh-1"><?php echo $hasil["judul"]; ?></h2>
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