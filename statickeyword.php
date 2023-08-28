<?php

// class Contohstatic {
//     public static $angka = 0;

//     public static function helo() {
//         return "helo" . self::$angka++ . "kali";
//     }
// }

// echo Contohstatic::$angka;
// echo "<br>";
// echo Contohstatic::helo();
// echo "<br>";
// echo Contohstatic::helo();


class contoh {
    public static $angka = 1;

    public static function helo() {
        return "helo" .self::$angka++ . "kali";
    }
}

$angka = new contoh();
echo $angka->helo();
echo "<br>";
echo $angka->helo();
echo "<br>";
echo $angka->helo();

?>