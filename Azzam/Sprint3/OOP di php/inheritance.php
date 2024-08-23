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
           $waktumain,
           $tipe;

    public function __construct( $nama = "nama", $penerbit = "penerbit", $harga = "harga", $jumhal = 0, $waktumain = 0, $tipe = "tipe" ) {
        $this->nama = $nama;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jumhal = $jumhal;
        $this->waktumain = $waktumain;
        $this->tipe = $tipe;
    }
    
    public function label() {
        return "$this->nama | $this->penerbit";
    }

    public function infolengkap() {
        $str = "{$this->tipe} : {$this->label()} (Rp. {$this->harga})";
        if( $this->tipe == "Komik" ) {
        $str .= " - {$this->jumhal} Halaman.";
    } else if( $this->tipe == "Game") {
        $str .= " ~ {$this->waktumain} Jam.";
    }

    return $str;
}
}


 class Cetakprodukbaru {
    public function cetak(Barang $Barang) {
        $str = "{$Barang->label()} (Rp. {$Barang->harga})";
        return $str;
    }
 }
 
 $Barang1 = new Barang("Spiderman", "Sony Interactive", "550.000", 100, 0, "Komik" );
 $Barang2 = new Barang("Naruto", "Shonen Jump", "30.000", 150, 0, "Komik" );
 $Barang3 = new Barang("GTA V", "Rockstar", "500.000" ,0, 10, "Game" );
 $Barang4 = new Barang("Uncharted", "Sony Computer", "200.000", 0, 8, "Game" );
 $Barang5 = new Barang("One Piece", "Eiichiro Oda", "90.000", 200, 0, "Komik" );
 $Barang6 = new Barang("Batman", "DC", "200.000", 0, 15, "Game");
 $Barang7 = new Barang("Tsubasa", "Yoichi Takahashi", "28.000", 344, 0, "Komik" );
 $Barang8 = new Barang("Wukong", "Game Science", "700.000", 0, 15, "Game" );
 $Barang9 = new Barang("Ninja", "Williams Street", "93.000", 300, 0, "Komik" );
 $Barang10 = new Barang("Call of Duty", "Activision", "500.000", 0, 10, "Game" );

 echo $Barang1->infolengkap();
 echo "<br>";
 echo $Barang2->infolengkap();
 echo "<br>";
 echo $Barang3->infolengkap();
 echo "<br>";
 echo $Barang4->infolengkap();
 echo "<br>";
 echo $Barang5->infolengkap();
 echo "<br>";
 echo $Barang6->infolengkap();
 echo "<br>";
 echo $Barang7->infolengkap();
 echo "<br>";
 echo $Barang8->infolengkap();
 echo "<br>";
 echo $Barang9->infolengkap();
 echo "<br>";
 echo $Barang10->infolengkap();

 ?>