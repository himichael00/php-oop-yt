<?php
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
?>