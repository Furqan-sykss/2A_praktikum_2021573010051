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
            $query = mysqli_query($conn, "SELECT foto,judul,judul2,keterangan FROM tb_daftar_article WHERE id = '10'");
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
                <h3>Seneca di dalam De vita Beata</h3>
                <p>
                    Hidup adalah perjalanan yang penuh dengan bunga dan duri. Ini tidak dapat disangkal. Setiap orang mengalami masa-masa gelap dalam hidupnya. Namun, disela-sela masa-masa itu, mereka pun menemukan kebahagiaan.
                </p>
                <p>
                    Banyak orang yang lelah dengan perjalanan ini. Bagaimana mungkin saya bisa merasa bahagia, ketika saya tahu, ini semua hanya sementara, dan besok atau mungkin nanti sore, musibah lain akan datang menimpa saya? Orang-orang seperti ini lalu mencari cara untuk melampaui jatuh bangunnya kehidupan. Ada beragam cara, mulai dari menggunakan narkoba
                    <strong>
                        (ganja, heroin, ampfetamin),
                    </strong>
                    belanja gila-gilaan (konsumtivisme?), menjadi pengguna jasa pelacuran tetap (sex sampai mati untuk menutupi kesedihan?), menumpuk kekayaan (kalau perlu dengan korupsi?), pencarian segala bentuk kenikmatan lainnya (pesta setiap malam atau makan tanpa henti?), sampai dengan bunuh diri.
                </p>
                <p>
                    Pertanyaan penting disini adalah, apakah harus seperti itu? Apakah hidup itu harus selalu jatuh bangun dan naik turun? Apakah ada cara hidup yang lain? Untuk menjawab ini, kita perlu untuk menengok pemikiran Seneca.
                </p>
                <p>
                    <STROng>
                        Seneca
                    </STROng>
                    adalah salah satu filsuf Yunani Kuno yang hidup pada 1 sampai 65 setelah Masehi.1 Ia menulis buku De Vita Beata (tentang Hidup yang Bahagia), yang merupakan kumpulan surat kepada kakaknya, Gallio, pada 58. Bagi para ahli pemikiran Yunani Kuno, ini merupakan buku terpenting yang pernah ditulis oleh Seneca. Dari tulisan ini, kita bisa melihat, bahwa Seneca bukan hanya seorang filsuf, tetapi juga penulis yang memiliki gaya yang indah dan memikat.
                </p>
                <p>
                    Tulisan ini terdiri dari 36 halaman. Tema utamanya adalah soal kebahagiaan. Di dalam buku ini, Seneca memiliki pandangan yagn berbeda dengan Epikuros. Bagi Seneca, hidup yang bahagia adalah hidup yang berjalan harmonis dan alamiah. Kebahagiaan tidaklah terkait dengan kenikmatan, tetapi dengan keutamaan, yakni hidup yang secara alami sesuai dengan gerak dan hukum-hukum alam.
                </p>
                <p>
                    Kenikmatan seringkali menjadi godaan bagi orang, sehingga ia tidak lagi mengejar keutamaan. Maka, dorongan untuk meraih kenikmatan haruslah diatur, atau bahkan sungguh-sungguh dilawan. Pada satu titik, orang lalu tidak lagi memilih, apakah ia mencari kenikmatan atau penderitaan lagi. Ia menjadi bebas dari segala bentuk kecenderungan emosi manusia, lalu menjadi pasrah dan menerima hidup apa adanya.
                </p>
                <p>
                    Inilah kebahagiaan yang sejati, menurut Seneca, yakni ketika orang tidak lagi memilih rasa sakit atau rasa nikmat, melainkan menjadi bebas dari keduanya. Ia tidak lagi terpengaruh oleh keduanya. Ia menjadi tenang sepenuhnya. Ia tidak merasa sedih sekaligus tidak merasa senang, walau dunia sekitarnya terus berubah.
                </p>
                <P>
                    Hidup adalah rangkaian peristiwa. Ada peristiwa yang sedih dan ada yang peristiwa yang menyenangkan. Orang tidak boleh memilih salah satu dari antara keduanya, jika ia ingin sampai pada kebahagiaan. Kebahagiaan hanya dapat diraih, jika orang mampu menerima semua peristiwa dengan lapang dada, tanpa memilih apapun. Inilah inti utama dari keutamaan yang dinyatakan Seneca, yang nantinya banyak dikenal sebagai sikap Stoik.
                </P>
                <P>
                    Sikap Stoik (Seneca juga dikenal sebagai seorang pemikiran Stoa) berusaha untuk membuat kita tak gelisah dengan hal-hal yang berubah dalam hidup. Ketika kita mendapat keberuntungan, kita gembira sekali. Namun, ketika musibah datang, dan musibah PASTI datang, kita lalu merasakan sedih yang sangat dalam. Keduanya, menurut Seneca, adalah tanda, bahwa manusia belum sampai pada apa yang yang sejati, yakni kebebasan batin itu sendiri.
                </P>
                <P>
                    Keduanya harus dihindari. Keduanya haruslah disingkirkan dari pikiran. Kita perlu untuk mencari yang lebih tinggi dari keduanya, yakni ketenangan batin yang tidak berpihak pada kesedihan ataupun kesenangan. Ketenangan yang lahir dari kebebasan jiwa, dan bukan dari ledakan emosi-emosi sesaat belaka.
                </P>
                <P>
                    Ketenangan dan kebebasan batin semacam itu hanya dapat diperoleh, jika orang hidup sesuai dengan hukum-hukum alam. Artinya, orang itu bersikap pasrah pada apa yang terjadi padanya, karena alam sudah selalu tahu, apa yang terbaik untuk orang itu. Kepasrahan diri pada gerak alam adalah inti dari kebebasan batin. Inilah inti dari kebahagiaan sejati.
                </P>
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
            <div class="col-11 col-lg-10">

                <div class="row featurette mb-3 border rounded overflow-hidden shadow-sm h-md-250 position-relative">
                    <div class="col-md-7 mt-2">
                        <h2 class="featurette-heading fw-normal lh-1"><?php echo $hasil["judul"]; ?></h2>
                        <p class="lead" style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis;"><?php echo $hasil["keterangan"]; ?>.</p>
                        <a href="art4.php" class="stretched-link"></a>
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