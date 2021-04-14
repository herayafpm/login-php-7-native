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
$data = mysqli_query($koneksi, "select * from admin where username='$username'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

// di cek jika $cek ada isinya maka berarti username sudah digunakan
// tapi jika belum maka akan dibuatkan akunnya
if ($cek > 0) {
  // ini untuk menyimpan pesan kesalahan error ke sesi yang nantinya ditampilkan di halaman daftar.php
  $_SESSION['error'] = 'Username sudah digunakan, gunakan yang lain';
  // ini untuk melempar / redirect ke halaman daftar.php
  header("location:daftar.php");
} else {
  // ini untuk menambahkan akun yang telah didaftarkan ke tabel admin dengan field yang dimasukkan adalah username dan password
  // karena id sudah otomatis maka tidak perlu dimasukkan nama fieldnya, cth field (username,password)
  $create = mysqli_query($koneksi, "insert into admin (username,password) values('$username','$password')");
  // ini untuk menyimpan pesan kesalahan success ke sesi yang nantinya ditampilkan di halaman index.php
  $_SESSION['success'] = 'Anda berhasil mendaftar silahkan login';
  // ini untuk melempar / redirect ke halaman index.php
  header("location:index.php");
}
