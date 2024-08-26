<?php
/*
definisi property :
- ssesuatu yang merepresentasikan data / keadaan dari sebuah object
- atau variable yang ada didalam object (member variable)

cara memakai property :
- sama seperti variable didalam php, tapi  dideapannya ditambaj
dengan VISIBILTY dengan keyword ada 3 (public, private, protected)


definisi method :
- merepresentasikan perilaku dari sebuah object
- adalah function yang ada didalam object

cara memakai method :
- sama seperti variable didalam php, tapi  dideapannya ditambaj
dengan VISIBILTY (akses modifier) dengan keyword ada 3 (public, private, protected)

ILUSTRASI PROPERTY & METHOD
MOBIL 
property (data) : cara mengetahui mobil itu apa
- nama
- merk
- warna
- kecepatanMaksimal
- jumlahPenumpang

method (perilaku) : yang mengetahui mobil ini bisa di buat apa aja
- tambahKecepatan
- kurangiKecepatan
- gantiTranmisi
- belokKiri
- belokKanan
*/

// contoh  
class mobil {
    public $nama;
    public $merk;
    public $wanra;
    public $kecepatanMaksimal;
    public $jumlahPenumpang;

    public function tambahKecepatan() {

    }

    public function kurangiKecepatan() {

    }

    public function gantiTranmisi() {

    }
}



?>