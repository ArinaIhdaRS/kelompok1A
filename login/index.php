<?php require('../_layout/header.php');
      require('login.php');
?>
<link rel="stylesheet" href="../css/login.css" media="screen" title="no title" charset="utf-8">
    <div class="container">
        <?php if(isset($ditemukan) && $ditemukan==false): ?>
        <div class="alert alert-danger">
          Username dan Password yang anda masukkan salah!
        </div>
      <?php endif; ?>
      <form class="form-signin" method="post" name="login">
        <h2 class="form-signin-heading">Login</h2>
        <label for="inputUsername" class="sr-only">Username</label>
        <input type="text" id="inputUsername" name="username" class="form-control" placeholder="Username" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>
    </div> <!-- /container -->

