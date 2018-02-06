<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   $id_konsumen_lama = $_GET['id_konsumen'];
   $id_konsumen = $_POST['id_konsumen'];
   $nama_konsumen = $_POST['nama_konsumen'];
   $alamat_konsumen = $_POST['alamat_konsumen'];
   

   $GLOBALS = ['id_konsumen_lama'];
try {
  $koneksi = new PDO('mysql:host=localhost;
  dbname=kuery','root','170897');
} catch (PDOException $e) {
  die($e->getMessage());
}

$query = $koneksi->prepare("UPDATE konsumen SET
                           id_konsumen = :id_konsumen,
                           nama_konsumen = :nama_konsumen,
                           alamat_konsumen = :alamat_konsumen,
                           WHERE id_konsumen = :id_konsumen_lama");
$koneksi->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query->bindParam(':id_konsumen', $id_konsumen);
$query->bindParam(':nama_konsumen', $nama_konsumen);
$query->bindParam(':alamat_konsumen', $harga_konsumen);
$query->bindParam(':id_konsumen_lama', $id_konsumen_lama);

try {
  $query->execute();
  header('Location: index.php');
} catch (PDOException $e) {
  die($e->getMessage());

  header('Location:edit.php?id_konsumen='.$GLOBALS["no"]);
}


}

?>
