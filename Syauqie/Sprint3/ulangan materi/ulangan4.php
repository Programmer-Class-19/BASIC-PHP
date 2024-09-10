<?php 
    class syauqie {
        public static $coba = "banget";       

        public static function  tutor() {
            return "haiiii ganteng " . self::$coba;
        }
    }


    echo  syauqie::$coba;
    echo "<br>";
    echo syauqie::tutor();



?>
<hr>
<?php 

    define ("NAMA", 'syauqie billah'); //cara pertama diluar sebagai constanta global
    echo NAMA;
    echo "<br>"; 
    const UMUR = 22; //cara kedua saat menggunakan metode object oriented
    
    echo UMUR;

?>
<HR>
<?php 

class coba {
    const NAMA = "syauqie billah ";
}

echo coba::NAMA; // CARA MEMANGGIL
?>



<?php 

abstract class buah {
    private $warna; 

    abstract public function makan();

    public function setwarna($warna) {
        $this->warna = $warna;
    }
}

?>
