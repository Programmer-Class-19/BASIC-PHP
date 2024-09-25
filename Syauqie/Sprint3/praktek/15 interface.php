<?php 

    interface infoProduk {
        public function getinfoproduk();
    }

    abstract class produk {

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

        
        abstract public function getinfo();

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


    class komik extends produk implements infoProduk {

        public $halaman;

        public function getinfo() {
            $str = "{$this->example()}";
            return $str;
        }

        public function __construct ($judul, $penulis, $penerbit, $harga, $halaman) {
            parent::__construct($judul, $penulis, $penerbit, $harga);
            $this->halaman = $halaman;
        }
        public function getinfoproduk() {
            $str = "Komik : " . $this->getinfo() . " {$this->halaman} "; //overriding menggunakan keyword static
            return $str;
        }
        
    }

    class game extends produk implements infoProduk {

        public $waktu;

        public function getinfo() {
            $str = "{$this->example()}";
            return $str;
        }

        public function __construct($judul, $penulis, $penerbit, $harga, $waktu) {
            parent::__construct($judul, $penulis, $penerbit, $harga);
            $this->waktu = $waktu;
        }
        

        public function getinfoproduk() {
        $str = "Game : " . $this->getinfo() . " {$this->waktu} ";
            return $str;
        }   
    }

    class CetakInfoProduk {
        public $daftarproduk = [];

        public function tambahproduk(produk $produk) {
            $this->daftarproduk[] = $produk;
        }

        public function cetak( ) {
            $str = "DAFTAR PRODUK : <br>";

            foreach ($this->daftarproduk as $dp) {
                $str .= "- {$dp->getinfoproduk()} <br>";  
            }
            return $str;
        }
    }


    $produk1 = new komik("doraemon ", " reizuka ", " slaps ",  300000 , " - 100 halaman ");  
    $produk2 = new game("free fire ", " rexy ", " garena ",  200000 , " ~ 50 jam ");

    $cetakproduk = new CetakinfoProduk();
    $cetakproduk->tambahproduk($produk1);
    $cetakproduk->tambahproduk($produk2);
    echo $cetakproduk->cetak();