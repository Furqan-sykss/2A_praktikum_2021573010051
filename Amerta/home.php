<div class="container mt-5">

    <div id="carouselExampleCaptions" class="carousel slide w-100" data-bs-ride="false">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <?php
            include "proses/connect.php";
            $query = mysqli_query($conn, "SELECT foto,judul,judul2,keterangan FROM tb_daftar_article WHERE id = '5'");
            while ($hasil = mysqli_fetch_array($query)) {
            ?>
                <div class="carousel-item active">
                    <a href="art5.php" class="stretched-link"> <img src="assets/img/<?php echo $hasil['foto'] ?>" class="d-block w-100" alt="...">
                        <div class="carousel-caption ">
                            <p><?php echo $hasil['judul'] ?></p>
                        </div>
                    </a>
                </div>
            <?php
            }
            ?>


            <?php
            include "proses/connect.php";
            $query = mysqli_query($conn, "SELECT foto,judul FROM tb_daftar_article WHERE id = '6'");
            while ($hasil = mysqli_fetch_array($query)) {
            ?>
                <div class="carousel-item">
                    <a href="art6.php" class="stretched-link"><img src="assets/img/<?php echo $hasil['foto'] ?>" class="d-block w-100" alt="alain de botton">
                        <div class="carousel-caption ">
                            <p><?php echo $hasil['judul'] ?></p>
                        </div>
                    </a>
                </div>
            <?php
            }
            ?>

            <?php
            include "proses/connect.php";
            $query = mysqli_query($conn, "SELECT foto,judul FROM tb_daftar_article WHERE id = '7'");
            while ($hasil = mysqli_fetch_array($query)) {
            ?>
                <div class="carousel-item">
                    <a href="art7.php" class="stretched-link"><img src="assets/img/<?php echo $hasil['foto'] ?>" class="d-block w-100" alt="epicurus">
                        <div class="carousel-caption ">
                            <p><?php echo $hasil['judul'] ?></p>
                        </div>
                    </a>
                </div>
            <?php
            }
            ?>
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

<?php
include "proses/connect.php";
$query  = mysqli_query($conn, "SELECT foto,judul,judul2 FROM tb_daftar_article WHERE id = '19'");
while ($hasil = mysqli_fetch_array($query)) {
?>
    <div class="container-lg mt-5">

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

<div class="container mt-5">
    <div class="col">


        <?php
        include "proses/connect.php";
        $query  = mysqli_query($conn, "SELECT foto,judul,judul2,keterangan,kategori FROM tb_daftar_article WHERE id = '2'");
        while ($hasil = mysqli_fetch_array($query)) {
        ?>
            <div class="row">

                <div class="col-md-6">
                    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column position-static">
                            <strong class="d-inline-block mb-2 text-primary">World</strong>
                            <h4 class="mb-auto"><?php echo $hasil["judul"]; ?></h4>
                            <h6 class="mb-auto text-secondary"><?php echo $hasil["judul2"]; ?></h6>
                            <a href="art2.php" class="stretched-link">Continue reading</a>
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
            $query  = mysqli_query($conn, "SELECT foto,judul,judul2,keterangan,kategori FROM tb_daftar_article WHERE id = '8'");
            while ($hasil = mysqli_fetch_array($query)) {
            ?>
                <div class="col-md-6">
                    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column position-static">
                            <strong class="d-inline-block mb-2 text-success">Filsafat</strong>
                            <h4 class="mb-auto"><?php echo $hasil["judul"]; ?></h4>
                            <h6 class="mb-auto text-secondary"><?php echo $hasil["judul2"]; ?></h6>
                            <a href="art8.php" class="stretched-link">Continue reading</a>
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
</div>

<?php
include "proses/connect.php";
$query  = mysqli_query($conn, "SELECT foto,judul,keterangan FROM tb_daftar_article WHERE id = '4'");
while ($hasil = mysqli_fetch_array($query)) {

?>
    <div class="row featurette mt-5 mb-3 border rounded overflow-hidden shadow-sm h-md-250 position-relative">
        <div class="col-md-7 mt-2">
            <h2 class="featurette-heading fw-normal lh-1"><?php echo $hasil["judul"]; ?></h2>
            <p class="lead" style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis;"><?php echo $hasil["keterangan"]; ?>.</p>
            <a href="art1.php" class="stretched-link"></a>
        </div>
        <div class="col-md-5 mt-2 mb-3">
            <img src="assets/img/<?php echo $hasil['foto'] ?>" width="500" height="500" class="img-thumbnail" alt="...">
        </div>
    </div>
<?php
}
?>


<?php
include "proses/connect.php";
$query  = mysqli_query($conn, "SELECT foto,judul,keterangan FROM tb_daftar_article WHERE id = '12'");
while ($hasil = mysqli_fetch_array($query)) {
?>
    <div class="row featurette mt-5 mb-3 border rounded overflow-hidden shadow-sm h-md-250 position-relative">
        <div class="col-md-5 mt-2 mb-3">
            <img src="assets/img/<?php echo $hasil['foto'] ?>" width="500" height="500" class="img-thumbnail" alt="...">
        </div>
        <div class="col-md-7 mt-2">
            <h2 class="featurette-heading fw-normal lh-1"><?php echo $hasil["judul"]; ?></h2>
            <p class="lead" style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis;"><?php echo $hasil["keterangan"]; ?>.</p>
            <a href="art12.php" class="stretched-link"></a>
        </div>
    </div>
<?php
}
?>




<?php
include "proses/connect.php";
$query  = mysqli_query($conn, "SELECT foto,judul,keterangan FROM tb_daftar_article WHERE id = '13'");
while ($hasil = mysqli_fetch_array($query)) {
?>
    <div class="row featurette mt-5 mb-3 border rounded overflow-hidden shadow-sm h-md-250 position-relative">
        <div class="col-md-7 mt-2">
            <h2 class="featurette-heading fw-normal lh-1"><?php echo $hasil["judul"]; ?></h2>
            <p class="lead" style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis;"><?php echo $hasil["keterangan"]; ?>.</p>
            <a href="art13.php" class="stretched-link"></a>
        </div>
        <div class="col-md-5 mt-2 mb-3">
            <img src="assets/img/<?php echo $hasil['foto'] ?>" width="500" height="500" class="img-thumbnail" alt="...">
        </div>
    </div>
<?php
}
?>
</div>

<div class="container-lg">
    <?php
    include "proses/connect.php";
    $query  = mysqli_query($conn, "SELECT foto,judul,keterangan FROM tb_daftar_article WHERE id = '14'");
    while ($hasil = mysqli_fetch_array($query)) {

    ?>
        <div class="mt-5 row featurette mb-3 border rounded overflow-hidden shadow-sm h-md-250 position-relative">
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