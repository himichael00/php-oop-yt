<?php
require_once "object_type.php";

// MAPPA STUDIOS
// MANGA
// ANIME

$product1 = new Produk("JUJUTSU KAISEN", "GEGE AKUTAMI", "MAPPA", 3895000, 0, 90, "ANIME");
$product2 = new Produk("DEMON SLAYER", "UNKNOWN", "UFOTABLE", 1799000, 80, 0, "MANGA");

echo $product1->detaillengkap();

echo "<br>";

echo $product2->detaillengkap();

echo "<br>";

$infoproduk = new CetakInfoProduk();
echo $infoproduk->cetak($product1);


?>