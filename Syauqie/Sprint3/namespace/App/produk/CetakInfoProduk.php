<?php 
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
?>