<?php 
class Produk{

    public  $judul,  
            $penulis, 
            $penerbit, 
            $harga; 

    public function __construct ($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) 
    { 
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    } 

    public function salam() { 
        return "$this->penulis, $this->penerbit";
    }


    public function getinfoproduk() { 
        $str = "{$this->judul} {$this->salam()} (Rp. {$this->harga})";

        return $str;
        }
    }

    class komik extends Produk {
        public $halaman;

        public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $halaman = 0) {

            parent::__construct($judul, $penulis, $penerbit, $harga); //overriding yaitu mengalih fungsikan method dengan nama yang sama dari parent clasnya

            $this->halaman = $halaman;
        }

        public function getinfoproduk () {
            $str = "Komik : " . parent::getinfoproduk() . " - {$this->halaman} halaman.";
            return $str;
        } 
    }
    
    class game extends Produk {

        public $waktu; 
            public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktu = 0){

            parent::__construct($judul, $penulis, $penerbit, $harga);
            $this->waktu = $waktu;
        }
        public function getinfoproduk () {
            $str = "Game : " . parent::getinfoproduk() ." ~ {$this->waktu} Jam.";
            return $str;
        } 
    }

    class CetakInfoProduk {
        public function cetak(Produk $produk) {
            $str = "{$produk->judul()} | {$produk->salam()} (Rp. {$produk->harga})";   
            return $str;
        }
    }
    


$produk1 = new komik("naruto", "asashih", "shonen jump", 100000, 100);
$produk2 = new game("uncharted", "syauqie", "sony computer", 1000000, 50);


echo $produk1->getinfoproduk();
echo "<br>";
echo $produk2->getinfoproduk();    
?>