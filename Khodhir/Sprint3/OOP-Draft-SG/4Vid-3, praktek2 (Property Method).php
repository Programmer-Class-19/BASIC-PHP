<!-- 754-- Merepresentasikan (memperlihatkan sesuatu) toko yang menjual produk. dan produknya ada 2 yaitu :
 1. komik
 2. game

 -->
<?php
    class Produk {
        public $judul = "Judul", //ini adalah cara mendevinisikan nilai property default (diisi di class nya langsung)
               $penulis = "Penulis",
               $penerbit = "Penerbit",
               $harga = "Harga";

    // // Method : function yang ada di dalam class.
    //     public function sayHello() {
    //         return "Hello World"; 
    //            }
    // Menampilkan label dengan function
    
    public function getLabel(){
        return "$this->penulis,$this->judul"; // dalam function bila ada variable maka itu variable baru dan tidak akan terhubung ke mana mana, akhirnya hanya akan membuat property baru di dalam class. cara memanggil variable yang ada dalam 

    }

    } 

    // $produk1 = new Produk(); // --> saya punya object namanya produk 1 yang merupakan intans dari class produk..instainsiasi dari object di dalam kelas
    // //cara ke 2 (menimpa nilai propertinya)
    // $produk1->judul = "Naruto";

    // var_dump($produk1);

    // //buat object ke 2
    // $produk2 = new Produk(); //dibikin dari instan Produk lagi.
    // var_dump($produk2->judul);
    // //agar judul produk 2 berbeda. maka tinggal timpa aja nilai propertynya.
    // $produk2->judul = "Muslim Sejati";
    // var_dump($produk2->judul);
    // // kita juga bisa menambah property yang belum ada di class.
    // // kalau ingin menimpa property maka namanya harus sama. soalnya kelau beda akan menambah property baru.
    // $produk2->pembeliBaru = "Ahmad";
    // var_dump($produk2)
    $produk3 = new Produk();
    $produk3->judul = "Mujahadah";
    $produk3->penulis = "Ahmad";
    $produk3->penerbit = "Anonim Team";
    $produk3->harga = 30000;

    // Bikin Label
    echo "Komik : $produk3->judul, $produk3->penulis, $produk3->penerbit";
    echo "<br>";
    echo $produk3->getLabel(); //untuk method selalu pakai "();" karena ini adalah mehod bukan property.
    echo "<hr>";

    $produk4 = new Produk();
    $produk4->judul = "Life is life";
    $produk4->penulis = "Man Ana";
    $produk4->penerbit = "Sony Computer";
    $produk4->harga = 20000;
    
    echo "Komik : " . $produk3->getLabel();
    echo "<br>";
    echo "Game : ". $produk4->getLabel();
// Berarti nanti akan tampil 2 object. komik dan game.

//  Video berikutnya untuk membuat dengan 1 instan bisa menambahin detail ...
?>                                               