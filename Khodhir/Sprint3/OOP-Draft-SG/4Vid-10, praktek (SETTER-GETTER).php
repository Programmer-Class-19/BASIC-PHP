 <!-- VISIBILITY
-->
<?php
    class Produk {
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
    public function getInfoProduk(){
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
        $str = "Komik : " . parent::getInfoProduk() . " - {$this->jmlHalaman} jam";
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
        $str = "Game : " . parent::getInfoProduk() . " - {$this->waktuMain} jam";
        return $str;
    }
}
class CetakInfoProduk { 
// class ini tugasnya hanya satu : mencetak seluruh informasi produk; gak peduli buku atau game. Kelas ini hanya punya 1 method. yaitu cetak

    public function cetak( $produk ) {
        $str = "{$produk->judul} | {$produk->getLabel()}, (Rp. {$produk->harga})";
    }
}
$produk1 = new Komik("Mujahadah", "Ahmad", "Anonim Team", 30000,100);
$produk2 = new Game("Life is life", "Man Ana", "Anonim Team", 250000,50);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";

$produk2->setDiskon(50);
echo $produk2->getHarga();
echo "<hr>";
$produk1->setPenulis("Ganti Nama Penulis");
echo $produk1->getPenulis();



