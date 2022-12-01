<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Input Data</h1>
    <form action="prosesnumber.php" method="get">
        <table border="0">
    <tr>
        <td>Masukkan Nama  :</td>
        <td><input type="text" name="nama"></td>
    </tr>
<tr>
            <td>Masukkan Nomor : </td>
        <td><input type="number" name="nomor"></td>
</tr>
<tr>
        <td>Hobby :</td> 
        <td><input type='checkbox' name='hobi1' checked='checked' />Main Game</td>
        <td><input type='checkbox' name='hobi2' />Ngoding</td>
        <td><input type='checkbox' name='hobi3' />Olahraga</td>
</tr>
<tr>
<td><label for="Tanggal :"></label>
    Tanggal : <select name="tanggal">
        
  <?php
  for($i=1;$i<32;$i++){
    echo "<option value='$i'>$i </option>";
  }
  ?>
    </td>
</select>
</tr>
<tr>
        <td>Masukkan Email :</td>
        <td><input type="email" name="email"></td>
</tr>
<tr>
        <td>Masukkan Password :</td>
        <td><input type="password" name="password"></td>
</tr>

<tr>
        <td>Masukkan waktu :</td>
        <td><input type="time" name="time"></td>
</tr>

<tr>
        <td><p><input type="submit" style="color:green" value="save">
        <input type="reset" value="reset" style="color:red"></td>
</tr>

    </form>
</table>
</body>
</html>