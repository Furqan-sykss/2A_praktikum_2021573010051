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
            $query = mysqli_query($conn, "SELECT foto,judul,judul2,keterangan FROM tb_daftar_article WHERE id = '4'");
            while ($hasil = mysqli_fetch_array($query)) {
            ?>
                <div class="col-lg-12 mt-5">
                    <h1 class="text-center"><?php echo $hasil['judul'] ?></h1>
                    <br>
                    <h4 class="text-center text-secondary"><?php echo $hasil['judul2'] ?></h4>
                    <br>
                    <div class="text-center">
                        <img class="" src="assets/img/<?php echo $hasil['foto'] ?>" alt="" width="80%" height="100%">
                    </div>
                    <br>

                </div>
            <?php
            }
            ?>
        </div>
    </div>
    <div class="container-lg mt-5">
        <div class="row">
            <div class="col-lg-10">
                <h3>Apakah Stoisisme itu?</h3>
                <p> <strong>Stoisisme</strong> didasarkan pada ide bahwa tujuan hidup adalah hidup selaras dengan alam. Alam itu sendiri didefinisikan sebagai keseluruhan kosmos, termasuk rekan-rekan kita sesama manusia.
                    Epictetus, yang mazhab Stoisismenya berkembang pada abad kedua Masehi, memberitahu kita cara mewujudkan ide ini. Dia berkata, “ada hal-hal yang berada dalam kendali kita dan ada hal-hal yang tidak berada dalam kendali kita.” Maka, jika sesuatu tidak berada dalam kendali kita, tidak layak mengerahkan energi untuk itu.</p>
                <p>Kendati demikian, ada masanya, bahkan bagi para pemikir itu, saat-saat mereka menemui kesulitan untuk menjalankan tugas-tugas mereka. Marcus Aurelius, yang, sebagai kaisar Imperium Romawi dari tahun 161-180 M, adalah orang paling berkuasa di dunia, menjelaskan dalam salah satu bagian “Meditasi”, kumpulan tulisannya, bahwa dia sedang berjuang untuk bangkit dari tempat tidur. Dia pun berkata kepada dirinya sendiri,</p>
                <p class="text-secondary">""Aku bangun untuk melakukan pekerjaan seorang manusia. Lalu, mengapa aku begitu jengkel ketika aku keluar untuk melakukan hal yang ditakdirkan untukku dan merupakan alasan aku ada di dunia ini? Atau aku memang diciptakan untuk ini, berbaring di tempat tidur dan menghangatkan diri di balik selimut?""</p>
                <p>Dia juga tahu bahwa nasihat ini bisa ampuh bisa juga tidak suatu hari nanti. Karena itulah, walaupun dia memaksa dirinya menjalani hidup, Markus menegaskan apa yang mungkin dia hadapi:</p>
                <p class="text-secondary">""Katakan kepada dirimu sendiri di awal hari, aku akan bertemu dengan orang-orang usil, tak tahu di untung, brutal, pengkhianat, pendengki, dan tidak ramah.""</p>
                <p>Walaupun ucapan ini mungkin tampak tidak terlalu berguna, sejauh ia memusatkan perhatian pada semua kemungkinan negatif dan kesukaran-kesukaran tersebut, ada sebuah poin stoik sangat penting di sini. Mengapa mengingatkan diri tentang kesukaran bisa bermanfaat?</p>
                <br>
                <h5>Menghadapi Dunia Dengan Metode Stoik</h5>
                <p>Filsuf stoik Epictetus memberikan jawaban–jawaban yang bisa membantu kita mengantisipasi berbagai kemungkinan dan mempersiapkan kita menghadapi apa yang akan datang. Dia mengatakan dalam “Enchiridion”:</p>
                <p class="text-secondary">“Ketika engkau hendak melakukan suatu perbuatan, ingatkan dirimu perbuatan macam apa itu. Jika engkau hendak pergi ke pemandian, ingat-ingat dalam benakmu apa yang mungkin terjadi di pemandian—ada orang yang bersimbur-simburan, orang yang dorong-dorongan, orang yang menghina, orang yang mencuri. Dan engkau akan melakukan perbuatan dengan lebih aman jika sejak awal engkau mengatakan, ‘Aku ingin mandi dan menjaga pilihan-pilihanku sesuai dengan alam’; begitu pula untuk setiap perbuatan yang lain.”</p>
                <p>Contoh Epictetus tentang pemandian Romawi bisa diadaptasi dalam konteks kontemporer dengan mempertimbangkan segala macam hal yang mungkin terjadi di tempat kerja, ketika menglaju, atau di rumah.</p>
                <p>Epictetus memberitahu kita agar siap menghadapi berbagai situasi dengan sikap realistis terhadap hal-hal sebagaimana adanya.</p>
                <p class="text-secondary">“Aku, dengan demikian, tidak bisa dicelakai oleh orang-orang ini, juga tidak bisa marah dengan orang yang sama denganku, aku juga tidak bisa membencinya, karena kita ada untuk bekerja sama, seperti kaki, tangan, kelopak mata, atau dua baris gigi di rahang atas dan rahang bawah kita. Merugikan satu sama lain dengan demikian bertentangan dengan alam; dan marah dengan orang lain serta berpaling darinya jelas merugikan dirinya.”</p>
                <p>Dalam semua itu, apa yang diingatkan para filsuf itu kepada kita adalah hidup selaras dengan alam berarti menyadari bahwa orang paling sulit yang kita temui bisa jadi sama seperti kita—seseorang mungkin sedang berjuang melawan kesedihan dan kenestapaannya sendiri.</p>
                <p>Dengan menyadari ini, akan lebih mudah untuk memaafkan mereka yang tidak sejalan dengan kita. Namun lebih dari itu, barangkali, ini memudahkan kita untuk lebih pemaaf terhadap diri sendiri. Ini membantu kita memahami soal penderitaan dan tentang makna menjadi manusia.</p>
                <br>
                <h4>Penderitaan Serta Solusinya</h4>
                <div class="clearfix">
                    <img src="assets/img/marcus.jpg" height="400px" class="col-md-4 float-md-end mb-3 ms-md-3" alt="...">
                    <p>
                        Ide ini diperkuat dengan penjelasan Epictetus mengenai sumber penderitaan manusia: </p>
                    <p class="text-secondary">
                        “Yang membuat susah perasaan seseorang bukanlah sesuatu itu sendiri melainkan penilaian mereka tentang hal tersebut.” </p>
                    <p>
                        Kesal tentang sesuatu bukanlah hasil dari sesuatu yang tampaknya mengesalkan itu; tapi, penilaian tentang sesuatu itulah yang membuat orang tertekan. </p>
                    <p>Penilaian kita, bukan hal-hal atau peristiwa eksternal, adalah sumber penderitaan manusia.</p>
                    <p>Solusi bagi semua ini, menurut Epictetus, adalah pergeseran dalam sikap terhadap hal-hal yang akan terjadi. Ketika suatu hari kita, dengan pengetahuan penuh tentang apa yang mungkin terjadi hari itu dapat menyadari bahwa kita tetap harus terus maju dan menghadapi yang akan terjadi, maka kita bisa terus melangkah dalam hidup.</p>
                    <p>Ini berarti melepaskan konsepsi tentang bagaimana segala sesuatu mestinya berjalan, dan menerima segala sesuatu itu apa adanya, termasuk yang paling menjengkelkan dan menyesakkan.</p>
                    <p>Jika sudah begitu, “kerja seorang manusia” mungkin tak tampak begitu menciutkan nyali.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-lg mt-5">

        <div class="row text-start mb-3">
            <h3>Baca Juga</h3>
        </div>
        <?php
        include "proses/connect.php";
        $query  = mysqli_query($conn, "SELECT foto,judul,judul2,keterangan FROM tb_daftar_article WHERE id = '7'");
        while ($hasil = mysqli_fetch_array($query)) {

        ?>
            <div class="col-11 col-lg-12">

                <div class="row featurette mb-3 border rounded overflow-hidden shadow-sm h-md-250 position-relative">
                    <div class="col-md-7 mt-2">
                        <h2 class="featurette-heading fw-normal lh-1"><?php echo $hasil["judul"]; ?></h2>
                        <p class="lead" style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis;"><?php echo $hasil["keterangan"]; ?>.</p>
                        <a href="art7.php" class="stretched-link"></a>
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