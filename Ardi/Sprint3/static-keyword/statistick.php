<?php

// class ContohStatic {
//     public static $angka = 4;

//     public static function Laila() {
//         return "Halo Laila." . self::$angka . " kali.";
//     }
// }

// echo ContohStatic::$angka;
// echo "<br>";
// echo ContohStatic::Laila();
// echo "<hr>";
// echo ContohStatic::Laila();


class Contoh {
    public static $angka = 1;

    public function halo() {
        return "Halo Karina." . self::$angka++ . " kali.";
    }
}

$obj = new Contoh;
echo $obj->halo();
echo "<br>";
echo $obj->halo();
echo "<br>";
echo $obj->halo();
echo "<br>";
echo $obj->halo();

echo "<hr>";

$obj = new Contoh;
echo $obj->halo();
echo "<br>";
echo $obj->halo();
echo "<br>";
echo $obj->halo();
echo "<br>";
echo $obj->halo();
?>