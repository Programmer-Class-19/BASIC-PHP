<?php 
class Produk{

    public  $judul = "judul",  //property dengan nilai default
            $penulis = "penulis", //property dengan nilai default
            $penerbit = "penerbit", //property dengan nilai default
            $harga =0; //property dengan nilai default


    public function salam() { //salam adalah method
        return "$this->judul, $this->penulis";
    }
    
}

$produk1 = new Produk();
$produk1->judul = "naruto";
$produk1->penulis = "asashi";
$produk1->penerbit = "gramedia";
$produk1->harga = "1000k";



$produk2 = new Produk();
$produk2->judul = "uncharted";
$produk2->penulis = "syauqie";
$produk2->penerbit = "gramedia";

//menampilkan menggunakan property
// echo "$produk2->judul";
//menampilkan menggunakan method
echo "komik : " . $produk1->salam(); //fungsi "." artinya digabung dengan
echo "<br>";
echo "game : " . $produk2->salam();  
?>
