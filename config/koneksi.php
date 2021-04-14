<?php
// ini kode untuk mengkoneksikan ke database
// mysqli_connect("localhost","username","password","nama_database")
// untuk yang pakai aplikasi XAMPP 
// username root passwordnya kosong
$koneksi = mysqli_connect("localhost", "root", "", "login");

// ini kode untuk cek apakah database sudah terkoneksi dengan benar atau belum
if (mysqli_connect_errno()) {
  echo "Koneksi database gagal : " . mysqli_connect_error();
}
