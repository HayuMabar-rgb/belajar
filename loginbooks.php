<?php
session_start();
if (isset($_POST['Login'])) {
    $a = $_POST['user'];
    $b = $_POST['pass'];
    if ($a == "kemal" && $b == "123456") {
        $_SESSION['login'] = $a;
        echo "<h1>Anda berhasil LOGIN</h1>";
        echo "<h2>Klik <a href='book.php'>di sini</a>
                untuk menuju ke halaman selanjutnya";
    } else {
        die("username atau password anda salah 
        silahkan kembali login <a href=login.php> Login </a>");
    }
} else {
    ?>
    <html>

    <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="main.js"></script>
        <title>Login here...</title>

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
</nav><div class="container" >
    <div class="row " style = "padding : 20px" >
    <div class="col-md-8">
    <div class ="card">
    <div class ="card-header" style="background : skyblue"> <center>Assalam Book store</div></center>
    <div class ="card-body" >

        <nav>

        </nav>
        <form action="" method="post"><br>
            <h2>Login Here</h2><br>
            Username : <input type="text" name="user" class="form-control"><br>
            Password : <input type="password" name="pass"class="form-control"><br>
            <input type="submit" name="Login" value="Log In" class="form-control" style ="background : skyblue">
        </form>
    </body>
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.js"></script>
    <script src="/asses/js/bootsrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </html>
    <?php

}
?>