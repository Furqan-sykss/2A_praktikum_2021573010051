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
            $query = mysqli_query($conn, "SELECT foto,judul,judul2,keterangan FROM tb_daftar_article WHERE id = '1'");
            while ($hasil = mysqli_fetch_array($query)) {
            ?>

                <div class="col-lg-12 mt-5 ">
                    <h1 class="text-center"><?php echo $hasil['judul'] ?></h1>
                    <br>
                    <h4 class="text-center text-secondary"><?php echo $hasil['judul2'] ?></h4>
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
                <p>PELURU meriam dari kapal <em>Citadel van Antwerpen</em> menghantam benteng di tepi pantai Aceh. Tembakan itu berbalas. Saling balas tembakan meriam pada pagi 27 Maret 1873 itu menandai mula Perang Aceh.</p>
                <p>
                    Setelah lebih dari sepekan, ribuan tentara pemerintah Hindia Belanda akhirnya mendarat dan merangsek ke pedalaman. Tapi, di depan Masjid Raya, pertempuran kembali terjadi. Bahkan pemimpin pasukan, Jenderal Kohler, tewas. Van Daalen, wakil Kohler, lekas menarik mundur pasukan.
                </p>
                <p>
                    Para pembesar militer berupaya menyusun ulang strategi penyerangan. Berkali-kali mereka menyerang Aceh, berkali-kali pula mereka gagal menaklukan Aceh.
                </p>
                <p>Snouck Hurgronje berada di Mekkah ketika dia memperoleh kabar rentetan kegagalan pemerintah Hindia Belanda di Aceh pada 1889. Sumbernya suratkabar dan mulut para haji asal Hindia Belanda, termasuk dari Aceh.</p>
                <p>Snouck bahkan mengetahui ada pengiriman senjata secara rahasia dari Kesultanan Utsmani di Istanbul, Turki, ke orang-orang Aceh yang menyamar jadi haji.</p>
                <p>“Para pemberontak yang melarikan diri dan dicari oleh para pembesar Belanda, diketahui berada di Tanah Suci Islam,” tulis P. SJ. van Koningsveld dalam </p>
                <h5>Menguliti Aceh</h5>
                <p>Perang Aceh sudah berjalan hampir 16 tahun. Tapi pemerintah Hindia Belanda belum mampu menaklukan Aceh. Snouck tertarik dengan kenyataan itu. Snouck mengajukan permohonan pergi ke Aceh. Permohonannya dikabulkan pembesar Belanda di Den Haag dan Batavia.</p>
                <p>Snouck tiba di Aceh pada 16 Juli 1891 dan mengemban perintah khusus dari van Teijn, gubernur Aceh, untuk mengupas kedudukan para ulama. Tapi dia menghadapi kesulitan.</p>
                <p></p>
                <p></p>
            </div>
        </div>
    </div>
    <div class="container-lg mt-5">

        <div class="row text-start mb-3">
            <h3>Baca Juga</h3>
        </div>
        <?php
        include "proses/connect.php";
        $query  = mysqli_query($conn, "SELECT foto,judul,judul2,keterangan FROM tb_daftar_article WHERE id = '11'");
        while ($hasil = mysqli_fetch_array($query)) {

        ?>
            <div class="col-11 col-lg-10">

                <div class="row featurette mb-3 border rounded overflow-hidden shadow-sm h-md-250 position-relative">
                    <div class="col-md-7 mt-2">
                        <h2 class="featurette-heading fw-normal lh-1"><?php echo $hasil["judul"]; ?> <span class="text-muted">It’ll blow your mind.</span></h2>
                        <p class="lead" style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis;"><?php echo $hasil["keterangan"]; ?>.</p>
                        <a href="art3.php" class="stretched-link"></a>
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