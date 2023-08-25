<?php
require_once "constructor.php";

class CetakInfoProduk {
    public function cetak(Produk $produk ) {
        $str = "{$produk->judul} | {$produk->detaillengkap()} (Rp. {$produk->harga})";
        return $str;
    }
}
?>