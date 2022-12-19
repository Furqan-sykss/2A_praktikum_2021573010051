<?php
include "proses/connect.php";
$query  = mysqli_query($conn, "SELECT foto,judul,judul2 FROM tb_daftar_article WHERE id = '1'");
while ($hasil = mysqli_fetch_array($query)) {
?>
    <div class="container lg">

        <div class="col  mt-3">
            <div class="p-4 p-md-5 mb-4 rounded text-bg-dark " style=" background-image: url(assets/img/<?php echo $hasil['foto'] ?>) ;">
                <div class="col-md-6 px-0 border" style="backdrop-filter: blur(5px); text-shadow: 2px 2px 5px black;">
                    <h1 class="display-4 fst-italic"><?php echo $hasil["judul"]; ?> </h1>
                    <p class="lead my-3"><?php echo $hasil["judul2"]; ?> </p>
                    <a href="art1.php" class="stretched-link"></a>
                </div>
            </div>
        </div>
    </div>
<?php
}
?>
<div class="container-lg">
    <div class="col">

        <div class="row mb-2">
            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary">World</strong>
                        <h3 class="mb-0">Featured post</h3>
                        <div class="mb-1 text-muted">Nov 12</div>
                        <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="stretched-link">Continue reading</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                        </svg>

                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-success">Design</strong>
                        <h3 class="mb-0">Post title</h3>
                        <div class="mb-1 text-muted">Nov 11</div>
                        <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="stretched-link">Continue reading</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                        </svg>

                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col-auto d-none d-lg-block">
                        <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                        </svg>

                    </div>
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-success">Design</strong>
                        <h3 class="mb-0">Post title</h3>
                        <div class="mb-1 text-muted">Nov 11</div>
                        <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="stretched-link">Continue reading</a>
                    </div>
                </div>
            </div>
            <div id="carouselExampleControls" class="carousel slide mb-3  " data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="assets/img/article1.png" class="d-block w-100" alt="...">
                        <div class=" card-img-overlay ">
                            <div class="carousel-caption  w-200 text-info">
                                <h3>Lorem ipsum dolor sit amet.</h3>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores, ipsam!</p>
                                <button type="button" class="btn btn-danger"> Read More</button>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="assets/img/bg2.jpg" class="d-block w-100" alt="...">
                        <div class=" card-img-overlay ">
                            <div class="carousel-caption  w-200 text-light">
                                <h3>Lorem ipsum dolor sit amet.</h3>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores, ipsam!</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="assets/img/bg3.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>

</div>