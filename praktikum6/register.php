<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="prosesregister.php" method="POST">
        <table>
            <tr>
                <td>username</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="pass"></td>
            </tr>
            <tr>
                <td>nama </td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>kelas</td>
                <td><input type="text" name="kelas"></td>
            </tr>
            <tr>
                <td>alamat </td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td>IPK </td>
                <td><input type="text" name="ipk"></td>
            </tr>
            <br>
            <tr>
                <td><input type="submit" name="login" value="Log In" style="color: green;"></td>
                <td><input type="reset" nama="reset" value="Reset" style="color: red;"></td>
            </tr>
        </table>
    </form>
</body>
</html>