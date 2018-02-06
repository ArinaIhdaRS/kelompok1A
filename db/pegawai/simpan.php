<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   $id_pegawai = $_POST['id_pegawai'];
   $nama_pegawai = $_POST['nama_pegawai'];
   $alamat_pegawai = $_POST['alamat_pegawai'];
   

try {
  $koneksi = new PDO('mysql:host=localhost;
  dbname=kuery','root','170897');
} catch (PDOException $e) {
  die($e->getMessage());
}

$query = $koneksi->prepare("INSERT INTO pegawai
                            (id_pegawai, nama_pegawai, alamat_pegawai) VALUES
                            (:id_pegawai, :nama_pegawai, :alamat_pegawai)
                           ");
$koneksi->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query->bindParam(':id_pegawai', $id_pegawai);
$query->bindParam(':nama_pegawai', $nama_pegawai);
$query->bindParam(':alamat_pegawai', $alamat_pegawai);


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