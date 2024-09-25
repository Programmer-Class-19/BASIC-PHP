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
        return "$this->judul $this->penulis $this->penerbit $this->harga";
    }
    
}

$produk1 = new Produk("naruto", "asashih", "gramedia", "1000k");

$produk2 = new Produk("uncharted", "syauqie", "gramedia", "ori");

//menampilkan menggunakan property
// echo "$produk2->judul";
//menampilkan menggunakan method
echo "komik : " . $produk1->salam(); //fungsi "." artinya digabung dengan
echo "<br>";
echo "game : " . $produk2->salam();  
?>
<br>
<br>
<br>
<?php  
    class Buku {

        public  $judul = "judul",
                $rasa = "rasa",
                $harga = "harga";

        public function __construct($judul, $rasa, $harga) {
            $this->judul = $judul;
            $this->rasa = $rasa;
            $this->harga = $harga;
        }
                
        public function salam() {
            return "ini adalah : $this->judul $this->rasa $harga->harga";
        }
    }

    $buku1 = new Buku("Naruto", "Anggur", "10k");
        
        

?>
