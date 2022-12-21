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
            $query = mysqli_query($conn, "SELECT foto,judul,judul2,keterangan FROM tb_daftar_article WHERE id = '5'");
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
                <p>Pada titik-titik tertentu dalam hidup, gak jarang orang-orang bakal merenung atau setidaknya bertanya-tanya untuk apa sih sebenarnya kita hidup selama ini. Dan hal itu buat kita jadi semakin bingung tentang filosofi kehidupan dan tujuan hidup kita sendiri.</p>
                <p>
                    <strong>
                        Filosofi kehidupan sendiri
                    </strong>
                    merupakan setiap sikap atau pandangan seseorang yang berkaitan dengan kebermaknaan akan kehidupan atau tentang bagaimana menjalani hidup seharusnya. Di mana filosofi kehidupan berfungsi sebagai landasan seseorang setiap melakukan sesuatu dalam hidupnya.
                </p>
                <p>
                    Selain terkait dengan makna dalam hidup, filosofi kehidupan sangat berkaitan pula dengan tujuan hidup. Makanya saat seseorang bingung dengan apa sih filosofi kehidupan dalam menjalaninya, pasti juga akan bingung pula dengan tujuan hidup yang ia miliki.
                </p>
                <p>
                    Biasanya saat kita sedang capek banget dengan keadaan, pasti sering timbul pertanyaan-pertanyaan yang buat kita jadi mikir,
                    <strong>
                        “Sebenarnya tujuan hidup aku itu apa, sih?"
                    </strong>
                </p>
                <p>
                    Awalnya, hal-hal seperti ini pasti kamu rasa merupakan hal yang sepele, kan? Padahal sebenarnya punya makna yang sangat mendalam dan gak sesederhana yang selama ini kamu pikirkan, loh.
                </p>
                <p>
                    Pada dasarnya, tujuan hidup setiap orang berbeda sehingga gak ada jawaban pasti tentang benar atau salah dalam menentukan tujuan hidup. Dan karena ketidakpastian, semua orang jadi berlomba-lomba untuk mencari tahu tujuan hidup mereka, mencari tahu apa makna hidup yang sebenarnya.
                </p>
                <p>
                    Tapi, hal ini berbeda dengan filsuf asal Algeria bernama Albert Camus. Ia justru berpikiran bahwa hidup itu absurd. Karena baginya, kehidupan itu pada dasarnya gak memiliki makna dan tujuan tertentu, makanya hidup itu absurd alias gak jelas.
                </p>
                <br>
                <h4>Siapa Sih Albert Camus</h4>
                <div class="clearfix">
                    <img src="assets/img/camus.jpg" height="300px" class="col-md-4 float-md-end mb-3 ms-md-3" alt="...">
                    <p>
                        Albert Camus adalah seorang jurnalis, penulis dan filsuf yang lahir di Algeria pada tahun 1913. Walaupun lahir dari keluarga yang kurang mampu, hal itu gak menghalangi Camus untuk terus maju hingga akhirnya berhasil menjadi seorang penulis dan filsuf terkenal.
                    </p>
                    <p>
                        Pada tahun 1957, Camus
                        <strong>
                            mendapatkan penghargaan The Nobel Prize dalam bidang Literatur
                        </strong>
                        karena tulisan-tulisan yang dibuatnya bukan hanya sekedar karya fiksi biasa, namun juga
                        <strong>
                            menuangkan pemikiran dan pesan yang sangat luar biasa.
                        </strong>
                    </p>
                    <p>
                        Dengan prestasinya dalam bidang literatur, Camus mungkin lebih cocok dipanggil sebagai seorang sastrawan daripada seorang filsuf. Namun apabila kita lihat lebih lanjut, sebenarnya Camus adalah
                        <strong>
                            seorang filsuf yang bisa menuangkan pemikirannya melalui karya sastra dengan bahasa yang indah.
                        </strong>
                    </p>
                </div>
                <br>
                <br>
                <h4>Filosofi Kehidupan ala Albert Camus: Hidup Itu Absurd!</h4>
                <div class="clearfix">
                    <p> Berbeda dengan filsuf-filsuf lainnya yang memiliki pandangan tersendiri terkait makna dan tujuan dalam hidup,
                        <strong>
                            Albert Camus memandang kehidupan sebagai sesuatu yang gak memiliki makna dan tujuan.
                        </strong>
                    </p>
                    <p>
                        Melalui tulisan berjudul
                        <strong>
                            ‘L’Étranger’
                        </strong>
                        yang dirilis pada tahun 1942, Camus menuangkan pemikiran filosofi kehidupan bahwa hidup itu gak memiliki makna dan tujuan melalui suatu cerita fiksi.
                    </p>
                    <img class="col-md-4 float-md-end mb-3 ms-md-3" src="assets/img/meme.jpg" height="300px" alt="">

                    <p>
                        Karakter utamanya, Meursault, digambarkan sebagai seseorang yang suka melawan kebiasaan manusia karena merasa hidup tidak ada maknanya lagi.
                    </p>
                    <p>Contohnya, ketika kebanyakan orang akan sedih dan menangis atas kepergian dari seseorang yang mereka sayangi. Meursault merasa biasa saja seolah-olah tidak terjadi apa-apa, bahkan saat kepergian ibunya sendiri.
                    </p>
                    <p>Bagi Meursault, ada ataupun gak ada ibunya, hidup akan terus berjalan. Apapun yang terjadi, dia akan terus menjalani aktivitas seperti biasanya dan hal inilah yang dimaksud dengan ‘kehidupan gak ada makna dan tujuan tertentu’.
                    </p>
                    <p>
                        Di sinilah filosofi kehidupan ala Albert Camus tentang hidup itu absurd muncul. Menurut Camus,
                        <strong>
                            ketidakbermaknaan yang tersembunyi dalam hidup menyatakan bahwa keberadaan manusia itu absurd.
                        </strong>
                    </p>
                    <p>
                        Pasti kamu jadi bertanya-tanya. Terus kalau hidup itu absurd, kita harus bagaimana, dong? Kalau gak ada makna dan tujuan dalam menjalani hidup, apa yang seharusnya kita lakukan?
                    </p>
                    <p>
                        Albert Camus menyebutkan bahwa
                        <strong>
                            menerima dan menjalani hidup dengan apa adanya
                        </strong>
                        adalah tindakan yang paling tepat saat kita tahu hidup itu absurd. Karena menurutnya,
                        <strong>
                            living yourself to the fullest adalah kunci kita bisa mencapai kebahagiaan dalam hidup ini.
                        </strong>
                    </p>
                </div>
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
                        <h2 class="featurette-heading fw-normal lh-1"><?php echo $hasil["judul"]; ?> </h2>
                        <p class="lead" style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis;"><?php echo $hasil["keterangan"]; ?>.</p>
                        <a href="art1.php" class="stretched-link"></a>
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