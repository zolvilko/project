<?php
try {
// buat koneksi dengan database
   $dbh = new PDO('mysql:host=localhost;dbname=akademik', "root", "");
}
catch (PDOException $e) {
// tampilkan pesan kesalahan jika koneksi gagal
   print "Koneksi atau query bermasalah: " . $e->getMessage() . "<br/>";
   die();
}