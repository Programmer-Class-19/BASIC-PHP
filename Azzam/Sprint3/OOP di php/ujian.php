<?php
// soal no 1
class Manusia {
    public $nama,
           $usia;

    public function __construct($nama, $usia) {
            $this->nama = $nama;
            $this->usia = $usia;
    }
    
    public function perkenalan() {
        echo "Halo, nama saya $this->nama dan saya berusia $this->usia tahun.";
    }
}

$Makhluk1 = new Manusia();

$Makhluk1->nama = "Supri";
$Makhluk1->usia = "20";

$Makhluk2 = new Manusia();

$Makhluk2->nama = "Agus";
$Makhluk2->usia = "21";

$Makhluk3 = new Manusia();

$Makhluk3->nama = "Asep";
$Makhluk3->usia = "23";

echo "Manusia1 : " . $Makhluk1->perkenalan();
echo "<br>";
echo "Manusia2 : " . $Makhluk2->perkenalan();
echo "<br>";
echo "Manusia3 : " . $Makhluk3->perkenalan();
echo "<br>";
echo "<hr>";

// soal no 2

class Hewan {
    public $jenis,
           $nama;

    public function suara() {
        if ($this->jenis == "Kucing") {
            echo $this->nama . "Suara : Meow";
        } elseif ($this->jenis == "Anjing") {
            echo $this->nama . "Suara : Guuk";
        } else {
            echo $this->nama . "selain yang diatas";
        }
        }
}

$kucing = new Hewan("Kucing", "Cat");
$Anjing = new Hewan("Anjing", "Dog");

echo "Kucing : " . $Kucing->suara();
echo "Anjing : " . $Anjing->suara();




// soal no 3

class Pesantren {
    public $Ustadz,
           $Santri;

    public function __construct( $Ustadz = "Ustadz A", $Santri = "Santri A" ) {
        $this->Ustadz = $Ustadz;
        $this->Santri = $Santri;

}

    public function setoran() {
        return "$this->Santri $this->Ustadz";
    }
}

$Santri1 = new Santri ("Santri A sedang setoran dengan Ustadz A");
$Santri2 = new Santri ("Santri A sedang setoran dengan Ustadz A");

echo $Santri1->setoran();
echo "<br>";
echo $Santri2->setoran();


// soal no 4


?>
