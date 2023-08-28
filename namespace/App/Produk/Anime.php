<?php
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
?>