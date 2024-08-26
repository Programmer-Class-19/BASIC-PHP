<?php
class Manusia{
        public $nama = "Nama",
               $usia = "Usia";

        public function getLabel(){
            return "$this->nama, $this->usia";
}
}
$urut1 = new Manusia();
$urut1->nama = "Zain";
$urut1->usia = 20;

$urut2 = new Manusia();
$urut2->nama = "Ilham";
$urut2->usia = "21";

$urut3 = new Manusia();
$urut3->nama = "Andi";
$urut3->usia = "20";
var_dump($urut1);
echo "<hr>";

echo "Polisi : " . $urut1->getLabel();
echo "<br>";
echo "Guru : " . $urut2->getLabel();
echo "<br>";
echo "Pilot : " . $urut3->getLabel();
echo "<br>";
// public function __construct($nama="nama", $usia="usia"){
//     return "$this->nama=$nama";
//             $this->usia=$usia;
// }
// public function getLabel(){
//     return "$this->nama, $this->usia";
// }
// }

// $form1 = new Manusia("Khodhir",23);
// $form2 = new Manusia ("Ahmad", 24);


// var_dump($form1);
// echo "<hr>";
// echo "<h1>Perkenalan</h1> <br>";
// echo "Khodhir : "Perkenalkan, nama saya" . $this->getLabel() . " dan usia saya ". $usia . "." ";
// echo "<br>";
// echo "Ahmad : " . $form2->getLabel();

