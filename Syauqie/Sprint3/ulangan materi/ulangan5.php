<?php 

    class Produk {
        public  $judul,
                $penulis,
                $penerbit,
                $harga;


        public function __construct ($judul, $penulis, $penerbit, $harga) {
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
        }
        
        public function callproduk() {
            return "$this->judul | $this->penulis";
        }

    }

    class cekinfolengkap {
        public function tampilkan( produk $damn ) {
            $str = "{$damn->callproduk()} {$damn->penerbit} Rp. {$damn->harga}";
            return $str;
        }
    }

    class freefire extends Produk {
        public $jam;
        public function __construct($judul, $penulis, $penerbit, $harga, $jam) {
            parent::__construct($judul, $penulis, $penerbit, $harga);
            $this->jam = $jam;
        }
        public function callproduk() {
            $str = "Game : " . parent::callproduk() . "{$this->penerbit} Rp. {$this->harga}  {$this->jam} jam";
            return $str;
        }
    }

$produk1 = new freefire("Free fire ",'antony steph ', 'garena ', 100000, 10);
echo $produk1->callproduk();

echo '<hr>';

$produk2 = new Produk('Mobile Legend ','justin morph ','moonton ', 210000);
echo $produk2->callproduk();

echo '<hr>';

// $produkinfo = new cekinfolengkap();
// echo $produkinfo->tampilkan($produk1);









































?>