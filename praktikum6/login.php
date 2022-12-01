<?php
session_start();
if(!empty($_SESSION['username_xyz'])){
    echo "<script>'location:dashboard.php'</script>";
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <h1>LOGIN</h1>
    <form action="halamanproses.php" method="post">
      <table border="0">
        <tr>
          <td>username</td>
          <td><input type="text" name="username" /></td>
        </tr>
        <td>password</td>
        <td><input type="password" name="pass" /></td>
        <tr>
          <td><input type="submit" value="login" /></td>
        </tr>
      </table>
    </form>
  </body>
</html>
