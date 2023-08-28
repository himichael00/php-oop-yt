<?php
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
?>