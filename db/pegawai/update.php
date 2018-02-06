<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   $id_pegawai_lama = $_GET['id_pegawai'];
   $id_pegawai = $_POST['id_pegawai'];
   $nama_pegawai = $_POST['nama_pegawai'];
   $alamat_pegawai = $_POST['alamat_pegawai'];
   

   $GLOBALS = ['id_pegawai_lama'];
try {
  $koneksi = new PDO('mysql:host=localhost;
  dbname=kuery','root','170897');
} catch (PDOException $e) {
  die($e->getMessage());
}

$query = $koneksi->prepare("UPDATE pegawai SET
                           id_pegawai = :id_pegawai,
                           nama_pegawai = :nama_pegawai,
                           alamat_pegawai = :alamat_pegawai,
                           WHERE id_pegawai = :id_pegawai_lama");
$koneksi->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query->bindParam(':id_pegawai', $id_pegawai);
$query->bindParam(':nama_pegawai', $nama_pegawai);
$query->bindParam(':alamat_pegawai', $harga_pegawai);
$query->bindParam(':id_pegawai_lama', $id_pegawai_lama);

try {
  $query->execute();
  header('Location: index.php');
} catch (PDOException $e) {
  die($e->getMessage());

  header('Location:edit.php?id_pegawai='.$GLOBALS["no"]);
}


}

?>
