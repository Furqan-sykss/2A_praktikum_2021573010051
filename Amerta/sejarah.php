<?php
include "proses/connect.php";
$query  = mysqli_query($conn, "SELECT foto,judul,judul2 FROM tb_daftar_article WHERE id = '19'");
while ($hasil = mysqli_fetch_array($query)) {
?>
    <div class="container lg">

        <div class="col  mt-3">
            <div class="p-4 p-md-5 mb-4 rounded text-bg-dark " style=" background-image: url(assets/img/<?php echo $hasil['foto'] ?>) ;">
                <div class="col-md-6 px-0 border" style="backdrop-filter: blur(5px); text-shadow: 2px 2px 5px black;">
                    <h1 class="display-4 fst-italic"><?php echo $hasil["judul"]; ?> </h1>
                    <p class="lead my-3"><?php echo $hasil["judul2"]; ?> </p>
                    <a href="perintah.php" class="stretched-link"></a>
                </div>
            </div>
        </div>
    </div>
<?php
}
?>


<div class="container-lg">


    <?php
    include "proses/connect.php";
    $query  = mysqli_query($conn, "SELECT foto,judul,judul2,keterangan,kategori FROM tb_daftar_article WHERE id = '20'");
    while ($hasil = mysqli_fetch_array($query)) {
    ?> <div class="row">
            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-success">Sejarah</strong>
                        <h4 class="mb-auto"><?php echo $hasil["judul"]; ?></h4>
                        <h6 class="mb-auto text-secondary"><?php echo $hasil["judul2"]; ?></h6>
                        <a href="rmph.php" class="stretched-link">Continue reading</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img src="assets/img/<?php echo $hasil["foto"]; ?>" width="200" height="250" alt="">
                    </div>
                </div>
            </div>
        <?php
    }
        ?>


        <?php
        include "proses/connect.php";
        $query  = mysqli_query($conn, "SELECT foto,judul,judul2,keterangan,kategori FROM tb_daftar_article WHERE id = '18'");
        while ($hasil = mysqli_fetch_array($query)) {
        ?>
            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-success">Filsafat</strong>
                        <h4 class="mb-auto"><?php echo $hasil["judul"]; ?></h4>
                        <h6 class="mb-auto text-secondary"><?php echo $hasil["judul2"]; ?></h6>
                        <a href="sipilwar.php" class="stretched-link">Continue reading</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img src="assets/img/<?php echo $hasil["foto"]; ?>" width="200" height="250" alt="">
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
        <?php
        include "proses/connect.php";
        $query  = mysqli_query($conn, "SELECT foto,judul,judul2,keterangan,kategori FROM tb_daftar_article WHERE id = '17'");
        while ($hasil = mysqli_fetch_array($query)) {
        ?>
            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-success">Filsafat</strong>
                        <h4 class="mb-auto"><?php echo $hasil["judul"]; ?></h4>
                        <h6 class="mb-auto text-secondary"><?php echo $hasil["judul2"]; ?></h6>
                        <a href="konst1.php" class="stretched-link">Continue reading</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img src="assets/img/<?php echo $hasil["foto"]; ?>" width="200" height="250" alt="">
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
        </div>
</div>

<div class="row text-center mb-3">
    <div class="col">
        <h1>Baca lagi</h1>
        <h2>Berikut rekomendasi artikel</h2>
    </div>
</div>
<!-- START THE FEATURETTES -->

<div class="container-lg">
    <?php
    include "proses/connect.php";
    $query  = mysqli_query($conn, "SELECT foto,judul,keterangan FROM tb_daftar_article WHERE id = '14'");
    while ($hasil = mysqli_fetch_array($query)) {

    ?>
        <hr class="featurette-divider mb-3 ">
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

    <?php
    }
    ?>

    <?php
    include "proses/connect.php";
    $query  = mysqli_query($conn, "SELECT foto,judul,keterangan FROM tb_daftar_article WHERE id = '15'");
    while ($hasil = mysqli_fetch_array($query)) {

    ?>
        <div class=" mt-5 row featurette border rounded overflow-hidden shadow-sm h-md-250 position-relative">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading fw-normal lh-1"><?php echo $hasil["judul"]; ?> </h2>
                <p class="lead" style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis;"><?php echo $hasil["keterangan"]; ?>.</p>
                <a href="bendera.php" class="stretched-link"></a>
            </div>
            <div class="col-md-5 mt-2 mb-3">
                <img src="assets/img/<?php echo $hasil['foto'] ?>" width="500" height="500" class="img-thumbnail" alt="...">
                </svg>

            </div>
        </div>
    <?php
    }
    ?>
</div>
<hr>
<!-- END THE FEATURETTES -->
<div class="container-lg">

    <div class="row text-center mb-3">
        <div class="col">
            <h1>Artikel menarik lainnya</h1>
            <h2>rekomendasi artikel</h2>
        </div>
    </div>

    <hr class="featurette-divider">

    <div id="carouselExampleCaptions" class="carousel slide w-100" data-bs-ride="false">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>


        <div class="carousel-inner">
            <?php
            include "proses/connect.php";
            $query = mysqli_query($conn, "SELECT foto,judul,judul2,keterangan FROM tb_daftar_article WHERE id = '16'");
            while ($hasil = mysqli_fetch_array($query)) {
            ?>
                <div class="carousel-item active">
                    <a href="acehdaud.php" class="stretched-link"> <img src="assets/img/<?php echo $hasil['foto'] ?>" class="d-block w-100" alt="...">
                        <div class="carousel-caption ">
                            <h1><?php echo $hasil['judul'] ?></h1>
                        </div>
                    </a>
                </div>
            <?php
            }
            ?>

            <?php
            include "proses/connect.php";
            $query = mysqli_query($conn, "SELECT foto,judul,judul2,keterangan FROM tb_daftar_article WHERE id = '3'");
            while ($hasil = mysqli_fetch_array($query)) {
            ?>
                <div class="carousel-item">
                    <a href="art4.php" class="stretched-link"> <img src="assets/img/<?php echo $hasil['foto'] ?>" class="d-block w-100" alt="...">
                        <div class="carousel-caption ">
                            <h1><?php echo $hasil['judul'] ?></h1>
                        </div>
                    </a>
                </div>
            <?php
            }
            ?>

            <?php
            include "proses/connect.php";
            $query = mysqli_query($conn, "SELECT foto,judul FROM tb_daftar_article WHERE id = '1'");
            while ($hasil = mysqli_fetch_array($query)) {
            ?>
                <div class="carousel-item">
                    <a href="penghabisan.php" class="stretched-link"><img src="assets/img/<?php echo $hasil['foto'] ?>" class="d-block w-100" alt="alain de botton">
                        <div class="carousel-caption ">
                            <h1><?php echo $hasil['judul'] ?></h1>
                        </div>
                    </a>
                </div>
            <?php
            }
            ?>
            <div>

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>