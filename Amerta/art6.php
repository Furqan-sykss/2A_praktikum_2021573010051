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
            $query = mysqli_query($conn, "SELECT foto,judul,judul2,keterangan FROM tb_daftar_article WHERE id = '6'");
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
                <p>
                    <strong>
                        Kamu nyadar gak sih kalau sekarang banyak orang yang mungkin kesulitan dalam menikmati hidup?
                    </strong>
                    Untuk menikmati hidup, beberapa menganggap bahwa lo harus mempunyai pencapaian karir bagus, pendidikan tinggi, dan materi yang melimpah. Ada tingkatan-tingkatan hidup yang wajib lo gapai dalam perjalanan lo bertumbuh dan bertambah usia. Padahal, mencapai kesuksesan yang sempurna itu lumayan susah.
                <p>
                    <strong>
                        Nah, Alain de Botton berhasil menemukan solusi atas keresahan yang kita semua rasakan.
                    </strong>
                    Ia memberikan suatu pandangan baru mengenai makna hidup yang lebih bahagia untuk dijalani. Alain menawarkan metode hidup biasa aja yang bisa diterapkan oleh semua orang .
                </p>
                <p>
                    Menurut Alain, ada 3 sumber masalah utama yang membuat kita semua tidak bisa menikmati hidup secara utuh. Apa saja itu? Nah, untuk lebih jelasnya, kalian bisa baca artikel ini sampai selesai buat dapat wawasan yang baik soal pandangan
                    <strong>
                        Alain de Botton
                    </strong>
                    ini, ya!
                </p>
                <br>
                <h4>Siapa itu Alain de botton</h4>
                <p>
                    Alain de Botton merupakan seorang filsuf dan penulis asal Inggris yang lahir di Swiss, 20 Desember 1969 silam. Alain banyak menerbitkan buku bertema kontemporer, seperti perjalanan hidup, hubungan, pekerjaan, sastra dan lain-lain. Tulisannya dikenal sebagai
                    <strong>
                        “'philosophy of everyday life​​” karena dianggap relevan dalam menggambarkan kondisi yang sedang dihadapi oleh masyarakat saat ini.
                    </strong>
                    Buku-bukunya telah menjadi buku terlaris di 30 negara, bahkan salah satu buku Alain berjudul
                    <strong>
                        “Essays in Love”
                    </strong>
                    telah terjual sebanyak dua juta kopi.
                </p>
                <p>
                    Selain itu, Alain juga dikenal sebagai pendiri School of Life Global, sebuah platform edukasi yang berfokus pada pengembangan diri. School of Life Global bertujuan memberi edukasi dan membantu orang untuk menjalani kehidupan yang lebih meaningful. Sama seperti di Satu Persen, School of Life Global juga menyediakan layanan online psychotherapy.
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
        $query  = mysqli_query($conn, "SELECT foto,judul,judul2,keterangan FROM tb_daftar_article WHERE id = '5'");
        while ($hasil = mysqli_fetch_array($query)) {

        ?>
            <div class="col-11 col-lg-10">

                <div class="row featurette mb-3 border rounded overflow-hidden shadow-sm h-md-250 position-relative">
                    <div class="col-md-7 mt-2">
                        <h2 class="featurette-heading fw-normal lh-1"><?php echo $hasil["judul"]; ?></h2>
                        <p class="lead" style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis;"><?php echo $hasil["keterangan"]; ?>.</p>
                        <a href="art5.php" class="stretched-link"></a>
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