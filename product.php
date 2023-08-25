<?php
// IKEA
// PERABOTAN
// MAKANAN

class Produk {
    public $meja = "Meja",
           $warna = "Warna",
           $bahan = "Bahan",
           $harga = 0;

    public function getLabel() {
        return "this product is : $this->meja, $this->warna, $this->bahan, $this->harga";
    }
}

$product1 = new Produk();
$product1->meja = "BEKANT";
$product1->warna = "HITAM";
$product1->bahan = "KAYU ASH";
$product1->harga = 3895000;
echo $product1->getLabel();

$product2 = new Produk();
$product2->meja = "TROTTEN";
$product2->warna = "PUTIH";
$product2->bahan = "KAYU ASH";
$product2->harga = 1799000;
echo $product1->getLabel();


?>