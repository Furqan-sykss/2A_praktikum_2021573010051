<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="proses.php" method="get"> 
            <table  border="0">
            <tr>
                <td>nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
                <td>no_hp</td>
                <td><input type="number" name ="no_hp"></td>
            <tr>
                <td>hobi</td>
                <td><input type="checkbox" name="hobi1">renang</td>
                <td><input type="checkbox" name="hobi2">bersepeda</td>
                <td><input type="checkbox" name="hobi3">golf</td>
            </tr>
            <tr>
                <td>range</td>
                <td> <td><input type="range" name="range"></td>
            </tr>
            <tr>
                <td><input type="submit" value="kirim"></td>
            </tr>
        </table>
</body>
</html>