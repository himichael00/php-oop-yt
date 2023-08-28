<?php

require_once 'constructor.php';

class Manga extends Produk implements infoproduk {
    public $jumlahhalaman;

    public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $jumlahhalaman = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->jumlahhalaman = $jumlahhalaman;
    }

    public function detaillengkap()
    {
        $str = "Manga : ".$this->getInfo()." - {$this->jumlahhalaman} Halaman";
        return $str;
    }

    public function getInfo() {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }
}
class Anime extends Produk implements infoproduk {

    public $durasimain;

    public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $durasimain = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->durasimain = $durasimain;
    }

    public function detaillengkap()
    {
        $str = "Anime : ".$this->getInfo()." - {$this->durasimain} Menit";
        return $str;
    }

    public function getInfo() {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }
}

// ===================================================BEDA FUNGSI DARI CLASS DIATAS=======================================================================

class CetakInfoProduk {
    public $daftarproduk = [];

    public function tambahproduk(Produk $produk){
        $this->daftarproduk[] = $produk;
    }

    public function cetak() {
        $str = "DAFTAR PRODUK : <br>";
        foreach( $this->daftarproduk as $theproduk){
            $str .= "{$theproduk->detaillengkap()} <br>";
        }

        return $str;
    }
}

$product1 = new Manga("JUJUTSU KAISEN", "GEGE AKUTAMI", "MAPPA", 1850000, 120);
$product2 = new Anime("DEMON SLAYER", "UNKNOWN", "UFOTABLE", 1799000, 80);

$cetakproduk = new CetakInfoProduk();
$cetakproduk->tambahproduk($product1);
$cetakproduk->tambahproduk($product2);
echo $cetakproduk->cetak();

?>