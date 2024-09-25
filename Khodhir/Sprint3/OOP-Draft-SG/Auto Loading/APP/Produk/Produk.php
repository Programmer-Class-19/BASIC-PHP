<?php
abstract class Produk {
    protected $judul,
           $penulis,
           $penerbit;
    private $diskon =0; // karena ini mau dioeruntukan untuk class game aja.
           
    private $harga;

public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0) {
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
}

    // SETTER & GETTER

public function setDiskon($diskon){
    $this->diskon = $diskon;
}
public function getDiskon(){
    return $this->diskon;
}
public function setJudul($judul){
    // if( !is_string($judul) ){
    //     throw new Exception("Judul harus berupa string");
    // }
    $this->judul = $judul;
}

public function getJudul(){
    return $this->judul;
}
public function setPenulis($penulis){
    $this->penulis = $penulis;
}
public function getPenulis(){
    return $this->penulis;
}
public function setPenerbit($penerbit){
    $this->penerbit = $penerbit;
}
public function getPenerbit(){
    return $this->penerbit;
}
public function setHarga($harga){
    $this->harga = $harga;
}
public function getHarga(){
    return $this->harga - ($this->harga * $this->diskon / 100);
}


public function getLabel(){
    return "$this->penulis, $this->penerbit";

}

public function getInfo(){
$str = "{$this->judul} | {$this->getLabel()} (Rp.{$this->harga})";
return $str;
}
}