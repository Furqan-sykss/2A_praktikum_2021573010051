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
            $query = mysqli_query($conn, "SELECT foto,judul,judul2,keterangan FROM tb_daftar_article WHERE id = '2'");
            while ($hasil = mysqli_fetch_array($query)) {
            ?>

                <div class="col-lg-12 mt-5 ">
                    <h1 class="text-center"><?php echo $hasil['judul'] ?></h1>
                    <br>
                    <h4 class="text-center text-secondary"><?php echo $hasil['judul2'] ?></h4>
                    <br>
                    <div class="text-center">
                        <img class="" src="assets/img/<?php echo $hasil['foto'] ?>" alt="" width="30%">
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
                <h3>Sedikit Sejarah</h3>
                <p>Nihilism atau nihilisme adalah <strong>sebuah keyakinan bahwa semua nilai-nilai (value) itu tidak berarti.</strong> Lebih jelasnya, bahwa sejatinya tidak ada makna/nilai-nilai dalam hidup ini yang berlaku bagi semua manusia, jadi ya, gak berarti.</p>
                <p>Nihilism sering dikaitkan dengan skeptis radikal atau pesimisme ekstrim. Tokoh yang terkenal membawa nihilisme ini adalah Friedrich Nietzsche. Selain Nietzsche, ada seorang filsuf abad ke-20 bernama Hannah Arendt mengatakan bahwa kita sebaiknya tidak menganggap nihilisme sebagai pikiran yang berbahaya, tetapi sebagai risiko yang selalu ada dalam tindakan berpikir.</p>
                <p>
                    Maksudnya, <strong> ketika kita berpikir akan selalu ada risiko yang menantang pikiran tersebut.</strong>Dalam hal ini, pikiran itu adalah nilai-nilai yang kita percayai dalam hidup.
                </p>
                <br>
                <h5>Apa Itu Nihilism</h5>
                <p><strong>Nihilism</strong> adalah sebuah pandangan manusia atas segala hal yang ada di dunia ini hingga sekarang. Di mana itu semua dianggap tidak mempunyai arti dan juga tujuan. Itu artinya, semua hal tersebut berada di dalam ketidakadaan atau nihil. Aliran ini merasa bahwa yang ada dan terjadi di dunia ini bersifat nihil, sebab tidak adanya pandangan terkait agama, norma, budaya, dan lainnya.</p>
                <p>Sederhananya, penganut aliran ini tidak mempercayai apapun yang ada di dunia dan tidak menganut agama dan norma apapun. Filosofi nihilism sempat digunakan oleh seorang filsuf asal Jerman yang bernama Friedrich Nietzsche. Filosofi ini digunakan untuk mengembangkan pikirannya terhadap eksistensi atau keberadaan manusia yang ada di dunia.</p>
                <p>Nietzsche berpikir tentang bagaimana jika semua manusia dapat menentukan moralitas tanpa adanya ajaran yang berasal dari luar diri atau eksternal? Bagaimana jika sebenarnya kehidupan kita yang dijalani selama ini ternyata berbeda dengan apa yang diajarkan di agama, budaya, dan juga norma yang kita ikuti? Berbagai pertanyaan dari orang-orang yang menganut paham ini dianggap menyimpang dan bertentangan dengan prinsip sosial yang ada di masyarakat.</p>
                <p>Nietzsche berpikir tentang bagaimana jika semua manusia dapat menentukan moralitas tanpa adanya ajaran yang berasal dari luar diri atau eksternal? Bagaimana jika sebenarnya kehidupan kita yang dijalani selama ini ternyata berbeda dengan apa yang diajarkan di agama, budaya, dan juga norma yang kita ikuti? Berbagai pertanyaan dari orang-orang yang menganut paham ini dianggap menyimpang dan bertentangan dengan prinsip sosial yang ada di masyarakat.</p>
                <p>Padahal sebenarnya, jika kita mau memahami apa yang diutarakan Nietzsche diatas, paham ini justru mengacu pada kebebasan manusia dalam menentukan tujuan hidup tanpa adanya pengaruh dari faktor eksternal. Sehingga kita dapat melakukan segala sesuatunya berdasarkan tujuan yang sudah kita ketahui.</p>
                <p>Selain itu, Nietzsche juga memberikan studi kasus terhadap aliran nihilism. Dimana banyak orang saat ini yang baru memahami kehidupan sesaat setelah meninggal. Jika mengacu pada ajaran agama, gambaran kehidupan setelah meninggal dengan adalah akhirat. Dimana disitu akan ada surga dan neraka. Surga adalah tempatnya orang-orang baik, dan neraka adalah tempatnya orang-orang yang memiliki terlalu banyak dosa saat di dunia. Oleh karena itu, orang-orang berlomba untuk menjadi yang terbaik dalam melakukan kebaikan kepada Tuhan dan sesama manusia. Semua hal positif tersebut dilakukan dengan tujuan untuk mendapatkan surga dan dijauhkan dari neraka.</p>
                <p>Barangkali kebanyakan orang sekarang ini melihat hal tersebut sebagai hal yang wajar. Sebab, untuk sebagian agama, mengharapkan surga adalah hal yang utama dan penting. Maka dari itu, dengan melakukan semua kebaikan dengan harapan agar mendapatkan surga, itu wajar dan tidak apa-apa untuk dilakukan.</p>
                <p>Namun, menurut Nietzsche kita perlu berusaha keluar dari pemahaman semacam itu. Dimana akan ada kehidupan lain setelah meninggal, yaitu yang kita sebut akhirat dan didalamnya terdapat surga dan neraka. Hal tersebut bertujuan untuk membuat kita menjadi lebih fokus pada apa yang ada di hidup kita saat ini, fokus membuat diri kita dan orang lain bahagia, serta fokus untuk berbuat kebaikan dan hal-hal yang positif. Bukan hanya mengharapkan surga saja tapi lupa dengan apa yang sebenarnya dibutuhkan saat ini.</p>
                <p>Bahagia itu apa? Jawabannya bisa sangat banyak. Karena begitu banyak definisi bahagia, kita sampai bingung dengan kebahagiaan yang kita inginkan. Nah, buku ini mengajarkan kita untuk ga perlu memikirkan terlalu keras soal kebahagiaan.</p>
                <p></p>
            </div>
        </div>
    </div>
    <div class="container-lg mt-5">

        <div class="row text-start mb-3">
            <h3>Baca Juga</h3>
        </div>
        <?php
        include "proses/connect.php";
        $query  = mysqli_query($conn, "SELECT foto,judul,keterangan FROM tb_daftar_article WHERE id = '10'");
        while ($hasil = mysqli_fetch_array($query)) {

        ?>
            <div class="col-11 col-lg-10">

                <div class="row featurette mb-3 border rounded overflow-hidden shadow-sm h-md-250 position-relative">
                    <div class="col-md-7 mt-2">
                        <h2 class="featurette-heading fw-normal lh-1"><?php echo $hasil["judul"]; ?> </h2>
                        <p class="lead" style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis;"><?php echo $hasil["keterangan"]; ?>.</p>
                        <a href="art1.php" class="stretched-link"></a>
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