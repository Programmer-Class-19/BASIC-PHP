<?php 

    abstract class barang {
        public  $nama,
                $warna,
                $rasa,
                $harga;

        public function __construct($nama, $warna, $rasa, $harga) {
            $this->nama = $nama;
            $this->warna = $warna;
            $this->rasa = $rasa;
            $this->harga = $harga;
        }

        abstract public function jenis ();
    }

    class kue extends barang {
        public $waktupembuatan;
        public function __construct($nama, $warna, $rasa, $harga, $waktupembuatan) {
            parent::__construct($nama, $warna, $rasa, $harga);
            $this->waktupembuatan = $waktupembuatan;
        }

        public function jenis () {
            $str = "KUE BASAH : {$this->nama} {$this->warna} {$this->rasa} {$this->harga} {$this->waktupembuatan} jam";
            return $str;
        }
    }

    $object1 = new kue ('TALAS', 'pelangi', 'enak', 100000, 10 );
    echo $object1->jenis();



?>