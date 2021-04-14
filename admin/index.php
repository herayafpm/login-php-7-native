<?php
// ini kode untuk menyimpan sesi
// biasanya jika dalam 1menit website tidak dibuka maka sesi akan berakhir
// di sesi inilah email dan status sedang login disimpan
session_start();
// ini untuk mengecek apakah sudah login atau belum dengan mengecek kunci status di sesi
if (!isset($_SESSION['status'])) {
  // ini untuk menyimpan pesan kesalahan error ke sesi yang nantinya ditampilkan di halaman index.php
  $_SESSION['error'] = 'Anda belum login';
  // jika sudah maka lempar / redirect ke halaman index.php
  header("location:../index.php");
}
?>
<!-- ini menggunakan framework css bootstrap v4.6.0 -->
<!-- https://getbootstrap.com/docs/4.6/getting-started/introduction/ -->
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

  <title>Halaman Admin</title>
</head>

<body>

  <div class="container pt-5">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <!-- kode $_SESSION['email'] digunakan untuk memanggil isi dari sesi yang disimpan tadi di login_process.php -->
        <h1>Selamat datang, <?= $_SESSION['email'] ?></h1>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-8 text-center">
        <a href="../logout.php" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">Logout</a>
      </div>
    </div>
  </div>




  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
</body>

</html>