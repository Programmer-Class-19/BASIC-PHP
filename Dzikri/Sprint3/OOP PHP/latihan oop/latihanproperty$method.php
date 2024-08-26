<?php

class Game {
    public $judul = "judul",
           $penulis = "penulis",
           $penerbit = "penerbit",
           $harga = 0;

           public function getLabel() {
            return "$this->penulis, $this->penerbit";
        
        }
}



$game1 = new Game ("Mobile legend", "Moonton", "Moonton", 150000 );
$game2 = new Game ("Naruto Shippuden Strom", "Masashi kishimoto", "Bandai Namco", 5000000);


echo "Game : " . $game1->getLabel();
echo"<br>";
echo "Game: " . $game2->getLabel();

// var_dump($game1);
// echo"<br>";
// var_dump($game2);