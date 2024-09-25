<!-- inheritance
Menciptakan hierarki antar kelas (parent $ child)
Child class mewarisi semua properti dan method dari parent nya yg visible
Child class memperluas extends fungsionalitas dari parent -->

<?php

class Barang {
    public $nama,
           $penerbit,
           $harga,
           $jumhal,
           $waktumain;
           

    public function __construct( $nama = "nama", $penerbit = "penerbit", $harga = "harga", $jumhal = 0, $waktumain = 0 ) {
        $this->nama = $nama;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jumhal = $jumhal;
        $this->waktumain = $waktumain;
       
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
    public function infoKomik() {
        $str = "Komik : {$this->infoproduk()} (Rp. {$this->harga}) - {$this->jumhal} Halaman.";
        return $str;
    }
 }

 class Game extends Barang {
    public function infoGame() {
        $str = "Game : {$this->infoproduk()} (Rp. {$this->harga}) ~ {$this->waktumain} Jam.";
        return $str;
    }
 }

 class Cetakprodukbaru {
    public function cetak(Barang $Barang) {
        $str = "{$Barang->label()} (Rp. {$Barang->harga})";
        return $str;
    }
 }
 
 $Barang1 = new Komik("Spiderman", "Sony Interactive", "550.000", 100, 0 );
 $Barang2 = new Komik("Naruto", "Shonen Jump", "30.000", 150, 0 );
 $Barang3 = new Game("Uncharted", "Sony Computer", "200.000", 0, 8 );
 $Barang4 = new Komik("One Piece", "Eiichiro Oda", "90.000", 200, 0 );
 $Barang5 = new Game("GTA V", "Rockstar", "500.000" ,0, 10 );
 $Barang6 = new Game("Batman", "DC", "200.000", 0, 15 );
 $Barang7 = new Komik("Tsubasa", "Yoichi Takahashi", "28.000", 344, 0 );
 $Barang8 = new Game("Wukong", "Game Science", "700.000", 0, 15 );
 $Barang9 = new Komik("Ninja", "Williams Street", "93.000", 300, 0 );
 $Barang10 = new Game("Call of Duty", "Activision", "500.000", 0, 10 );

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

 ?>