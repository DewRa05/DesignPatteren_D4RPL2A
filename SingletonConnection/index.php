<?php

// Panggil file Database dan Pertanian
require_once 'Database.php';
require_once 'Pertanian.php';

// Membuat instance pertama dari kelas Pertanian
$pertanian = new Pertanian();

// Membuat tabel tanaman
$pertanian->createTable();

// Menambahkan data tanaman
$pertanian->tambahTanaman("Padi", "Padi Sawah", 100, 5000);
$pertanian->tambahTanaman("Jagung", "Jagung Manis", 50, 7000);

// Mengambil dan menampilkan data tanaman
echo "Data Tanaman:<br>";
$pertanian->ambilTanaman();

// Menghapus data tanaman
$pertanian->hapusTanaman(1);

// Menampilkan data tanaman setelah dihapus
echo "<br>Data Tanaman Setelah Penghapusan:<br>";
$pertanian->ambilTanaman();

// Panggil beberapa kali dan var_dump
echo "<br>Var_dump dari instance pertama:<br>";
var_dump($pertanian);

// Buat instance baru dari kelas Pertanian
$pertanian2 = new Pertanian();

// Panggil var_dump untuk instance kedua
echo "<br>Var_dump dari instance kedua:<br>";
var_dump($pertanian2);

// Anda dapat melihat bahwa keduanya mengacu pada objek yang sama (singleton) karena instance kedua tidak dibuat ulang.
?>
