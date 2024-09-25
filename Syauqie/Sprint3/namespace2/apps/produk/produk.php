<?php 
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
?>