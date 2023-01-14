<?php
$koneksilogin = mysqli_connect("localhost", "root", "", "user");

// cek koneksi
if (mysqli_connect_errno()) {
    echo "Koneksi Database Gagal : " . mysqli_connect_errno();
}
