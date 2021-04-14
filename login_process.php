<?php
session_start();
// kode ini digunakan untuk menyambungkan ke database yang telah dibuat
include 'config/koneksi.php';
// menangkap data yang dikirim dari form
// $_POST karena menggunakan method POST di atribut form
// $_POST['name'] mengambil data dari form yang dikirim dari index.php
$username = $_POST['username'];
$password = $_POST['password'];
// menyeleksi data di tabel admin dengan username dan password yang sesuai
// ini bahasa pemrograman SQL untuk yang select * from ...
$data = mysqli_query($koneksi, "select * from admin where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

// di cek jika $cek ada isinya maka berarti username dan password benar
// tapi jika salah maka akan dilempar ke index.php namun dengan pesan error
if ($cek > 0) {
  // ini untuk menyimpan status dan username telah login ke sesi
  $_SESSION['username'] = $username;
  $_SESSION['status'] = "login";
  // ini untuk melempar / redirect ke halaman admin/index.php
  header("location:admin/index.php");
} else {
  // ini untuk menyimpan pesan kesalahan error ke sesi yang nantinya ditampilkan di halaman index.php
  $_SESSION['error'] = 'Username atau password yang anda masukkan salah';
  // ini untuk melempar / redirect ke halaman index.php
  header("location:index.php");
}
