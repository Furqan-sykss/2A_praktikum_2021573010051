<?php
session_start();
if(!empty($_SESSION['username_xyz'])){
    echo "<script>window.location='login.php'</script>";
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>ini dashboard</h2>
    <a href="logout.php">logout</a>
</body>
</html>