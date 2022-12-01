<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Amerta</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/carousel/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>


    <!--NAVBAR-->
    <?php include "navbar.php"; ?>
    <!--AKHIR NAVBAR-->

    <div class="container-fluid">


        <div class="col mt-5">
            <div id="carouselExampleControls" class="carousel slide mb-3  " data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/bg1.jpg" class="d-block w-100" alt="...">
                        <div class=" card-img-overlay ">
                            <div class="carousel-caption  w-200 text-info">
                                <h3>Lorem ipsum dolor sit amet.</h3>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores, ipsam!</p>
                                <button type="button" class="btn btn-danger"> Read More</button>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/bg2.jpg" class="d-block w-100" alt="...">
                        <div class=" card-img-overlay ">
                            <div class="carousel-caption  w-200 text-light">
                                <h3>Lorem ipsum dolor sit amet.</h3>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores, ipsam!</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/bg3.jpg" class="d-block w-100" alt="...">
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


    <!-- Marketing messaging and featurettes
================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing ">

        <!-- Three columns of text below the carousel -->
        <div class="row text-center mb-3">
            <div class="col">
                <h2>lorem ipsum parabelum</h2>
                <h2>seketum waketum</h2>
            </div>
        </div>
        <div class=" mb-5 row row-cols-3 row-cols-md-3 g-4">
            <div class="col-6 col-lg-3">
                <div class="card h-100">
                    <img src="img/bg4.jpg" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>

                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="card h-100">
                    <img src="img/bg3.jpg" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                    </div>

                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="card h-100">
                    <img src="img/bg2.jpg" alt="">

                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                    </div>

                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="card h-100">
                    <img src="img/bg1.jpg" alt="">

                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">

        <div class="row featurette mb-3">
            <div class="col-md-7">
                <h2 class="featurette-heading fw-normal lh-1">First featurette heading. <span class="text-muted">It’ll blow your mind.</span></h2>
                <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting prose here.</p>
            </div>
            <div class="col-md-5">
                <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text>
                </svg>

            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading fw-normal lh-1">Oh yeah, it’s that good. <span class="text-muted">See for yourself.</span></h2>
                <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
            </div>
            <div class="col-md-5 order-md-1">
                <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text>
                </svg>

            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading fw-normal lh-1">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
                <p class="lead">And yes, this is the last block of representative placeholder content. Again, not really intended to be actually read, simply here to give you a better view of what this would look like with some actual content. Your content.</p>
            </div>
            <div class="col-md-5">
                <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text>
                </svg>

            </div>
        </div>

        <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->




    <!--card start-->
    <div class="container">

        <div class="row text-center mb-3">
            <div class="col">
                <h2>lorem ipsum parabelum</h2>
                <h2>seketum waketum</h2>
            </div>
        </div>
        <div class="row row-cols-3 row-cols-md-3 g-4 mb-3">
            <div class="col-6 col-lg-3">
                <div class="card h-100">

                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>

                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                    </div>

                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                    </div>

                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!--card start-->


    <!-- FOOTER -->
    <footer class="container">
        <p class="float-end"><a href="#">Back to top</a></p>
        <p class="text-center">&copy; 2022 Amerta. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>

    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>


</body>

</html>