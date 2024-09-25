 <?php
 
 class Barang {
    public $nama,
           $merk,
           $warna,
           $harga;

    public function __construct( $nama = "nama", $merk = "merk", $warna = "warna", $harga = "harga" ) {
        $this->nama = $nama;
        $this->merk = $merk;
        $this->warna = $warna;
        $this->harga = $harga;
    }

    public function label() {
        return "$this->nama, $this->merk, $this->warna, $this->harga";
    }

 }

 $Barang1 = new Barang("Supra", "Honda", "Putih", "10.000.000");
 $Barang2 = new Barang("GTR 35", "Nissan", "Biru", "3.000.000.000");
 $Barang3 = new Barang("JetBus", "Scania", "Merah", "2.000.000.000");
 $Barang4 = new Barang("Sepeda", "Shimano", "Hitam", "200.000");
 $Barang5 = new Barang("GT86", "Toyota", "Silver", "500.000.000");

 echo "Motor : " . $Barang1->label();
 echo "<br>";
 echo "Mobil : " . $Barang2->label();
 echo "<br>";
 echo "Bus : " . $Barang3->label();
 echo "<br>";
 echo "Sepeda : " . $Barang4->label();
 echo "<br>";
 echo "Mobil : " . $Barang5->label();
 ?>