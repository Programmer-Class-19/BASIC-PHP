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