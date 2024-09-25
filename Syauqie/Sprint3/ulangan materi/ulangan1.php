<?php 
    class produk {

        private $judul = "judul",
                $penulis = "penulis",
                $penerbit = "penerbit",
                $harga = 0,
                $diskon = 0;

                

        public function __construct($judul, $penulis, $penerbit, $harga) {
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
        }

        public function setjudul($judul) {
            if (!is_string($judul)) {
                throw new Exception("judul harus string");
            }
            $this->judul = $judul;
        }
        
        public function getjudul () {
            return $this->judul;
        }


        public function example() {
            return "$this->judul | $this->penulis | $this->penerbit Rp. $this->harga";
        }

        public function infolengkap() {

            $str = "{$this->example()}";
            return $str;
        }
        public function setharga($harga) {
            $this->harga = $harga;
        }
        public function getHarga () {
            return $this->harga - ( $this->harga * $this->diskon / 100 );
        }

        public function setDiskon($diskon) {
            $this->diskon = $diskon;
        }


    } 


    class komik extends produk {

        public $halaman;

        public function __construct ($judul, $penulis, $penerbit, $harga, $halaman) {
            parent::__construct($judul, $penulis, $penerbit, $harga);
            $this->halaman = $halaman;
        }
        public function infolengkap() {
            $str = "Komik : " . parent::infolengkap() . " {$this->halaman} "; //overriding menggunakan keyword static
            return $str;
        }
        
    }

    class game extends produk {
        public $waktu;

        public function __construct($judul, $penulis, $penerbit, $harga, $waktu) {
            parent::__construct($judul, $penulis, $penerbit, $harga);
            $this->waktu = $waktu;
        }

        public function infolengkap() {
        $str = "game : " . parent::infolengkap() . " {$this->waktu} ";
            return $str;
        }   
    }


    $produk1 = new komik("doraemon ", " reizuka ", " slaps ",  300000 , " - 100 halaman ");
    echo $produk1->infolengkap();   
    
    echo "<hr>";

    $produk2 = new game("free fire ", " rexy ", " garena ",  200000, " ~ 50 jam ");
    echo $produk2->infolengkap();

    echo "<hr>";

    $produk1->setDiskon(50);
    echo $produk1->getHarga();

    echo "<hr>";
    $produk1->setjudul("apakekkkk"); //setter
    echo $produk1->getjudul(); //getter
?>
