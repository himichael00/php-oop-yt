<?php
require_once 'App/init.php';

$product1 = new Manga("JUJUTSU KAISEN", "GEGE AKUTAMI", "MAPPA", 1850000, 120);
$product2 = new Anime("DEMON SLAYER", "UNKNOWN", "UFOTABLE", 1799000, 80);

$cetakproduk = new CetakInfoProduk();
$cetakproduk->tambahproduk($product1);
$cetakproduk->tambahproduk($product2);
echo $cetakproduk->cetak();

echo "<br>";

new coba();
?>