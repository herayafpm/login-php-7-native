<?php
// ini kode untuk menyimpan sesi
// biasanya jika dalam 1menit website tidak dibuka maka sesi akan berakhir
// di sesi inilah email dan status sedang login disimpan
session_start();
// ini untuk mengecek apakah sudah login atau belum dengan mengecek isi kunci status di sesi
if (isset($_SESSION['status']) && $_SESSION['status'] == 'login') {
  // jika sudah maka lempar / redirect ke halaman admin/index.php
  header("location:admin/index.php");
}
?>
<!-- ini menggunakan template tampilan Adminlte 3 -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Halaman Daftar</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="./assets/adminlte3/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="./assets/adminlte3/dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">
  <div class="row justify-content-center">
    <div class="col-md-12">
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
  <div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <a href="index.php" class="h1"><b>Halaman</b>Daftar</a>
      </div>
      <div class="card-body">
        <!-- atribut action digunakan untuk memproses form yang dibawah ini -->
        <form action="daftar_process.php" method="post">
          <div class="input-group mb-3">
            <!-- atribut name disini digunakan untuk data kirim yang akan diproses di daftar_process.php -->
            <input type="text" class="form-control" placeholder="Username" name="username" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <!-- atribut name disini digunakan untuk data kirim yang akan diproses di daftar_process.php -->
            <input type="password" class="form-control" placeholder="Password" name="password" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <button type="submit" class="btn btn-primary btn-block">Daftar</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
        <p class="mb-0 mt-2">
          <a href="index.php" class="text-center">Login</a>
        </p>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.login-box -->

  <!-- jQuery -->
  <script src="./assets/adminlte3/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="./assets/adminlte3/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="./assets/adminlte3/dist/js/adminlte.min.js"></script>
</body>

</html>