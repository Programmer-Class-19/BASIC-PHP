<?php 

// class merupakan template dari object

// kita bisa mengakses property dan method dalam konteks class

// class contohStatic {
//     public static $angka = 1;

//     public static function halo() {
//         return "Halo." . self::$angka++ . " kali.";
//     }
// }


// echo contohStatic::$angka;
// echo "<br>";
// echo contohStatic::halo();
// echo "<hr>";
// echo contohStatic::halo();

/*
untuk apa static keywoard?

- member (property & method) yang terikat dengan class, bukan 
dengan object. 
- niali static akan selalu tetap meskipun object di intansiasi
berulang kali 
- pakai static membuat kode kita menjadi 'procedural'
- biasanya digunakan untuk membuat fungsi bantuan / helper
- digunakan juga di class" utility pada framework
*/


class contoh {
    public static $angka = 1;

    public function halo() {
        return " halo" . self::$angka++ . " kali <br>";
    }
}

$obj = new contoh;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();

echo "<hr>";

$obj1 = new contoh;
echo $obj1->halo();
echo $obj1->halo();
echo $obj1->halo();





?>