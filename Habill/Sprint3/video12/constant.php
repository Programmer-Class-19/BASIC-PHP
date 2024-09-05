<?php
/*

CONSTANT :
- nilai yang kita simpan tidak dapat berubah ketika sudah 
sudah set di program kita
*/
/*
perbedaan define & const :
- define gabisa di simpen di dalam kelas (constan global)

- const bisa di masukkan didalam kelas 
*/


define('NAMA', 'kobil Bryant');
echo NAMA;

echo "<br>";

const UMUR = 19;
echo UMUR;


class coba {
    const NAMA = 'kobil';
}

echo coba::NAMA;
echo "<br>";


// MAGIC CONSTANT (otomatis ada isinya dan isinya tidak bsa diubah)
// - __LINE__ //menampilkan baris ke berapa
// - __FILE__ //menampilkan alamat filenya
// - __DIR__ //mengetahui direktori yang bersangkutan
// - __FUNCTION__ //menentukan kita di function apa
// - __CLASS__ //menentukan kita di class apa

// - __TRAIT__  adalah constant khusus yang mengembalikan 
// nama trait yang saat ini sedang digunakan. Trait sendiri adalah fitur di PHP 
// yang memungkinkan penggabungan metode dan properti ke dalam kelas, tanpa perlu 
// menggunakan pewarisan kelas secara langsung.
// Kegunaan:
// Debugging: Membantu dalam melacak kode dan melakukan debugging dengan memberikan 
// informasi tentang trait yang sedang digunakan.
// Logging: Berguna untuk mencatat aktivitas atau men-debug kode yang menggunakan 
// trait, dengan mengidentifikasi trait mana yang terlibat.
// Dinamika: Memungkinkan pembuatan kode yang lebih dinamis dan fleksibel berdasarkan 
// trait yang aktif.

// - __METHOD__ Mengembalikan nama lengkap metode yang sedang dieksekusi, termasuk 
// namespace (jika ada), kelas, atau trait di mana metode itu didefinisikan.
// Debugging: __METHOD__ membantu Anda mengetahui metode mana yang sedang dipanggil, 
// yang berguna ketika Anda meng-debug aplikasi yang kompleks.
// Logging: Ketika mencatat aktivitas, __METHOD__ dapat memberikan informasi tentang 
// metode yang sedang dieksekusi.
// Generasi Pesan Dinamis: Jika Anda membuat log atau pesan yang dinamis berdasarkan 
// metode yang dipanggil, __METHOD__ memungkinkan Anda untuk menyertakan nama metode secara otomatis.

// - __NAMESPACE__


echo __LINE__; 
echo "<br>";
echo __FILE__; 
echo "<br>";
echo __DIR__; 
echo "<br>";


function coba() {
    return __FUNCTION__;
}

echo coba();
echo "<br>";


class nyoba {
    public $kelas = __CLASS__;
}

$obj = new nyoba;
echo $obj->kelas;
echo "<br>";



// class MyClass {
//     use MyTrait;
// }

// trait MyTrait {
//     public function myMethod() {
//         echo "Trait name: " . __TRAIT__;
//     }
// }

// $instance = new MyClass();
// echo $instance->myMethod(); // Output: Trait name: MyTrait
// echo "<br>";

// 1. penggunaan didalam kelas
// class MySchool {
//     public function myMethod() {
//         echo __METHOD__;
//     }
// }

// $instance = new MySchool();
// echo $instance->myMethod(); // Output: MyClass::myMethod
// echo "<br>";

// 2. penggunaan didalam trait 
// class MyClass {
//     use MyTrait;
// }
// trait MyTrait {
//     public function traitMethod() {
//         echo __METHOD__;
//     }
// }

// $instance = new MyClass();
// echo $instance->traitMethod(); // Output: MyTrait::traitMethod

// 3. penggunaan dengan namespace 
// namespace MyNamespace;

class MyClass {
    public function myMethod() {
        echo __METHOD__;
    }
}
$instance = new MyClass();
echo $instance->myMethod(); // Output: MyClass::myMethod

// belum tau gimana cara menggunakan __METHOD__ dengan namespace

?>