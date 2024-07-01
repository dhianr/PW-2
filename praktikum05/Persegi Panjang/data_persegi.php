<?php
// Import class PersegiPanjang
require_once 'class_persegipanjang.php';

// Membuat objek PersegiPanjang dengan panjang 8 dan lebar 7
$persegiPanjang = new PersegiPanjang(8, 7);

// Menghitung luas dan keliling persegi panjang
$luas = $persegiPanjang->luas();
$keliling = $persegiPanjang->keliling();

// Menampilkan hasil
echo "Luas persegi panjang: $luas <br>";
echo "Keliling persegi panjang: $keliling";
?>
