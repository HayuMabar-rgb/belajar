<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="main.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Assalam book store</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/">Home page</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="latihan1.php">Tema<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="tugasform.php">Terbaru</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="">Aksi</a>
          <a class="dropdown-item" href="">Buku Yang lain</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-menu" href="">Tema</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    </form>
  </div>
</nav>
 <form action="" method ="post">

<div class="container" >
    <div class="row " style = "padding : 20px" >
    <div class="col-md-8">
    <div class ="card">
    <div class ="card-header" style="background : skyblue" align="center" >Assalam Book store</div>
    <div class ="card-body" >
    

        <!-- Nama Dengan menggunakan text  -->
  <div class="form-group">
    <label for="exampleInputEmail1">Nama</label>
    <input type="text" class="form-control"placeholder="Masukan Nama Anda Disini" name="nama">
    <small id="emailHelp" class="form-text text-muted">kita tidak pernah menyebarkan atau membagikan Biodata anda.</small>
  </div>
        <!-- Alamat dengan menggunakan text area -->
  <div class="form-group">
  <label for="">Alamat</label>
  <input type="text-area" class="form-control" placeholder="Masukan Alamat Anda" name="address">
  </div>
        <!-- Jenis Kelamin Dengan Radio button -->
  <div class ="form-group">
    <input type="radio" value="laki laki" name="jk"class=" form-group">laki laki<br>
    <input type="radio" value="perempuan" name="jk" class="form-group">perempuan<br>
    </div><br>
        <!-- Tanggal pembelian menggunakan date -->
    <div class="form-group">
    <label for="">Tanggal Pembelian</label>
    <input type="date" class="form-control" name"buydate">
    </div>
        <!-- Jumlah Buku Yand dibeli dengan menggunakan number -->
    <div>
    <label for="">Jumlah buku</label>
    <input type="number" name="dibeli" class ="form-control">
    </div>
      <!-- Pengecekan Untuk Menyetujui syarat dan ketentuan -->
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Menyetujui Syarat dan Ketentuan</label>
  </div>
  <button type="submit" class="btn btn-primary"name ="simpan">Submit</button><br>
</form>
<?php
if (isset($_POST['simpan'])) {
    $f = $_POST['nama'];
    $a = $_POST['address'];
    $b = $_POST['jk'];
    $c = $_POST['buydate'];
    $d = $_POST['dibeli'];
    echo"Nama : $f<br>";
    echo"alamat :$a";
}


?>
</body>
</html>
