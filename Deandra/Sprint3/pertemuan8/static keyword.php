<?php

// class contohstatic {
//     public static $angka = 10;

//     public static function halo() {
//         return "halo " . self::$angka++ . " kali.";
//     }
// }

// echo contohstatic::$angka;
// echo "<br>";
// echo contohstatic::halo();
// echo "<hr>";
// echo contohstatic::halo();


class contoh {
    public static $angka = 20;

    public function halo() {
        return "halo " . self::$angka++ . " kali. <br>";
    }
}

$abc = new contoh;
echo $abc->halo();
echo $abc->halo();
echo $abc->halo();

echo "<hr>";

$abc2 = new contoh;
echo $abc2->halo();
echo $abc2->halo();
echo $abc2->halo();

?>