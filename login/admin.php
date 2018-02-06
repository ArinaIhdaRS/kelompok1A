<?php
require('../_layout/header.php');
?>
<?php if (isset($_SESSION['username'])): ?>
<?php require('../_layout/nav.php'); ?>
  <?php header('Location: http://localhost/kelompok1A/db') ?>
<?php endif; ?>


<?php require('../_layout/footer.php'); ?>