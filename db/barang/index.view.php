<?php
$head = 'Database | Barang';
require ('../../_layout/header.php');
require ('../../_layout/nav.php');
?>
<section class="title">
    <div class="container">
      <div class="row-fluid">
        <div class="span6">
          <h1>Database Barang</h1>
        </div>
        <!--<div class="span6">
          <ul class="breadcrumb pull-right">
            <li><a href="index.html">Home</a> <span class="divider">/</span></li>
            <li><a href="#">Pages</a> <span class="divider">/</span></li>
            <li class="active">Career</li>
          </ul>
        </div>-->
      </div>
    </div>
  </section>

<div class="container">
  <?php if (isset($_SESSION['username'])): ?>
    <a href="tambah.php" class="btn btn-success">Tambah Barang</a>
  <?php endif; ?>
  <table class="table">
    <thead>
      <tr>
        <th>
          ID
        </th>
        <th>
          Nama
        </th>
        <th>
          Harga
        </th>
        <th>
          Kategori
        </th>
        <?php if (isset($_SESSION['username'])): ?>
          <th>
            Aksi
          </th>
        <?php endif; ?>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($daftar_barang as $barang): ?>
        <tr>
          <td>
            <?= $barang->id_barang ?>
          </td>
          <td> 
            <a href="http://localhost/kelompok1A/db/barang/detail.php"><?= $barang->nama_barag ?></a>
          </td>
          <td>
            <?= $barang->harga_barang ?> <!-- / <?= $murid->tanggal_lahir ?> -->
          </td>
          <td>
            <?= $barang->kategori_barang ?>
          </td>
          <?php if (isset($_SESSION['username'])): ?>
            <td>
              <a href="edit.php?id_barang=<?= $barang->id_barang ?>" class="btn btn-warning">Edit</a>
            </td>
          <?php endif; ?>
          <?php if (isset($_SESSION['username'])): ?>
            <td>
              <a href="delete.php?id_barang=<?= $barang->id_barang ?>" class="btn btn-danger">Delete</a>
            </td>
          <?php endif; ?>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>

</div>

<?php require '../../_layout/footer.php' ?>
