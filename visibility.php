<?php
require_once "constructor.php";

class Manga extends Produk {
    public $jumlahhalaman;

    public function setDiskon($diskon)
    {
        $this->diskon = $diskon;
    }

    public function __construct($judul, $penulis, $penerbit, $harga, $jumlahhalaman = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->jumlahhalaman = $jumlahhalaman;
    }

    public function detaillengkap()
    {
        $str = "Manga : ".parent::detaillengkap()." - {$this->jumlahhalaman} Halaman";
        return $str;
    }
}
class Anime extends Produk {

    public $durasimain;

    public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $durasimain = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->durasimain = $durasimain;
    }

    public function detaillengkap()
    {
        $str = "Anime : ".parent::detaillengkap()." - {$this->durasimain} Menit";
        return $str;
    }
}

$product1 = new Manga("JUJUTSU KAISEN", "UNKNOWN", "MAPPA", 1850000, 120);
$product2 = new Anime("DEMON SLAYER", "UNKNOWN", "UFOTABLE", 1799000, 80);

echo $product1->detaillengkap();

echo "<br>";

echo $product2->detaillengkap();

echo "<br>";

echo $product1->setDiskon(50);
echo $product1->getHarga();

?>