<?php
// Buat sebuah class Manusia dengan property nama dan usia. 
// Tambahkan method untuk perkenalan yang akan mencetak nama dan usia. 
// Buatlah tiga object dari class Manusia tersebut.

class Manusia {
    public $nama;
    public $usia;
    public $asal;

    public function __construct($nama, $usia, $asal) {
        $this->nama = $nama;
        $this->usia = $usia;
        $this->asal = $asal;
    }

    public function getData() {
        return "$this->nama, $this->usia, $this->asal";
    }
}

$data1 = new Manusia("Kuga Yuma", 17, "Kyoto");
$data2 = new Manusia("Mikumo", 17, "Fujiyama");

echo "Perkenalan : " . $data1->getData();
echo "<br>";
echo "Nama: " . $data2->getData();




// Buat sebuah class Hewan yang memiliki property jenis dan nama. 
// Buat method untuk suara yang akan mencetak suara hewan tersebut. 
// Tambahkan magic/spesial method untuk menginisialisasi jenis dan nama. 
// Buatlah dua object dengan nama kucing 
// dan anjing dari class tersebut.

echo "<hr>";

class Hewan {
    public $nama;
    public $jenis;

    public function __construct($nama, $jenis) {
        $this->nama = $nama;
        $this->jenis = $jenis;
    }

    public function getData() {
        return "$this->nama, $this->jenis";
    }
}


class cetakInfoHewan {
    public function cetak(hewan $hewan) {
        $str = "{$produk->getData()} ";
        return $str;
    }
}

$hewan1 = new Hewan( "kucing", "katy" );
$hewan2 = new Hewan( "Anjing", "brody" );



echo "<hr>";

// Buat sebuah class Pesantren dengan property Ustadz dan santri yang memiliki nilai default. 
// Buat constructor yang menerima property dan buat juga method untuk setoran yang mencetak "Santri A 
// sedang Setoran Dengan Ustadz A". Buat dua object dari class tersebut, satu dengan property default 
// dan satu lagi dengan property yang telah dimodifikasi.

class Pesantren {
    public $ustadz;
    public $santri;

    public function __construct($ustadz, $santri = "Usman") {
        $this->ustadz = $ustadz;
        $this->santri = $santri;
    }

    public function setoran() {
        return "Santri A sedang Setoran Dengan Ustadz A";
    }

    public function getSantri() {
        return $this->santri;
    }

    public function setSantri($santri) {
        $this->santri = $santri;
    }

    public function getData() {
        return "$this->ustadz, $this->santri";
    }
}

$pesantren1 = new Pesantren("Ustd.ahamd");

$pesantren2 = new Pesantren("Ustadz Ilham", "Husen");

echo "Pesantren 1 : ". $pesantren1->getData();
echo "<br>";
echo "Pesantren 2 : ". $pesantren2->getData();
echo "<hr>";



//Buat sebuah class Produk dengan property nama dan harga. 
//Buat method untuk diskon yang menerima parameter persentase
//diskon dan mengembalikan harga setelah diskon. Buat object 
//laptop dari class tersebut dengan harga Rp 10.000.000 dan 
//berikan diskon 10%. Cetak harga setelah diskon.

class Produk {
    public $nama;
    public $harga;

    public function __construct($nama, $harga) {
        $this->nama = $nama;
        $this->harga = $harga;
    }

    public function diskon($persentase) {
        return $this->harga - ($this->harga * $persentase / 100);
    }

    public function cetakHarga() {
        return "Harga : Rp ". number_format($this->diskon(10), 0, ',', '.');
    }


}

$laptop = new Produk("laptop", 10000000);

echo $laptop->cetakHarga();

echo "<hr>";
// Buat sebuah class Orang dan class Santri yang mewarisi dari Manusia. 
// Tambahkan method nyatri pada class Pelajar. 
// Buat object NamaSantri dari class Santri dan panggil method nyantri 
// serta method dari Orang.

class Manu{
    public $nama;
    public function __construct($nama){
        $this->nama = $nama;
    }
    public function nyatakan(){
        return "Halo, nama saya $this->nama";
    }
}

class Santri extends Manu{
    public function nyantri(){
        return "Halo, nama saya $this->nama, saya santri";
    }
    public function belajar(){
        return "Saya sedang belajar di pondok IT ";
    }
}

class Orang extends Manu{
    public function nyatakan(){
        return "Halo, nama saya $this->nama, saya orang";
    }
    public function belajar(){
        return "Saya sedang belajar";
    }

}

$namaSantri = new Santri("Hakimi");
echo $namaSantri->nyatakan();
echo "<br>";
echo $namaSantri->belajar();



