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
<div class="container marketing ">

    <!-- Three columns of text below the carousel -->
    <div class="row text-center mb-3">
        <div class="col">
            <h2>"To live is To Suffer , To Survive is to Find</h2>
            <h2>Some Meaning in The Suffering."</h2>
            <h5 class="text-secondary">Friedrich Nietzsche</h5>
        </div>
    </div>

    <div class="container mt-5">
        <div class="col">
            <div class=" mb-5 row row-cols-3 row-cols-md-3 g-4">
                <?php
                include "proses/connect.php";
                $query  = mysqli_query($conn, "SELECT foto,judul,judul2,keterangan,kategori FROM tb_daftar_article WHERE id = '9'");
                while ($hasil = mysqli_fetch_array($query)) {
                ?>
                    <div class=" col-6 col-lg-6">
                        <div class="card h-100">
                            <img src="assets/img/<?php echo $hasil["foto"]; ?>" alt="">
                            <div class="card-body">
                                <a href="art9.php" class="stretched-link"></a>
                                <h5 class="card-title"><?php echo $hasil["judul"]; ?></h5>
                                <p class="card-text"><?php echo $hasil["judul2"]; ?></p>
                            </div>
                        </div>
                    <?php
                }
                    ?>
                    </div>
                    <?php
                    include "proses/connect.php";
                    $query  = mysqli_query($conn, "SELECT foto,judul,judul2,keterangan,kategori FROM tb_daftar_article WHERE id = '10'");
                    while ($hasil = mysqli_fetch_array($query)) {
                    ?>
                        <div class=" col-6 col-lg-6">
                            <div class="card h-100">
                                <img src="assets/img/<?php echo $hasil["foto"]; ?>" alt="">
                                <div class="card-body">
                                    <a href="art10.php" class="stretched-link"></a>
                                    <h5 class="card-title"><?php echo $hasil["judul"]; ?></h5>
                                    <p class="card-text"><?php echo $hasil["judul2"]; ?></p>
                                </div>
                            </div>
                        <?php
                    }
                        ?>
                        </div>
                        <?php
                        include "proses/connect.php";
                        $query  = mysqli_query($conn, "SELECT foto,judul,judul2,keterangan,kategori FROM tb_daftar_article WHERE id = '11'");
                        while ($hasil = mysqli_fetch_array($query)) {
                        ?>
                            <div class="col-6 col-lg-6">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <a href="art11.php" class="stretched-link"></a>
                                        <h5 class="card-title"><?php echo $hasil["judul"]; ?></h5>
                                        <p class="card-text"><?php echo $hasil["judul2"]; ?></p>
                                    </div>
                                    <img height="" src="assets/img/<?php echo $hasil["foto"]; ?>" alt="">
                                </div>
                            <?php
                        }
                            ?>
                            </div>

            </div>
            <div class="row text-center mb-3">
                <div class="col">
                    <h2>"Kepanikan adalah Separuh Penyakit. <br>Ketenangan Adalah separuh Obat <br>Kesabaran Adalah Permulaan Kesembuhan"</h2>
                    <h5 class="text-secondary">Ibnu Sina</h5>
                </div>
            </div>
            <!-- START THE FEATURETTES -->

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


        <div class="container">
            <div class="row text-center mb-3">
                <div class="col">
                    <h3>"Seseorang yang tak tahu, dan tak tahu kalu dirinya tidak tahu,<br> Orang itu selamanya berada dalam kebodohan didalam kebodohan"</h3>
                    <h5 class="text-secondary">Jalaluddin Rumi</h5>
                </div>
            </div>
        </div>