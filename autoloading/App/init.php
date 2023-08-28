<?php
// require_once 'Produk/infoproduk.php';
// require_once 'Produk/Produk.php';
// require_once 'Produk/Manga.php';
// require_once 'Produk/Anime.php';
// require_once 'Produk/CetakInfoProduk.php';

spl_autoload_register(function($class){
    require_once 'Produk/' . $class . '.php';
});
?>