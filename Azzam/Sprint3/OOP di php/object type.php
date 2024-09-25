<?php
 
 class Barang {
    public $nama,
           $penerbit,
           $harga;

    public function __construct( $nama = "nama", $penerbit = "penerbit", $harga = "harga" ) {
        $this->nama = $nama;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function label() {
        return "$this->nama | $this->penerbit Rp. $this->harga";
    }

 }

 class cetakprodukbaru {
    public function cetak( Barang  $barang ) {
        $str = "{$barang->label()}";
        return $str;
    }
    }
 
 $Barang1 = new Barang("Spiderman", "Sony Interactive", "550.000");
 $Barang2 = new Barang("Batman", "Warner Bros", "700.000");
 $Barang3 = new Barang("GTA V", "Rockstar", "500.000");
 $Barang4 = new Barang("Uncharted", "Sony Computer", "200.000");

 echo "Game : " . $Barang1->label();
 echo "<br>";
 echo "Game : " . $Barang2->label();
 echo "<br>";
 echo "Game : " . $Barang3->label();
 echo "<br>";
 echo "Game : " . $Barang4->label();
 echo "<br>";

 echo "<br>";
 $infoBarang1 = new cetakprodukbaru();
 echo $infoBarang1->cetak($Barang1);
 echo "<br>";
 $infoBarang2 = new cetakprodukbaru();
 echo $infoBarang2->cetak($Barang2);
 echo "<br>";
 $infoBarang3 = new cetakprodukbaru();
 echo $infoBarang3->cetak($Barang3);
 echo "<br>";
 $infoBarang4 = new cetakprodukbaru();
 echo $infoBarang4->cetak($Barang4);

?>