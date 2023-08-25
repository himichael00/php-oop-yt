<?php
// MAPPA STUDIOS
// MANGA
// ANIME

class Produk {
    public $judul,
           $penulis,
           $penerbit,
           $harga,
           $jumlahhalaman,
           $durasimain;

    public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $jumlahhalaman = 0, $durasimain = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jumlahhalaman = $jumlahhalaman;
        $this->durasimain = $durasimain;
    }

    public function getLabel() {
        return "this product is : $this->penulis, $this->penerbit";
    }

    public function detaillengkap() {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }
}





// $infoproduk = new CetakInfoProduk();
// echo $infoproduk->cetak($product1);

// echo "<br>";
// $detailproduk = new Produk();
// echo $detailproduk->detaillengkap();

// $infoprodukdetail = new detail();
// echo $infoprodukdetail->
?>