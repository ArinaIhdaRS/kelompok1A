<?php
  $head = 'Database | Barang | Edit Barang';
  require('../../_layout/header.php');
  require ('../../_layout/nav.php');

  try {
    $koneksi = new PDO('mysql:host=localhost;
    dbname=kuery','root','170897');
  } catch (PDOException $e) {
    die($e->getMessage());
  }

  $id_barang = $_GET['id_barang'];

  $query = $koneksi->prepare('SELECT * FROM barang WHERE id_barang = :id_barang');
  $query->bindParam(':id_barang', $id_barang);


  $query->execute();

  $barang = $query->fetch(PDO::FETCH_OBJ);

  //var_dump($barang);

?>

<br><br><br>

<div class="container">
  <form method="post" action="update.php?id_barang=<?= $barang->id_barang ?>">
    <div class="form-group">
      <label>Id Barang</label>
      <input type="text" name="id_barang" class="form-control" value="<?= $barang->id_barang ?>">
      <?= $barang->id_barang ?>
    </div>
    <div class="form-group">
      <label>Nama Barang</label>
      <input type="text" name="nama_barag" class="form-control" value="<?= $barang->nama_barag ?>">
    </div>
    <div class="form-group">
      <label>Harga Barang</label>
      <input type="text" name="harga_barang" class="form-control" value="<?= $barang->harga_barang ?>">
    </div>
    <div class="form-group">
      <label>Kategori Barang</label>
      <input type="text" name="kategori_barang" class="form-control" value="<?= $barang->kategori_barang ?>">
    </div>
   
  </form>

</div>


  <img src="../../images/portfolio/milo.jpg">

</div>
