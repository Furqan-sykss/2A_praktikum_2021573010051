<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap v5.2 Design Login Forms</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>
<style>
    .bg-image-vertical {
        position: relative;
        overflow: hidden;
        background-repeat: no-repeat;
        background-position: right center;
        background-size: auto 100%;
    }

    @media (min-width: 1025px) {
        .h-custom-2 {
            height: 100%;
        }
    }
</style>

<body>
    <section class="vh-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 ">

                    <div class="vh-100 d-flex justify-content-center align-items-center">
                        <div class="col-md-4 p-5 shadow-sm border rounded-5 border-primary w-75 ">
                            <h2 class="text-center mb-4 text-primary">Register</h2>
                            <form>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Nama</label>
                                    <input type="text" class="form-control border border-primary" id="exampleInputEmail1" name="" id="">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail2" class="form-label">Alamat Email</label>
                                    <input type="email" class="form-control border border-primary" id="exampleInputEmail2" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Password</label>
                                    <input type="password" class="form-control border border-primary" id="exampleInputPassword1">
                                </div>
                                <div class="d-grid gap-2 col-6 mx-auto text-end mt-3">
                                    <button class="btn btn-primary btn-lg" type="submit">Sign Up</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                <div class="col-sm-6 px-0 d-none d-sm-block">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img3.webp" alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
                </div>
            </div>
        </div>
    </section>
</body>

</html>