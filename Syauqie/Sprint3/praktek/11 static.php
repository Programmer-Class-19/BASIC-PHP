<?php 
    class contohstatic{
        public static $angka = 1;

        public static function halo() {
            return "halllooo " . self::$angka++ . " kalii. "; //untuk menggabungkan method dengan property menggunakan (self::)
        }
    }

    echo contohstatic::$angka; //cara menampilkan class static
    echo "<br>";
    echo contohstatic::halo();

    class contoh {
        public static $angka = 1;

        public function halo () {
            return "halllooo " . self::$angka++ . " ini kali <br>";
        }
    }

    // $obj1 = new contoh; //contoh menggunakan oop dasar output angka nya akan mereset mengikuti beberapa instansinya
    // echo $obj1->halo();
    // echo $obj1->halo();
    // echo $obj1->halo();
    
    // echo "<hr>";

    // $obj2 = new contoh; //contoh menggunakan oop dasar output angka nya akan mereset meskipun melakukan beberapa instansi
    // echo $obj2->halo();
    // echo $obj2->halo();
    // echo $obj2->halo();

    $obj1 = new contoh; //contoh menggunakan oop static output angka nya akan berlanjut meskipun melakukan beberapa instansi
    echo $obj1->halo();
    echo $obj1->halo();
    echo $obj1->halo();
    
    echo "<hr>";

    $obj2 = new contoh; //contoh menggunakan oop static output angka nya akan berlanjut meskipun melakukan beberapa instansi
    echo $obj2->halo();
    echo $obj2->halo();
    echo $obj2->halo();

    














?>