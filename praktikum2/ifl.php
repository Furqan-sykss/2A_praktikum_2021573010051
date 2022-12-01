<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ifl</title>
</head>
<body>
    <?php
    date_default_timezone_set('Asia/Jakarta');
    $d = date("D");
    $date = date(("d-m-Y H:i:s"));
    if ($d == "MOn") {
        $d = "senin";
        echo "Selamat belajar <br>";
    } else
    echo "Ini hari $d <br>";
    echo $d . "" . $date;
    ?>
</body>
</html>