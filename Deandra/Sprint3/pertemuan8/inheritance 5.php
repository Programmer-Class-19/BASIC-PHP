<?php
class produk {
    public $judul,
           $penulis,
           $penerbit,
           $harga,
           $jmlhalaman,
           $waktumain,
           $tipe;

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlhalaman = 0, $waktumain = 0 ) {
       $this->judul = $judul;
       $this->penulis = $penulis;
       $this->penerbit = $penerbit;
       $this->harga = $harga;
       $this->jmlhalaman = $jmlhalaman;
       $this->waktumain = $waktumain;
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


class komik extends produk {
     public function getinfoproduk() {
        
         $str = "komik : {$this->judul} | {$this->getlabel()} (Rp. {$this->harga}) - {$this->jmlhalaman} halaman.";
         return $str;
     }
}

class game extends produk {
    public function getinfoproduk() {
        $str = "game : {$this->judul} | {$this->getlabel()} (Rp. {$this->harga}) ~ {$this->waktumain} jam";
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

$produk4 = new game("mobile legend", "mas'ud", "moonton", 2000000, 0, 30);

echo $produk3->getinfoproduk();
echo "<br>";
echo $produk4->getinfoproduk();




