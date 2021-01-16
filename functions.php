<?php 

  $conn = mysqli_connect("localhost", "root", "", "penjualan");

  function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {
      $rows[] = $row;
    }

    return $rows;
  }

  function tambah($post) {
    global $conn;

    $kodeBarang = htmlspecialchars($post['kode_barang']);
    $nama = htmlspecialchars($post['nama']);
    $harga = htmlspecialchars($post['harga']);
    $stok = htmlspecialchars($post['stok']);
    $keterangan = htmlspecialchars($post['keterangan']);

    $sql = "INSERT INTO barang VALUES ('', '$kodeBarang', '$nama', $harga, $stok, '$keterangan')";
    mysqli_query($conn, $sql);
    return mysqli_affected_rows($conn);
  }