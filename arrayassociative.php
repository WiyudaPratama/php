<?php 
  $data = [
    [
      'nama' => 'Wiyuda Pratam Mahardika',
      'npm' => '18110243',
      'jurusan' => 'Teknik Informatika',
      'email' => 'wiyudapratama310@gmail.com'
    ],
    [
      'nama' => 'Ade Novian',
      'npm' => '18110221',
      'jurusan' => 'Teknik Informatika',
      'email' => 'ade0@gmail.com'
    ]
  ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Data Mahasiswa</h1>

  <?php foreach($data as $d) : ?>
    <ul>
      <li><?= $d['nama'] ?></li>
      <li><?= $d['npm'] ?></li>
      <li><?= $d['jurusan'] ?></li>
      <li><?= $d['email'] ?></li>
    </ul>
  <?php endforeach; ?>
  
</body>
</html>