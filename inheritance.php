<?php
require_once "constructor.php";
class Manga extends Produk {
    public function detaillengkap()
    {
        $str = "Manga : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jumlahhalaman} Halaman";
        return $str;
    }
}
class Anime extends Produk {
    public function detaillengkap()
    {
        $str = "Anime : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->durasimain} Menit";
        return $str;
    }
}

$product1 = new Manga();
$product2 = new Anime("DEMON SLAYER", "UNKNOWN", "UFOTABLE", 1799000, 0, 80);

echo $product1->detaillengkap();

echo "<br>";

echo $product2->detaillengkap();

echo "<br>";
?>