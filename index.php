<?php
// ini kode untuk menyimpan sesi
// biasanya jika dalam 1menit website tidak dibuka maka sesi akan berakhir
// di sesi inilah email dan status sedang login disimpan
session_start();
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

  <title>Halaman Login</title>
</head>

<body>

  <div class="container pt-5">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <!-- ini kode untuk menampilkan pesan error -->
        <!-- $_SESSION['error'] yaitu memanggil sesi dengan nama kunci error -->
        <?php if (isset($_SESSION['error'])) : ?>
          <div class="alert alert-danger">
            <?php echo $_SESSION['error']; ?>
          </div>
        <?php endif; ?>
        <!-- ini kode untuk menampilkan pesan success -->
        <!-- $_SESSION['success'] yaitu memanggil sesi dengan nama kunci success -->
        <?php if (isset($_SESSION['success'])) : ?>
          <div class="alert alert-success">
            <?php echo $_SESSION['success']; ?>
          </div>
        <?php endif; ?>
        <!-- ini untuk menghapus kunci error dari sesi -->
        <?php unset($_SESSION['error']); ?>
        <!-- ini untuk menghapus kunci success dari sesi -->
        <?php unset($_SESSION['success']); ?>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-4">
        <h1>Halaman Login</h1>
        <!-- atribut action digunakan untuk memproses form yang dibawah ini -->
        <form action="login_process.php" method="POST">
          <div class="form-group">
            <label for="email">Email</label>
            <!-- atribut name disini digunakan untuk data kirim yang akan diproses di login_process.php -->
            <input type="email" class="form-control" name="email" id="email" required>
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <!-- atribut name disini digunakan untuk data kirim yang akan diproses di login_process.php -->
            <input type="password" class="form-control" name="password" id="password" required>
          </div>
          <button type="submit" name="login" class="btn btn-primary">Login</button>
        </form>
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