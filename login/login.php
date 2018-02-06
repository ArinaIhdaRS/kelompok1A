<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   $username = $_POST['username'];
   $password = $_POST['password'];

try {
  $koneksi = new PDO('mysql:host=localhost;
  dbname=login','root','170897');
} catch (PDOException $e) {
  die($e->getMessage());
}

$query = $koneksi->prepare("SELECT id_admin FROM admin
                            WHERE username = :username
                            AND password = :password
                           ");

$query->bindParam(':username', $username);
$query->bindParam(':password', $password);

$query->execute();
$ditemukan = $query->fetch(PDO::FETCH_OBJ);

if ($ditemukan) {
  $_SESSION['username'] = $username;
  header('Location: admin.php');
  }
}

?>
