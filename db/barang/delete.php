<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
   $id_barang = $_GET['id_barang'];

try {
  $koneksi = new PDO('mysql:host=localhost;
  dbname=kuery','root','170897');
} catch (PDOException $e) {
  die($e->getMessage());
}

$query = $koneksi->prepare("DELETE FROM barang WHERE id_barang = :id_barang");
$koneksi->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query->bindParam(':id_barang', $id_barang);

try {
  $query->execute();
  header('Location: index.php');
} catch (PDOException $e) {
  die($e->getMessage());
}

}

?>
