<?php
  $head = 'Database | pegawai | Tambah pegawai';
  require('../../_layout/header.php');
  require('../../_layout/nav.php');
?>

<div class="container">
  <?php if (isset($_SESSION['error'])): ?>
    <div class="alert alert-danger">
      <?= $_SESSION['error'] ?>
    </div>
  <?php endif; ?>
  <?php unset($_SESSION['error']) ?>
  <form method="post" action="simpan.php">
  <br><br><br><br>
    <div class="form-group">
      <label>Id pegawai</label>
      <input type="text" name="id_pegawai" class="form-control">
    </div>
    <div class="form-group">
      <label>Nama pegawai</label>
      <input type="text" name="nama_pegawai" class="form-control">
    </div>
    <div class="form-group">
      <label>alamat pegawai</label>
      <input type="text" name="alamat_pegawai" class="form-control">
    </div>
    
    <br><br>
    <input type="submit" class="btn btn-success" value="Simpan">
  </form>

</div>
<br><br><br><br>

<?php require ('../../_layout/footer.php'); ?>
