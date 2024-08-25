<?php
class produk {
    public $judul,
           $penulis,
           $penerbit,
           $harga,
           $tipe;

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0 ) {
       $this->judul = $judul;
       $this->penulis = $penulis;
       $this->penerbit = $penerbit;
       $this->harga = $harga;
    }      
           
    
    public function getlabel() {
        return "$this->penulis, $this->penerbit";
    }

    public function getinfoproduk() {
        // komik : upin & ipin | kak ros, lescopaque, (Rp. 10000000) - 100 halaman
        $str = "{$this->tipe} | {$this->getlabel()} (Rp. {$this->harga})";
       
        
        return $str;

    }
}

// memakai method parent
class komik extends produk {
    public $jmlhalaman;

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlhalaman = 0 ) {

        parent::__construct( $judul, $penulis, $penerbit, $harga );

        $this->jmlhalaman = $jmlhalaman;

    }

     public function getinfoproduk() {
         $str = "komik : " . parent::getinfoproduk() . " - {$this->jmlhalaman} halaman.";
         return $str;
     }
}

class game extends produk {

    public $waktumain;

    public function __construct(  $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktumain = 0 ) {

        parent::__construct( $judul, $penulis, $penerbit, $harga );

         $this->waktumain = $waktumain;
    }



    public function getinfoproduk() {
        $str = "game :" . parent::getinfoproduk() . " ~ {$this->waktumain} jam.";
        return $str;
    }
}


class cetakinfoproduk {
    public function cetak( produk $produk ) {
        $str = "{$produk->judul} | {$produk->getlabel()} (Rp . {$produk->harga})";
        return $str;
    }
}





$produk3 = new komik("upin & ipin", "kak ros", "lescopaque", 10000000, 100);
$produk4 = new game("mobile legend", "mas'ud", "moonton", 2000000, 30);


echo $produk3->getinfoproduk();
echo "<br>";
echo $produk4->getinfoproduk();




