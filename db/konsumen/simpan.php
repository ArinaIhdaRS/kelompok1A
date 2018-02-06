<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   $id_konsumen = $_POST['id_konsumen'];
   $nama_konsumen = $_POST['nama_konsumen'];
   $alamat_konsumen = $_POST['alamat_konsumen'];
   

try {
  $koneksi = new PDO('mysql:host=localhost;
  dbname=kuery','root','170897');
} catch (PDOException $e) {
  die($e->getMessage());
}

$query = $koneksi->prepare("INSERT INTO konsumen
                            (id_konsumen, nama_konsumen, alamat_konsumen) VALUES
                            (:id_konsumen, :nama_konsumen, :alamat_konsumen)
                           ");
$koneksi->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query->bindParam(':id_konsumen', $id_konsumen);
$query->bindParam(':nama_konsumen', $nama_konsumen);
$query->bindParam(':alamat_konsumen', $alamat_konsumen);


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
i