<?php

class Game {
    public $nama;
    public $penerbit;
    public $harga;

    public function __construct($nama = "nama", $penerbit = "penerbit", $harga = "harga"){
        $this->nama = $nama;
        $this->penerbit = $penerbit;
        $this->harga = $harga;


    }

    public function getInfoGame() {
        return "{$this->nama}  {$this->penerbit}  Rp.{$this->harga}";
    }

}

$game1 = new Game ("GTA V", "Rockstar", 55000);
$game2 = new Game ("COD:Ghost", "Adzri", 43000);

echo "Nama Game:" .  $game1->getInfoGame();
echo "<br>";
echo "Nama Game:" .  $game2->getInfoGame();