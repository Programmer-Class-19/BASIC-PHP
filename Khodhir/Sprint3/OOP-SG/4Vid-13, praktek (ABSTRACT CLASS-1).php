<?php
//KONSEP ABSTRACT CLASS:
/*
-Sebuah kelas yang tidak dapat di-instansiasi. (yang di instansiasi class turunannya)
-mendefinisikan interface untuk kelas lainy ang menjadi turunannya.
berperan sebagai kerangka dasar untuk kelas turunannya
memiliki min 1 method abstract.
-sangat berkaitan dengan inheriten
- untuk memaksakan implementasi method abstrak yg sama untuk semua kelas turunannya
// Keywordnya abstract sebelum kata class.
*/
//PRAKTEK ABSTRA2 EP. 14
    abstract class Produk {
        private $judul,
               $penulis,
               $penerbit;
        private $diskon =0; // karena ini mau dioeruntukan untuk class game aja.
               
        private $harga;

    public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0) {
                $this->judul = $judul;
                $this->penulis = $penulis;
                $this->penerbit = $penerbit;
                $this->harga = $harga;
    }

        // SETTER & GETTER

    public function setDiskon($diskon){
        $this->diskon = $diskon;
    }
    public function getDiskon(){
        return $this->diskon;
    }
    public function setJudul($judul){
        // if( !is_string($judul) ){
        //     throw new Exception("Judul harus berupa string");
        // }
        $this->judul = $judul;
    }

    public function getJudul(){
        return $this->judul;
    }
    public function setPenulis($penulis){
        $this->penulis = $penulis;
    }
    public function getPenulis(){
        return $this->penulis;
    }
    public function setPenerbit($penerbit){
        $this->penerbit = $penerbit;
    }
    public function getPenerbit(){
        return $this->penerbit;
    }
    public function setHarga($harga){
        $this->harga = $harga;
    }
    public function getHarga(){
        return $this->harga - ($this->harga * $this->diskon / 100);
    }


    public function getLabel(){
        return "$this->penulis, $this->penerbit";

    }
    abstract public function getInfoProduk();

    
    public function getInfo(){
    $str = "{$this->judul} | {$this->getLabel()} (Rp.{$this->harga})";
    return $str;
    }
}
class Komik extends Produk{
       public $jmlHalaman;

       public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $jmlHalaman = 0){
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlHalaman = $jmlHalaman;
       }
       public function getInfoProduk(){
        $str = "Komik : " . $this->getInfo() . " - {$this->jmlHalaman} jam";
        return $str;     
    }
}
Class Game extends Produk{
    public $waktuMain;
    public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $waktuMain = 0){
    parent::__construct($judul, $penulis, $penerbit, $harga);
    $this->waktuMain = $waktuMain;
    }

    public function getInfoProduk(){
        $str = "Game : " . $this->getInfo() . " - {$this->waktuMain} jam";
        return $str;
    }
}
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
$produk1 = new Komik("Mujahadah", "Ahmad", "Anonim Team", 30000,100);
$produk2 = new Game("Life is life", "Man Ana", "Anonim Team", 250000,50);
$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();


