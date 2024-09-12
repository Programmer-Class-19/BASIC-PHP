<?php

// class Coba{
//     const NAMA = 'Ahmad';
// }

// echo COBA::NAMA;

//Magic Constant

// echo __FILE__;

function coba(){
    return __FUNCTION__;
}
echo coba();












// perbedaanya : Kalau define tidak bisa simpan di dalam sebuah class, jd harus disimpan di luar sebagai constanta global.
//kalau const bisa