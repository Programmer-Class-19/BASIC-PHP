<?php 
class Barang {
    public  $merk,
            $warna,
            $buatan,
            $harga;

    public function __construct($merk, $warna, $buatan, $harga) {
        $this->merk = $merk;
        $this->warna = $warna;
        $this->buatan = $buatan;
        $this->harga = $harga;
    } 

    public function cekinfo ( ) {
        return "$this->merk $this->warna $this->buatan";
    }
}

class buahan extends Barang {
    public $rasa;
    public function __construct ($merk, $warna, $buatan, $harga, $rasa) {
        parent::__construct($merk, $warna, $buatan, $harga);    
        $this->rasa = $rasa;
    }
    public function buahan() {
        $str = "Buah : {$this->cekinfo()} Rp. {$this->harga} + {$this->rasa}";
        return $str;
    }
}
class mobil extends Barang {
    public $jarak;
    public function __construct ($merk, $warna, $buatan, $harga, $jarak) {
        parent::__construct($merk, $warna, $buatan, $harga);    
        $this->jarak = $jarak;
    }
    public function mobil() {
        $str = "Mobil : {$this->cekinfo()} Rp. {$this->harga} - {$this->jarak}";
        return $str;
    }
}

class cekinfoproduk {
    public $daftarproduk = [];
    public function tambahproduk(Barang $hemat) {
        $this->daftarproduk [] = $hemat
    }

    $str = "DAFTAR PRODUK <br>";
    foreach ($this->daftarproduk as  $dp)
}

$buah = new buahan('sunform', 'merah', 'indonesia', 100000, 'yummy');
$mobil = new mobil('Toyota', 'biru', 'china', 200000000, 100);

echo $buah->buahan();  
echo '<hr>';
echo $mobil->mobil();
echo '<hr>';

$mobillengkap = new cekinfoproduk();    
echo $mobillengkap->cetak($mobil);
?>