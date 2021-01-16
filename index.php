<?php 
  require('functions.php');

  $barang = query("SELECT * FROM barang");
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
    <h1>Data Barang</h1>
    <a href="tambah.php" class="btn btn-primary mt-3 mb-3">Tambah Data Barang</a>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>No</th>
          <th>Kode Barang</th>
          <th>Nama Barang</th>
          <th>Harga</th>
          <th>Stok</th>
          <th>Keterangan</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
      <?php 
        $i = 1;
        foreach($barang as $b) :
      ?>
        <tr>
          <th><?= $i++; ?></th>
          <td><?= $b['kode_barang'] ?></td>
          <td><?= $b['nama'] ?></td>
          <td><?= $b['harga'] ?></td>
          <td><?= $b['stok'] ?></td>
          <td><?= $b['keterangan'] ?></td>
          <td>
            <a href="#" class="badge badge-primary">Ubah</a>
            <a href="#" class="badge badge-danger">Hapus</a>
          </td>
        </tr>
      <?php endforeach; ?>
      </tbody>
    </table>
  </div>

  <script src="asset/js/jquery-3.5.1.min.js"></script>
  <script src="asset/js/bootstrap.min.js"></script>
</body>
</html>