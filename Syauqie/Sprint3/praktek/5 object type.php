<?php 
class Produk{

    public  $judul = "judul",  //property dengan nilai default
            $penulis = "penulis", //property dengan nilai default
            $penerbit = "penerbit", //property dengan nilai default
            $harga =0; //property dengan nilai default


    public function __construct($judul, $penulis, $penerbit, $harga) { //__construct ini merupakan magic method yang dimiliki php
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    } 

    public function salam() { //salam adalah method
        return " $this->judul, $this->penulis";
    }
    
}

class CetakInfoProduk {
    public function cetak(Produk $mobil) { //mobil ini sebagai parameter
        $str = "{$mobil->salam()} | {$mobil->penerbit} (Rp. {$mobil->harga})";   
        return $str;
    }
}




$produk1 = new Produk("naruto", "asashih", "gramedia", "1000k");
$produk2 = new Produk("uncharted", "syauqie", "gramedia", "100000");

//menampilkan menggunakan property
// echo "$produk2->judul";
//menampilkan menggunakan method
echo "komik : " . $produk1->salam(); //fungsi "." artinya digabung dengan
echo "<br>";
echo "game : " . $produk2->salam();  
echo "<br>";    

$infoProduk2 = new CetakInfoProduk();
echo $infoProduk2->cetak($produk2);

?>


