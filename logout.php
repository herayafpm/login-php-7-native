<?php
session_start();
// kode ini digunakan untuk menghapus semua data yang disimpan di dalam sesi
session_unset();
session_destroy();
// kode ini digunakan untuk menyimpan pesan sukses ke sesi untuk ditampilkan ke halaman lokasi yang ditentukan
// disini redirect ke halaman index.php
session_start();
$_SESSION['success'] = 'Anda berhasil keluar';
// kode ini digunakan melempar / redirect ke halaman index.php
header("location:index.php");
