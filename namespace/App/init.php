<?php
// require_once 'Produk/infoproduk.php';
// require_once 'Produk/Produk.php';
// require_once 'Produk/Manga.php';
// require_once 'Produk/Anime.php';
// require_once 'Produk/CetakInfoProduk.php';
// require_once 'Produk/User.php';
// require_once 'Service/User.php';

spl_autoload_register(function($class){
    // App\Produk\User
    $class = explode('\\', $class);
    $class = end($class);
    require_once 'Produk/' . $class . '.php';
});

spl_autoload_register(function($class){
    $class = explode('\\', $class);
    $class = end($class);
    require_once 'Service/' . $class . '.php';
});
?>