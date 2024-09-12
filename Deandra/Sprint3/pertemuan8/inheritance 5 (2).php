<?php
class produk {
    public $judul,
           $penulis,
           $penerbit,
           $harga,
           $jmlhalaman,
           $waktumain,
           $tipe;

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlhalaman = 0, $waktumain = 0, $tipe ) {
       $this->judul = $judul;
       $this->penulis = $penulis;
       $this->penerbit = $penerbit;
       $this->harga = $harga;
       $this->jmlhalaman = $jmlhalaman;
       $this->waktumain = $waktumain;
       $this->tipe = $tipe;
    }      
           
    
    public function getlabel() {
        return "$this->penulis, $this->penerbit";
    }

    public function getinfolengkap() {
        // komik : upin & ipin | kak ros, lescopaque, (Rp. 10000000) - 100 halaman
        $str = "{$this->tipe} | {$this->getlabel()} (Rp. {$this->harga})";
        if( $this->tipe == "komik") {
            $str .=  "- {$this->jmlhalaman} halaman";
        }
        else if( $this->tipe == "game") {
            $str .= " ~ {$this->waktumain} jam.";
        } 
        
        return $str;
    }
}

class cetakinfoproduk {
    public function cetak( produk $produk ) {
        $str = "{$produk->judul} | {$produk->getlabel()} (Rp . {$produk->harga})";
        return $str;
    }
}





$produk3 = new produk("upin & ipin", "kak ros", "lescopaque", 10000000, 100, 0,  "komik");

$produk4 = new produk("mobile legend", "mas'ud", "moonton", 2000000, 0, 30, "game");

echo $produk3->getinfolengkap();
echo "<br>";
echo $produk4->getinfolengkap();

// komik : kak ros, lescopaque
// game : mas'ud, moonton
// upin & ipin | kak ros, lescopaque (Rp . 10000000)
// mobile legend | mas'ud, moonton (Rp . 2000000)

// komik : upin & ipin | kak ros, lescopaque, (Rp. 10000000) - 100 halaman
// game : mobile legend | mas'ud, moonton, (2000000) ~ 30 tahun



