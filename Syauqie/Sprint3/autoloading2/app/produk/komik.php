<?php 
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