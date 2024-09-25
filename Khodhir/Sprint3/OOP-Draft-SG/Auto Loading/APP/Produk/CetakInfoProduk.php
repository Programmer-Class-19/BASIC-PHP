<?php
class CetakInfoProduk { 
    // class ini tugasnya hanya satu : mencetak seluruh informasi produk; gak peduli buku atau game. Kelas ini hanya punya 1 method. yaitu cetak
        public $daftarProduk = [];
    
        public function tambahProduk( Produk $produk ){
            $this->daftarProduk[] = $produk;//nambahkan elemen baru dalam array
    
    
        }
        public function cetak() {
            $str = "DAFTAR PRODUK : <br>";
    
    
            foreach( $this->daftarProduk as $p){
                $str .= "- {$p->getInfoProduk()}<br>";
            }
            return $str;
        }
    }