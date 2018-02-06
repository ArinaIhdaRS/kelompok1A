<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   $id_barang = $_POST['id_barang'];
   $nama_barag = $_POST['nama_barag'];
   $harga_barang = $_POST['harga_barang'];
   $kategori_barang = $_POST['kategori_barang'];

try {
  $koneksi = new PDO('mysql:host=localhost;
  dbname=kuery','root','170897');
} catch (PDOException $e) {
  die($e->getMessage());
}

$query = $koneksi->prepare("INSERT INTO barang
                            (id_barang, nama_barag, harga_barang, kategori_barang) VALUES
                            (:id_barang, :nama_barag, :harga_barang, :kategori_barang)
                           ");
$koneksi->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query->bindParam(':id_barang', $id_barang);
$query->bindParam(':nama_barag', $nama_barag);
$query->bindParam(':harga_barang', $harga_barang);
$query->bindParam(':kategori_barang', $kategori_barang);

try {
  $query->execute();
  header('Location: index.php');
} catch (PDOException $e) {
  if ($e->errorInfo[1] == 1062) { // 1062 adalah kode error untuk duplicate entry
     session_start();
     $_SESSION['error'] = 'Data yang anda input sudah ada.';
     header('Location: tambah.php');
   }
}


}

?>
