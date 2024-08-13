 <?php
 
 class Barang {
    public $nama,
           $merk,
           $harga;

    public function __construct( $nama = "nama", $merk = "merk", $harga = "harga" ) {
        $this->nama = $nama;
        $this->merk = $merk;
        $this->harga = $harga;
    }

    public function label() {
        return "$this->nama, $this->merk, $this->harga";
    }

 }

 $Barang1 = new Barang("Supra", "Honda", "10.000.000");
 $Barang2 = new Barang("GTR 35", "Nissan", "3.000.000.000");
 $Barang3 = new Barang("JetBus", "Scania", "2.000.000.000");
 $Barang4 = new Barang("Sepeda", "Shimano", "200.000");

 echo "Motor : " . $Barang1->label();
 echo "<br>";
 echo "Mobil : " . $Barang2->label();
 echo "<br>";
 echo "Bus : " . $Barang3->label();
 echo "<br>";
 echo "Sepeda : " . $Barang4->label();
 ?>