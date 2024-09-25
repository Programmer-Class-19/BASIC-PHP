            <!-- CONTOH SEDERHAAN PROCEDURAL PROGRAMMING -->
<?php  
// Fungsi untuk menjumlahkan dua angka  
function tambah($a, $b) {  
    return $a + $b; // Mengembalikan hasil penjumlahan  
}  

// Memanggil fungsi dan menyimpan hasilnya dalam variabel  
$hasil = tambah(5, 3);  

// Menampilkan hasil  
echo "Hasil penjumlahan: " . $hasil; // Output: Hasil penjumlahan: 8  
?>
<!-- CARA MEMBACA SINTAKSNYA : 
>> [[ function tambah" ($a, $b) {...} ]]
    => Ini adalah fungsi yang bernama tambah, yang menerima dua parameter (a & b).

>> [[ return $a + $b; ]]
    => Fungsi ini mengembalikan hasil dari penjumlahan dua angka.

>> [[ $hasil = tambah(5, 3); ]]
    => Di sini, kita memanggil fungsi tambah dengan argumen 5 dan 3, dan hasilnya disimpan di variabel $hasil.

>> [[ echo "Hasil penjumlahan: " . $hasil; ]]
    => Terakhir, kita menampilkan hasil penjumlahan. 
-->
<br><hr>
            <!-- CONTOH SEDERHAAN OOP -->
            <?php  
// Mendefinisikan kelas Mobil  
class Mobil {  
    public $warna; // Sifat untuk menyimpan warna mobil  
    public $merk; // Sifat untuk menyimpan merk mobil  

    // Metode untuk menunjukkan mobil berjalan  
    public function berjalan() {  
        return "Mobil $this->merk berwarna $this->warna sedang berjalan."; // Menggunakan sifat  
    }  
}  

// Membuat objek dari kelas Mobil  
$mobilSaya = new Mobil();  
$mobilSaya->warna = "Merah"; // Mengatur warna mobil  
$mobilSaya->merk = "Toyota"; // Mengatur merk mobil  

// Menggunakan metode untuk menampilkan status mobil  
echo $mobilSaya->berjalan(); // Output: Mobil Toyota berwarna Merah sedang berjalan.  
?>

<!-- PENJELASAN KODE


>> [[ class Mobil {...} ]]
    => Ini adalah definisi kelas bernama Mobil, yang merupakan template untuk membuat objek mobil.

>> [[ public $warna; dan public $merk; ]]
    => Ini adalah sifat (attribute) dari kelas Mobil yang akan menyimpan informasi tentang mobil seperti warna dan merk.

>> [[ public function berjalan() {...} ]]
    => Ini adalah metode yang dapat dipanggil untuk melakukan tindakan tertentu; dalam hal ini, untuk menunjukkan bahwa mobil sedang berjalan.

>> [[ $mobilSaya = new Mobil(); ]]
    => Di sini, kita membuat objek baru bernama $mobilSaya dari kelas Mobil.

>> [[ $mobilSaya->warna = "Merah"; ]] dan [[ $mobilSaya->merk = "Toyota"; ]] 
    => Kita mengisi sifat objek dengan nilai tertentu.

>> [[ echo $mobilSaya->berjalan();]] 
=> Kita memanggil metode berjalan untuk menampilkan deskripsi mobil.

-->
<br><hr>
