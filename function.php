<?php 
  function salam($nama = "Coba") {
    return "halo $nama";
  }

  echo date('l');

  echo time();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <h1><?= salam(); ?></h1>

</body>
</html>