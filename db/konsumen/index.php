<?php
try {
  $koneksi = new PDO('mysql:host=localhost;
  dbname=kuery','root','170897');
} catch (PDOException $e) {
  die($e->getMessage());
}

$query = $koneksi->prepare('SELECT * FROM konsumen');
//$query = $koneksi->prepare('SELECT * FROM mahasiswa WHERE nama LIKE "Gayle%"');

$query->execute();

$daftar_konsumen = $query->fetchAll(PDO::FETCH_OBJ);
//$mahasiswa = $query->fetch(PDO::FETCH_OBJ);

require 'index.view.php';
 ?>
