<?php
  $head = 'Database | pegawai | Edit pegawai';
  require('../../_layout/header.php');
  require ('../../_layout/nav.php');

  try {
    $koneksi = new PDO('mysql:host=localhost;
    dbname=kuery','root','170897');
  } catch (PDOException $e) {
    die($e->getMessage());
  }

  $id_pegawai = $_GET['id_pegawai'];

  $query = $koneksi->prepare('SELECT * FROM pegawai WHERE id_pegawai = :id_pegawai');
  $query->bindParam(':id_pegawai', $id_pegawai);

  $query->execute();

  $pegawai = $query->fetch(PDO::FETCH_OBJ);

  //var_dump($pegawai);

?>
<br><br><br>
<div class="container">
  <form method="post" action="update.php?id_pegawai=<?= $pegawai->id_pegawai ?>">
    <div class="form-group">
      <label>Id pegawai</label>
      <input type="text" name="id_pegawai" class="form-control" value="<?= $pegawai->id_pegawai ?>">
    </div>
    <div class="form-group">
      <label>Nama pegawai</label>
      <input type="text" name="nama_pegawai" class="form-control" value="<?= $pegawai->nama_pegawai ?>">
    </div>
    <div class="form-group">
      <label>alamat pegawai</label>
      <input type="text" name="alamat_pegawai" class="form-control" value="<?= $pegawai->alamat_pegawai ?>">
    </div>
  
    <input type="submit" class="btn btn-success" value="Update">
  </form>

</div>

<?php require ('../../_layout/footer.php'); ?>
