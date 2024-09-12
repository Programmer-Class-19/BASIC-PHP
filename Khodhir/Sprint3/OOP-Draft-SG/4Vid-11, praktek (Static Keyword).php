<?php
// class ContohStatic{
//     public static $angka =1;
//     public static function halo(){
//         return "Halo!! ". self::$angka." kali";
//     }
// }
// echo ContohStatic::$angka++."<br>";
// echo ContohStatic::halo();
// echo "<br>";
class Contoh{
    public static $angka = 1;

public function halo(){
    return "Halo! ".self::$angka++." kali<br>";
}
}

// Member yang terkait dengan class, bukan dengan object
$obj = new Contoh;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();

echo "<hr>";

$obj2 = new Contoh;
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();
//Nilai static akan selalu tetap meskipun object di-instansiasi berulang kali.

//dengan kode static membuat kode seolah-olah menjadi procedural. Karena manggilnya langsug dari classnya tanpa instansiasi.
// Untuk membuat halper. dan biasa digunakan di clas2 utility pada framwork.
