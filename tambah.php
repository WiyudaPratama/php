<?php 
  require('functions.php');

  if(isset($_POST['tambah'])) {
    if(tambah($_POST) > 0) {
      echo "
        <script>
          alert('Data Berhasil Ditambahkan');
          document.location.href='index.php';
        </script>
      ";
    } else {
      echo "
        <script>
          alert('Data Gagal Ditambahkan');
          document.location.href='tambah.php';
        </script>
      ";
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Penjualan Barang</title>
  <link rel="stylesheet" href="asset/css/bootstrap.min.css">
</head>
<body>
  
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
      <a class="navbar-brand" href="#">Kasir</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
        </ul>
      </div>
      <div class="navbar-nav mx-auto">
        <a href="#" class="btn btn-success px-4">Login</a>
        <a href="#" class="btn btn-warning px-4 ml-3">Registrasi</a>
      </div>
    </div>
  </nav>

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-6">
        <h1 class="text-center">Tambah Data Barang</h1>
        <div class="card">
          <div class="card-body">
            <form action="" method="post">
              <div class="form-group">
                <label for="kode_barang">Kode Barang</label>
                <input type="text" name="kode_barang" class="form-control" id="kode_barang">
              </div>
              <div class="form-group">
                <label for="nama">Nama Barang</label>
                <input type="text" name="nama" class="form-control" id="nama">
              </div>
              <div class="form-group">
                <label for="harga">Harga Barang</label>
                <input type="number" name="harga" class="form-control" id="harga">
              </div>
              <div class="form-group">
                <label for="stok">Stok Barang</label>
                <input type="number" name="stok" class="form-control" id="stok">
              </div>
              <div class="form-group">
                <label for="keterangan">Keterangan</label>
                <input type="text" name="keterangan" class="form-control" id="keterangan">
              </div>
              <a href="index.php" class="btn btn-warning">Kembali</a>
              <button type="submit" name="tambah" class="btn btn-primary">Tambah Data</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="asset/js/jquery-3.5.1.min.js"></script>
  <script src="asset/js/bootstrap.min.js"></script>
</body>
</html>