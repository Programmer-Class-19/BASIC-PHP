<!--
<< beberapa aturan dasar untuk penulisan sintaks dalam OOP (Object-Oriented Programming) >> 
 -->

<!-- 
 1. Mendeklarasikan Kelas
    - Untuk membuat sebuah kelas, kita menggunakan kata kunci `class` diikuti dengan nama kelas.
    - Nama kelas biasanya dimulai dengan huruf besar. 
-->
<?php
// Contoh```php

    class Mobil {
        // Di sini akan ada sifat dan metode
    }
?>

                                <!-- ``` -->
<!-- 
2. Menambahkan Sifat (Attributes)
    - Sifat adalah data yang dimiliki oleh kelas. Kita mendeklarasikan sifat dengan menggunakan kata kunci `public`, `protected`, atau `private` diikuti dengan nama sifat.
    - `public` berarti bisa diakses dari luar kelas, `protected` berarti hanya bisa diakses oleh kelas itu sendiri dan kelas turunannya, sedangkan `private` hanya bisa diakses oleh kelas tersebut.
-->

<?php
//   **Contoh:** php

  class Mobil {
      public $warna; // Sifat yang bisa diakses dari luar
      private $kecepatan; // Sifat yang hanya bisa diakses dalam kelas ini
  }  
?>

                                <!-- ``` -->

<!--
3. Menambahkan Metode (Functions)
    - Metode adalah fungsi yang ada di dalam kelas. Kita juga menggunakan kata kunci akses seperti `public`, `protected`, atau `private` di sini.
    - Di dalam metode, kita bisa melakukan berbagai aksi, seperti mengubah sifat atau melakukan perhitungan. 3
-->
<?php
    // **Contoh:**
    // ```php

    class Mobil {
        public $warna;
    
        public function setWarna($warnaBaru) {
            $this->warna = $warnaBaru; // Mengubah sifat warna
        }
    
        public function tampilkanWarna() {
            return $this->warna; // Menampilkan warna
        }
    }
?>

                                <!-- ``` -->


<!--
4. Membuat Objek
    - Setelah mendeklarasikan kelas, kita bisa membuat objek dari kelas tersebut. Ini biasa dilakukan dengan menggunakan kata kunci `new`. 
-->
<?php
//    **Contoh:**
//    ```php
   $mobilSaya = new Mobil(); // Membuat objek dari kelas Mobil 
?>

                                <!-- ``` -->


<!--
5. Mengakses Sifat dan Metode
    - Kita bisa mengakses sifat dan metode objek yang telah dibuat menggunakan tanda panah `->`. 
-->
<?php
    // **Contoh:**
    // ```php

    $mobilSaya->setWarna("Merah"); // Mengatur warna objek mobilSaya
    echo $mobilSaya->tampilkanWarna(); // Menampilkan warna objek mobilSaya
?>

                                <!-- ``` -->

<!-- 
6. Pewarisan (Inheritance)
- Kita bisa membuat kelas baru yang mewarisi sifat dan metode dari kelas lain. Kelas baru tersebut disebut kelas anak (child class), dan kelas yang diwarisi disebut kelas induk (parent class). 
-->
<?php
    // **Contoh:**
    // ```php
    
    class MobilBalap extends Mobil {
        public $kecepatanMaksimum;
    
        public function setKecepatanMaksimum($kecepatan) {
            $this->kecepatanMaksimum = $kecepatan;
        }
    }
?>

                                <!-- Contoh Lengkap -->

<!-- 
Berikut adalah contoh lengkap yang menggabungkan semua aturan di atas: -->
<?php
    // Contoh Lengkap php

class Mobil {
    public $warna;

    public function setWarna($warnaBaru) {
        $this->warna = $warnaBaru;
    }

    public function tampilkanWarna() {
        return $this->warna;
    }
}

$mobilSaya = new Mobil();
$mobilSaya->setWarna("Biru");
echo $mobilSaya->tampilkanWarna(); // Output: Biru
?>

```

                        <!-- Kesimpulan -->
<!-- 
1. Gunakan kata kunci `class` untuk mendeklarasikan kelas.
2. Gunakan `public`, `protected`, atau `private` untuk mendefinisikan akses sifat dan metode.
3. Gunakan `new` untuk membuat objek dari kelas.
4. Gunakan `->` untuk mengakses sifat dan metode dari objek.

Ini adalah dasar-dasar penulisan sintaks dalam OOP di PHP. Jika ada yang ingin ditanyakan lebih lanjut atau kurang jelas, jangan ragu untuk bertanya! 
-->
 