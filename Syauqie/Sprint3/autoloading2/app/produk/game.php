<?php
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