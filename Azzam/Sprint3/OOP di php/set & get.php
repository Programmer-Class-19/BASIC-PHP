<!-- public = bisa dmn aja
protected = cma bisa di parent class nya beserta turunannya
private = hanya bisa di gunakan di kelas tertentu saja -->

<?php

class Barang {
    private $nama,
            $penerbit,
            $diskon = 0,
            $harga;


    public function __construct( $nama = "nama", $penerbit = "penerbit", $harga = "harga" ) {
        $this->nama = $nama;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
}
    public function setnama($nama) {
        $this->nama = $nama;
    }

    public function getnama() {
        return $this->nama;
    }

    public function setpenerbit($penerbit) {
        $this->penerbit = $penerbit;
    }

    public function getpenerbit() {
        return $this->penerbit;
    }

    public function setdiskon( $diskon ) {
        $this->diskon = $diskon;
    }

    public function setharga($harga) {
        $this->harga = $harga;
    }

    public function getdiskon() {
        return $this->diskon;
    }

    public function getharga() {
        return $this->harga - ($this->harga * $this->diskon / 100 );
}
    

    public function label() {
        return "$this->nama | $this->penerbit";
}

    public function infoproduk() {
        $str = "{$this->label()} (Rp. {$this->harga})";
        return $str;

}
}

class Komik extends Barang {

    public $jumhal;

    public function __construct( $nama = "nama", $penerbit = "penerbit", $harga = "harga", $jumhal = 0 ) {

    parent::__construct( $nama, $penerbit, $harga );

        $this->jumhal = $jumhal;
}

    public function infoKomik() {
        $str = "Komik : {$this->infoproduk()} {$this->jumhal} Halaman.";
        return $str;
}
}

class Game extends Barang {
    public $waktumain;

    public function __construct( $nama = "nama", $penerbit = "penerbit", $harga = "harga", $waktumain = 0 ) {

    parent::__construct( $nama, $penerbit, $harga );

        $this->waktumain = $waktumain;
}


    public function infoGame() {
        $str = "Game : {$this->infoproduk()} {$this->waktumain} Jam.";
        return $str;
}
}

class Cetakprodukbaru {
    public function cetak(Barang $Barang) {
        $str = "{$Barang->label()} (Rp. {$Barang->harga})";
        return $str;
}
}

$Barang1 = new Komik("Spiderman", "Sony Interactive", 550000, 100 );
$Barang2 = new Komik("Naruto", "Shonen Jump", 30000, 150 );
$Barang3 = new Game("Uncharted", "Sony Computer", 200000, 8 );
$Barang4 = new Komik("One Piece", "Eiichiro Oda", 90000, 200 );
$Barang5 = new Game("GTA V", "Rockstar", 500000, 10 );
$Barang6 = new Game("Batman", "DC", 200000, 15 );
$Barang7 = new Komik("Tsubasa", "Yoichi Takahashi", 28000, 344 );
$Barang8 = new Game("Wukong", "Game Science", 700000, 15 );
$Barang9 = new Komik("Ninja", "Williams Street", 93000, 300 );
$Barang10 = new Game("Call of Duty", "Activision", 500000, 10 );

echo $Barang1->infoKomik();
echo "<br>";
echo $Barang2->infoKomik();
echo "<br>";
echo $Barang3->infoGame();
echo "<br>";
echo $Barang4->infoKomik();
echo "<br>";
echo $Barang5->infoGame();
echo "<br>";
echo $Barang6->infoGame();
echo "<br>";
echo $Barang7->infoKomik();
echo "<br>";
echo $Barang8->infoGame();
echo "<br>";
echo $Barang9->infoKomik();
echo "<br>";
echo $Barang10->infoGame();
echo "<hr>";

$Barang3->setdiskon(50);
echo $Barang3->getharga();
echo "<br>";
$Barang1->setdiskon(50);
echo $Barang1->getharga();
echo "<br>";
echo $Barang2->setdiskon(90);
echo $Barang2->getharga();
echo "<br>";
echo $Barang4->setdiskon(60);
echo $Barang4->getharga();
echo "<br>";
echo $Barang5->setdiskon(40);
echo $Barang5->getharga();
echo "<hr>";

$Barang1->setnama("SASUKE");
echo $Barang1->getnama();
echo "<br>";
$Barang2->setpenerbit("Saya Sendiri");
echo $Barang2->getpenerbit();
echo "<br>";
echo $Barang3->getharga();
echo "<br>";
$Barang10->setnama("Ghost");
echo $Barang10->getnama();

?>