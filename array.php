<?php
session_start();
if (isset ($_POST['Login'])) {
    $user = $_POST['user'];
    $user = $_POST['pass'];
    if (isset ($_SESSION['Login'])) {
        echo"<h1>Selamat datang ".$_SESSION['Login']. "</h1>";
    }else{
        die("Anda Belum Login Anda tidak Berhak masuk Halaman Ini
        Silahkan login terlebih dahulu <a href ='login.php'>disini</a>");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php ?>