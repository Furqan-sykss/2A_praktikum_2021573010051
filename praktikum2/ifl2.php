<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ifl2</title>
</head>
<body>
    <?php
    $d=date("D"); if ($d=="Sat")
    echo "Selamat berakhir pekan!";
    elseif ($d=="Fri")
    echo "Selamat menunaikan sholat Jum`at bagi yang muslim!"; 
    else
    echo "selamat belajar!";
    ?>
</body>
</html>