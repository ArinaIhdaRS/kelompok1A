<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   $id_barang_lama = $_GET['id_barang'];
   $id_barang = $_POST['id_barang'];
   $nama_barag = $_POST['nama_barag'];
   $harga_barang = $_POST['harga_barang'];
   $kategori_barang = $_POST['kategori_barang'];

   $GLOBALS = ['id_barang_lama'];
try {
  $koneksi = new PDO('mysql:host=localhost;
  dbname=kuery','root','170897');
} catch (PDOException $e) {
  die($e->getMessage());
}

$query = $koneksi->prepare("UPDATE barang SET
                           id_barang = :id_barang,
                           nama_barag = :nama_barag,
                           harga_barang = :harga_barang,
                           kategori_barang = :kategori_barang
                           WHERE id_barang = :id_barang_lama");
$koneksi->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query->bindParam(':id_barang', $id_barang);
$query->bindParam(':nama_barag', $nama_barag);
$query->bindParam(':harga_barang', $harga_barang);
$query->bindParam(':kategori_barang', $kategori_barang);
$query->bindParam(':id_barang_lama', $id_barang_lama);

try {
  $query->execute();
  header('Location: index.php');
} catch (PDOException $e) {
  die($e->getMessage());

  header('Location:edit.php?id_barang='.$GLOBALS["no"]);
}


}

?>
