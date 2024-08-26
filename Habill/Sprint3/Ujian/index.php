<?php


// soal 1

class manusia {
    public 
    $nama = "nama",
    $usia = "usia";

    public function perkenalan() {
        return "nama saya {$this->nama} dan saya berusia {$this->usia} tahun";
    }
}

$manusia1 = new manusia();
$manusia1->nama = "badrul";
$manusia1->usia = 19;

$manusia2 = new manusia();
$manusia2->nama = "rauwr";
$manusia2->usia = 20;

$manusia3 = new manusia();
$manusia3->nama = "muslimin";
$manusia3->usia = 23;

echo $manusia1->perkenalan();
echo "<br>";
echo $manusia2->perkenalan();
echo "<br>";
echo $manusia3->perkenalan();
echo "<br>";

// soal 2 


// class Hewan {
//     public
//     $jenis = "jenis",
//     $nama = "nama";

//     public function suara() {
        
//     }
// }

// $kucing = new Hewan();
// $anjing = new Hewan();

// soal 3 


class Pesantren {
    public
    $ustadz = "badrul",
    $santri = "mulsimin";

    public function pengurus() {
        $this->ustadz = $ustadz;
        $this->santri = $santri;
    }

    public function setoran() {
        return "santri {$this->santri} sedang setoran dengan ustadz {$this->ustadz}.<br>";
    }
}

$Default = new Pesantren();
$Custom = new Pesantren();
$Custom->ustadz = "sopo";
$Custom->santri = "jarwo";

echo "<br>";
echo $Default->setoran();
echo $Custom->setoran();


// soal 4 

// class Produk {
//     private $nama;
//     private $harga;
// }

// soal 5 



?>