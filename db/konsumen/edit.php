<?php
  $head = 'Database | konsumen | Edit konsumen';
  require('../../_layout/header.php');
  require ('../../_layout/nav.php');

  try {
    $koneksi = new PDO('mysql:host=localhost;
    dbname=kuery','root','170897');
  } catch (PDOException $e) {
    die($e->getMessage());
  }

  $id_konsumen = $_GET['id_konsumen'];

  $query = $koneksi->prepare('SELECT * FROM konsumen WHERE id_konsumen = :id_konsumen');
  $query->bindParam(':id_konsumen', $id_konsumen);

  $query->execute();

  $konsumen = $query->fetch(PDO::FETCH_OBJ);

  //var_dump($konsumen);

?>
<br><br><br>
<div class="container">
  <form method="post" action="update.php?id_konsumen=<?= $konsumen->id_konsumen ?>">
    <div class="form-group">
      <label>Id konsumen</label>
      <input type="text" name="id_konsumen" class="form-control" value="<?= $konsumen->id_konsumen ?>">
    </div>
    <div class="form-group">
      <label>Nama konsumen</label>
      <input type="text" name="nama_konsumen" class="form-control" value="<?= $konsumen->nama_konsumen ?>">
    </div>
    <div class="form-group">
      <label>alamat konsumen</label>
      <input type="text" name="alamat_konsumen" class="form-control" value="<?= $konsumen->alamat_konsumen ?>">
    </div>
  
    <input type="submit" class="btn btn-success" value="Update">
  </form>

</div>

<?php require ('../../_layout/footer.php'); ?>
