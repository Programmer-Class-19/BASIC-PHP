<?php

// define('NAMA', 'deandra putra');
// echo NAMA;

// echo "<br>";

// const UMUR = 19;
// echo UMUR;

// menggunakan const bisa di simpan di dalam class
// class coba {
//     const NAMA = 'deandra putra';
// }

// echo coba::NAMA;

// echo __file__;

// function coba() {
//     return __FUNCTION__;
// }

// echo coba();

class coba {
    public $kelas = __CLASS__;
}


$abc = new coba;
echo $abc->kelas;

 ?>