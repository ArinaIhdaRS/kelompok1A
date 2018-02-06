<?php
  $head = 'Database | Barang | Tambah Barang';
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
      <label>Id Barang</label>
      <input type="text" name="id_barang" class="form-control">
    </div>
    <div class="form-group">
      <label>Nama Barang</label>
      <input type="text" name="nama_barang" class="form-control">
    </div>
    <div class="form-group">
      <label>Harga Barang</label>
      <input type="text" name="harga_barang" class="form-control">
    </div>
    <div class="form-group">
      <label>Kategori</label>
      <input type="text" name="kategori_barang" class="form-control">
    </div>
    <br><br>
    <input type="submit" class="btn btn-success" value="Simpan">
  </form>

</div>
<br><br><br><br>

<?php require ('../../_layout/footer.php'); ?>
