<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="main.js"></script>
</head>
<body>
<!-- header -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand" href="#">Navbar</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav mr-auto">
<li class="nav-item active">
<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
</li>
<li class="nav-item">
<a class="nav-link" href="#">Link</a>
</li>
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Dropdown
</a>
<div class="dropdown-menu" aria-labelledby="navbarDropdown">
<a class="dropdown-item" href="#">Action</a>
<a class="dropdown-item" href="#">Another action</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="#">Something else here</a>
</div>
</li>
<li class="nav-item">
<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
</li>
</ul>
<form class="form-inline my-2 my-lg-0">
<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
</nav>
<br>
<br>
</div>
</header>
    <!-- endheader -->

    <!-- content -->
    <div class="container">
    <div class="row " style = "padding : 20px">
    <div class="col-md-8">
    <div class ="card">
    <div class ="card-header">Formulir</div>
    <div class ="card-body" >
    <form action="" method ="post">
    <div class="form-group">
    <label for="">Nama</label>
    <input type ="text" name="nama" class="form-control"> 
    </div>
    
    <div class ="form-group">
    <label for="">Alamat</label>
    <textarea name="alamat" class="form-control" rows="10"></textarea>
    <button type = "submit" name="simpan" class = "btn btn-primary">
    SIMPAN
    </button>
    <button type = "reset" name="reset" class ="btn btn-warning">    
    RESET</button><br>
    <?php
if (isset($_POST['simpan'])) {
    $a = $_POST['nama'];
    $b = $_POST['alamat'];
    echo"Nama   : $a<br>";
    echo"Alamat : $b";
}
?>

</form>

    
</div>

</div>

</div>

</div>
</div>
</div>
</div>

</div>
<div class="row">
<div class="col-md-12" style ="background : grey">
<center>HASIL</center>

<div class ="table-responsive">
<table class ="table">
<tr>
        <th>Nomor</th>
        <th>Nama</th>
        <th>Alamat</th>
</tr>
<tr>
        <td>1</td>
        <td><?php echo $a ; ?> </td>
        <td><?php echo $b ; ?> </td>

</tr>
</table>
</div>    
</div>
</div>

</body>
</html>
<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/bootstrap.bundle.js"></script>
<script src="/asses/js/bootsrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
