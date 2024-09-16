<?php
class Buku_model 
{
    private $Book = [
    [
        "nama" => "Spider-Man",
        "penerbit" => "Sony Studio",
        "penulis" => "Peter Parker",
        "halaman" => "200"
    ],

    [
        "nama" => "Batman",
        "penerbit" => "DC",
        "penulis" => "Alex Fergusion",
        "halaman" => "250"
    ],

    [
        "nama" => "Naruto",
        "penerbit" => "Shonen Jump",
        "penulis" => "Yoru kaida",
        "halaman" => "280"
    ],

    [
        "nama" => "Si Juki",
        "penerbit" => "Juki Studio",
        "penulis" => "Juki Rahmat",
        "halaman" => "180"
    ]
        ];
    
    public function GetallBook() 
    {
        return $this->Book;
    }
}
?>