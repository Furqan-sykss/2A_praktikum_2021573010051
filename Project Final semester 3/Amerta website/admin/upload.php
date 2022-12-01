<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
</head>

<body>
    <!--header-->
    <nav class="navbar navbar-expand navbar-light bg-info sticky-top">
        <div class="container-lg">
            <a class="navbar-brand" href=".">
                Amerta
            </a>
            <div class="collapse navbar-collapse d-flex justify-content-end me-5" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Username
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">
                                    <i class="bi bi-gear"></i> Setting</a></li>

                            <li><a class="dropdown-item" href="#">
                                    <i class="bi bi-person-circle"></i> Profile</a></li>

                            <li><a class="dropdown-item" href="logout">
                                    <i class="bi bi-box-arrow-left"></i> Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--end header-->

    <div class="container-lg">
        <div class="row">
            <!--side bar-->
            <?php include "sidebar.php"; ?>
            <!--end side bar-->

            <!--content-->
            <div class="col-lg-9  mt-3">
                <div class="card">
                    <div class="card-header">
                        Upload
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Upload</h5>
                        <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error neque ea accusantium, architecto tempore nisi? Animi eius molestiae quod pariatur distinctio ipsam eligendi numquam suscipit.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <!--end content-->
        </div>

        <div class="fixed-bottom text-center mb-3">
            Amerta
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>