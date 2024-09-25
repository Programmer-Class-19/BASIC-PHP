<?php  
class Mobil {
    public  $nama, $merk, $warna,
            $kecepatanMaksimal,
            $jumlahPenumpang;

    public function tambahKecepatan() {
        return "Kecepatan bertambah!";
    }
}
class MobilSport extends Mobil {
    public $turbo = false;

    public function jalankanTurbo() {
    $this->turbo = true;
    return "Turbo dijalankan!";
    }
}

$mobil1 = new MobilSport();

echo $mobil1->tambahKecepatan();
echo "<br>";
echo $mobil1->jalankanTurbo();
?>

<br>
<br>
<br>

<?php 
class Produk{

    public  $judul,  //property dengan nilai default
            $penulis, //property dengan nilai default
            $penerbit, //property dengan nilai default
            $harga, //property dengan nilai default
            $halaman,
            $waktu,
            $tipe; 

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "harga", $waktu = 0, $halaman = 0) { //__construct ini merupakan magic method yang dimiliki php
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->halaman = $halaman;
        $this->waktu = $waktu;

    } 
    public function salam() { //salam adalah method
        return "$this->penulis, $this->penerbit";
    }


    public function getinfoproduk() { //kalau sudah dipakai oleh child calss kita boleh menghapunya
        $str = "{$this->judul} {$this->salam()} (Rp. {$this->harga})";

        return $str;
        }
    }

    class komik extends Produk {
        public function getinfoproduk () {
            $str = "Komik : {$this->judul} | {$this->salam()} Rp. {$this->harga} - {$this->halaman} halaman.";
            return $str;
        } 
    }
    
    class game extends Produk {
        public function getinfoproduk () {
            $str = "Game : {$this->judul} {$this->salam()} Rp. {$this->harga} ~ {$this->waktu} Jam.";
            return $str;
        } 
    }

    class CetakInfoProduk {
        public function cetak(Produk $produk) { //produk ini sebagai parameter
            $str = "{$produk->judul()} | {$produk->salam()} (Rp. {$produk->harga})";   
            return $str;
        }
    }
    



$produk1 = new komik("naruto", "asashih", "shonen jump", 100000, 100);
$produk2 = new game("uncharted", "syauqie", "sony computer", 1000000, 10);

// komik : naruto | asashih gramedia 1000k - 100 hal
// game : uncharted | syauqie gramedia 100000 

echo $produk1->getinfoproduk();
echo "<br>";
echo $produk2->getinfoproduk();    
?>


