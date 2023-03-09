<?php

// jika belum mengisi form,tidak akan lanjut halaman
if( !isset($_POST['submit'])){
    header("Location: Index.php");
    exit;
}

// variable
$nama = $_POST['nama'];
$matkul = $_POST['matkul'];
$uts = $_POST['uts'];
$uas = $_POST['uas'];
$tugas = $_POST['tugas'];

// nilai akhir
$nilai_total = ($uts + $uas + $tugas) / 3;

// grade dan kelulusan

require_once 'libfungsi.php';
$nilai = $nilai_total

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>
<table class="table table-bordered text-center">
  <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">Nama</th>
      <th scope="col">Mata Kuliah</th>
      <th scope="col">UTS</th>
      <th scope="col">UAS</th>
      <th scope="col">Tugas/Praktikum</th>
      <th scope="col">Nilai Akhir</th>
      <th scope="col">Grade</th>
      <th scope="col">Keterangan</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?= 1 ?></td>
      <td><?= $nama ?></td>
      <td><?= $matkul ?></td>
      <td><?= $uts ?></td>
      <td><?= $uas ?></td>
      <td><?= $tugas ?></td>
      <td><?= number_format($nilai_total,2,',','.') ?></td>
      <td><?= grade($nilai) ?></td>
      <td><?= kelulusan($nilai) ?></td>
    </tr>
  </tbody>
</table>  
</body>
</html>