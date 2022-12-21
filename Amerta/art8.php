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
            <!-- Sidebar -->
            <?php include "sidebar.php"; ?>
            <!-- End Sidebar -->

            <div class="container-lg mt-5">
                <div class="row">
                    <?php
                    include "proses/connect.php";
                    $query = mysqli_query($conn, "SELECT foto,judul,judul2,keterangan FROM tb_daftar_article WHERE id = '8'");
                    while ($hasil = mysqli_fetch_array($query)) {
                    ?>
                        <div class="col-lg-12 mt-2 text-center">
                            <h1><?php echo $hasil['judul'] ?></h1>
                            <br>
                            <h4 class="text-secondary"><?php echo $hasil['judul2'] ?></h4>
                            <br>
                            <div class="">
                                <img class="" src="assets/img/<?php echo $hasil['foto'] ?>" alt="" width="80%" height="100%">
                            </div>
                        <?php
                    }
                        ?>
                        </div>
                </div>

                <div class="container-lg mt-4">
                    <div class="row">
                        <br>
                        <h3>Ada makna dalam setiap peristiwa yang terjadi dalam kehidupan.</h3>
                        </br>
                        <p>Dalam konsep takdir, agama memberi ruang akan hal ini. Ilmu hakikat artinya masuk dalam ranah yang membicarakan rencana ketentuan, khendak Tuhan.</p>
                        <P>Kemudian dalam hal ini, agama menyatakan hakikat ialah, ilmu yang menarik seluruh persoalan pada satu penyebab tunggal, satu muara yaitu Tuhan.</P>
                        <p>Ia harus kita percaya, sebaliknya ia harus kita yakini karena ia meliputi segalanya. Dengan demikian timbul pertanyaan, apakah perlu Manusia mengenal ilmu hakikat?..</p>
                        <p>Hal ini tiada lain, agar manusia menyadari kemahakuasaan Tuhan, dalam berbagai aspek, dan menyakini bahwa tak ada satupun khendak yang berada diluarnya.</p>
                        <p>Ada kesalah pahaman bahwa adanya kejahatan, keburukkan, penderitaan, semua itu, merupakan tanda ketiadaan Tuhan, demikian dapat kita simpulkan, bahwa pandangan ini sangatlah menyesatkan</p>
                        <p>Sungguh pun mereka lupa, bahwa di balik segala kejadian hal pertama ialah kembali dalam peran kita menyusun kembali akal yang telah hilang.</p>
                        <p>.</p>
                        <p>Kesadaran Sebagai Ilmu Terakhir.</P>
                        <p>.</p>
                        <br>
                        <p>Maka untuk mengerti secara esensial apa itu hakikat, mengapa harus ada konsep hakikat maka setiap manusia harus naik lagi ke level ilmu yang tinggi yaitu hikmah.</p>
                        <p>"Satu tak pernah hilang dua hanya sebatas pelengkap dari akal yang hilang"</P>
                        <p>.</p>
                        <p>"Agape"</p>

                    </div>

                </div>
            </div>


            <?php
            include "footer.php";
            ?>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>