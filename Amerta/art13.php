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
            $query = mysqli_query($conn, "SELECT foto,judul,judul2,keterangan FROM tb_daftar_article WHERE id = '13'");
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
                <h3>Aristoteles adalah murid dari Plato sekaligus guru dari Alexander Agung</h3>
                <p>
                    Filsafat dan cinta adalah dua hal yang dianggap saling bertolak belakang oleh masyarakat umum. Namun, konsep filsafat cinta sendiri telah dikemukakan oleh para filsuf dunia sejak ribuan tahun yang lalu.
                </p>
                <p>
                    Filsafat cinta adalah suatu konsep secara filosofis yang membahas soal cinta. Cinta yang dimaksud dalam konsep ini tidak sebatas pada cinta kepada kekasih, melainkan rasa cinta kepada anak, orang tua, keluarga, teman, relasi, dan lain-lain.
                </p>
                <p>
                    Para filsuf mengemukakan pandangan filosofisnya mengenai cinta tidak hanya melalui tulisan, tetapi juga melalui syair-syair, musik, dan lain-lain.
                </p>
                <p>
                    Artikel ini akan memuat kumpulan pemikiran filsafat cinta yang dikemukakan oleh para filsuf dan ahli dunia. Simak ulasan selengkapnya di bawah ini.
                </p>
                <br>
                <h3>Konsep Filsafat Cinta Menurut Plato</h3>
                <p>
                    Plato merupakan salah satu tokoh filsafat dunia yang berasal dari Yunani yang terkenal dengan pemikirannya yang cemerlang. Ia bukan hanya seorang filsuf, melainkan juga seorang matematikawan.
                </p>
                <p>
                    <strong>
                        Plato
                    </strong>
                    adalah salah satu filsuf yang diyakini sangat memberikan kontribusi dalam perkembangan filsafat Yunani Kuno serta filsafat Barat secara umum. Nilai-nilai dan pemikiran Plato kemudian dikembangkan menjadi Neoplatonisme oleh para pemikir, seperti Plotinus dan Porphyry.
                </p>
                <br>
                <p>
                    Salah satu pemikiran Plato yang terkenal adalah konsep ide. Plato berpendapat bahwa dunia ide tidak diciptakan oleh pemikiran manusia.
                </p>
                <p>
                    Selain itu, pemikiran Plato yang terkenal lainnya adalah cinta Platonis. Menurut Ferizal dalam buku Pelopor Sastra Novel, platonis adalah pandangan cinta menurut Plato. Kata Plato, "At the touch of love, everyone becomes a poet".
                </p>
                <p>
                    Cinta Platonis bukanlah suatu konsep yang dikemukakan langsung oleh Plato. Namun, konsep ini lahir dari pemikiran-pemikiran Plato yang tertuang dalam buku Simposium.
                </p>
                <p>
                    Inti dari konsep cinta Platonis adalah jenis cinta yang tidak seksual atau romantis. Jenis cinta ini melibatkan kasih sayang tanpa adanya ketertarikan, baik secara romansa maupun seksual.
                </p>
                <p>
                    Dalam karya lainnya, Plato menganggap bahwa manusia yang terbaik adalah manusia yang memiliki cinta di dalamnya. Plato membagi fungsi jiwa manusia ke dalam tiga bagian, yaitu:
                </p>
                <ul>
                    <li>Epithumea, seperti nafsu makan, minum, seks</li>
                    <li>Thumos, seperti afeksi, rasa, semangat, agresi</li>
                    <li>Logistikon, seperti berpikir</li>
                </ul>
                <p>
                    Plato juga menyebutkan bahwa manusia terbaik adalah mereka yang mencintai kebijaksanaan atau philosopos.
                </p>
                <p>
                    Di samping itu, Plato juga berpendapat bahwa cintalah yang menggerakkan manusia terbaik untuk mencari yang terbaik bagi dirinya, yakni kebijaksanaan. Pada hakikatnya, bagi Plato, cinta akan senantiasa membawa manusia untuk menemukan yang terbaik baginya.
                </p>
                <br>
                <h3>Konsep Filsafat Cinta Menurut Paul Tillich</h3>
                <p>
                    Paul Tillich merupakan filsuf aliran eksistensialis yang berasal dari Jerman. Tillich dianggap menjadi salah satu teolog paling berpengaruh pada abad ke-20.
                </p>
                <p>
                    Salah satu karya yang terkenal dari Tillich adalah Systematic Theology, Dynamics of Faith, The Courage to Be, dan lain-lain. Persoalan cinta, Tillich pernah memberikan pandangannya, yaitu ontologis cinta. Ia menghubungkan konsep ontologis dalam cinta.
                </p>
                <p>
                    Tillich melihat bahwa cinta merupakan suatu hal yang berkuasa dalam menggerakkan kehidupan. Cinta layaknya sebuah motor utama yang menggerakkan roda kehidupan.
                </p>
                <p>
                    Kehidupan yang dimaksud oleh Tillich ialah kehidupan nyata, bukan kehidupan maya. Oleh sebab itu, Tillich menujukkan adanya hubungan antara konsep ontologis dan cinta.
                </p>
                <p>
                    Singkatnya, menurut Tillich, ada kehidupan tidak akan menjadi "aktual" apabila tidak ada cinta yang mendorong. Konsep "Ada" menjadi "tidak pernah ada" tanpa adanya cinta.
                </p>
                <p>
                    Ontologi Cinta menurut Paul Tillich juga menujukkan bahwa pada hakikatnya, cinta adalah satu, tetapi memiliki sifat yang beragam. Keberagaman jenis cinta ini tidak membuat cinta berbeda dengan jenis cinta lainnya.
                </p>
                <p>
                    Menurut Tillich, orang-orang pertama-tama harus memahami cinta bahwa cinta itu satu. Kemudian baru mengenal Eros, Agape, Epithymia dan lain sebagainya, itu hanyalah sifat-sifat Cinta dilihat dari bagaimana orang memandangnya.
                </p>
                <br>
                <h3>Konsep Filsafat Cinta Menurut Erich Fromm</h3>
                <p>
                    Erich Fromm adalah seorang ahli psikologi sosial, psikoanalisis, dan seorang filsuf yang berasal dari Jerman. Ia terkenal dengan karyanya yang berjudul The Art of Loving atau Seni Mencintai.
                </p>
                <p>
                    Dalam buku tersebut, Fromm mencoba mempertanyakan makna cinta melalui pertanyaan berupa "apakah cinta merupakan sebuah seni?", "jika iya, apakah cinta mengandung unsur keindahan?", jika bukan, apakah cinta hanyalah kesenangan belaka?".
                </p>
                <p>
                    Fromm dalam buku tersebut juga mengatakan bahwa permasalah manusia saat ini ialah banyak orang yang menekankan sisi being loved (dicintai) daripada loving (mencintai).
                </p>
                <p>
                    Seseorang akan merasa sangat berarti ketika dicintai oleh orang lain dan merasa terbebani jika harus mencintai orang lain. Apakah cinta seperti itu yang disebut seni?
                </p>
                <p>
                    Fromm dalam buku The Art of Loving menyebutkan bahwa:
                </p>
                <p class="text-secondary">
                    Cinta adalah kegiatan, bukan efek pasif; itu adalah 'berdiri', bukan 'jatuh cinta'. Dengan cara yang paling umum, karakter aktif cinta dapat digambarkan dengan menyatakan bahwa cinta terutama memberi, bukan menerima.
                </p>
                <p>
                    Bagi Fromm, cinta bukan tentang bagaimana seseorang bisa jatuh cinta, melainkan bagaimana seseorang bisa berdiri dan menerima cinta tersebut.
                </p>
                <p>
                    Fromm berpendapat bahwa ketika seseorang menerima cinta, orang tersebut tidak dalam keadaan "jatuh, melainkan berdiri dan menyambutnya.
                </p>
                <p>
                    Fromm mengibaratkan bahwa ketika seseorang merasakan cinta, ia akan berdiri di dalamnya dan menikmati setiap bentuk kasih dan cinta. Fromm juga mengemukakan bahwa ketika dua insan merasakan cinta, dalam diri mereka hanyalah kesatuan, bukanlah suatu keterpisahan.
                </p>
                <p>
                    Demikianlah beberapa konsep cinta secara filosofis yang disampaikan oleh filsuf. Filsafat cinta hadir untuk memberikan arti dan mencoba memahami apa
                    <span class="text-info">
                        makna dari cinta
                    </span>
                    itu sendiri.
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
        $query  = mysqli_query($conn, "SELECT foto,judul,judul2,keterangan FROM tb_daftar_article WHERE id = '8'");
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