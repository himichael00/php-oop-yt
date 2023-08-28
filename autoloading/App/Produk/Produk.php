<?php
abstract class Produk {
    protected $judul,
           $penulis,
           $penerbit,
           $diskon = 0,
           $harga;

    // protected digunakan ketika ingin digunakan pada class lain tanpa
    // merubah adanya value sehingga lebih aman dari public
           
    // private digunakan ketika ingin mengakses dari class itu sendiri
    
    public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getHarga()
    {
        return $this->harga - ($this->harga * $this->diskon/100);
    }

    public function setHarga()
    {
        $this->harga;
    }

    public function getDiskon()
    {
        return $this->diskon;
    }

    public function setDiskon($diskon)
    {
        $this->diskon = $diskon;
    }

    public function getLabel()
    {
        return
         "this product is : $this->penulis, $this->penerbit";
    }

    public function getJudul()
    {
        return $this->judul;
    }

    public function setJudul($judul){
        if ( !is_string($judul)) {
            throw new Exception("judul harus string");
        }
        $this->judul = $judul;
    }

    public function getPenulis()
    {
        return $this->penulis;
    }

    public function setPenulis($penulis)
    {
        $this->penulis = $penulis;
    }

    public function getPenerbit()
    {
        return $this->penerbit;
    }

    public function setPenerbit($penerbit)
    {
        $this->penerbit = $penerbit;
    }

    abstract public function getInfo();
}
?>