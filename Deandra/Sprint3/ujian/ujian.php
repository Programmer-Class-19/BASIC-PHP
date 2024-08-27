<?php
class manusia {
    public $nama,
           $usia;
    
    public function perkenalan() {
        return "$this->nama, $this->usia";
    }       
}

$manusia1 = new manusia ();

$manusia1->nama = "agus";
$manusia1->usia = "usia 20";

$manusia2 = new manusia ();

$manusia2->nama = "nopri";
$manusia2->usia = "usia 30";

$manusia3 = new manusia ();

$manusia3->nama = "setiawan";
$manusia3->usia = "usia 40";


echo "manusia1 : " . $manusia1->perkenalan();
echo "<br>";
echo "manusia2 : " . $manusia2->perkenalan();
echo "<br>";
echo "manusia3 : " . $manusia3->perkenalan();
echo "<hr>";

//soal no 2

class hewan {
    public $jenis;
    public $nama;

    public function __construct($jenis, $nama) {
        $this->jenis = $jenis;
        $this->nama = $nama;
    }

    public function suara() {
        echo "$this->nama adalah seekor $this->jenis yang bersuara.\n";
    }
}

$kucing = new hewan('kucing', 'momo');
$anjing = new hewan('anjing', 'buddy');

$kucing->suara();
$anjing->suara();

echo "<hr>";

// soal no 3

class santri {
    public $ustadz,
           $santri;
           

    public function __construct( $ustadz = "ustadz", $santri = "santri" ) {
       $this->ustadz = $ustadz;
       $this->santri = $santri;
      
      
    }      
           
    
    public function getlabel() {
        return "$this->santri $this->ustadz";
    }
}

$santri1 = new santri ("agus sedang setoran dengan ustadz rifki");
$santri2 = new santri ("nopri sedang setoran dengan ustadz ibrahim"); 

echo $santri1->getlabel();
echo "<br>";
echo $santri2->getlabel();


?>