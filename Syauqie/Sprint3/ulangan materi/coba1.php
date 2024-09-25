<?php 
    class barang {
        public  $merk,
                $warna,
                $harga,
                $tujuan,
                $lembar;

        public function __construct($merk, $warna, $harga) {
            $this->merk = $merk;
            $this->warna = $warna;
            $this->harga = $harga;
        }

        public function cek() {
            return "$this->merk | Warna $this->warna";
        }
    }

    class bukutulis extends barang {
        public $lembar;
        public function __construct ($merk, $warna, $lembar, $harga) {
            parent::__construct($merk, $warna, $harga);
            $this->lembar = $lembar;
        }

        public function buku() {
            return "Buku Tulis: Merk " . parent::cek() . ", - {$this->lembar} Lembar, Rp. {$this->harga}";
        }
    }

    class mobil extends barang {
        public $tujuan;
        public function __construct ($merk, $warna, $tujuan, $harga) {
            parent::__construct($merk, $warna, $harga);
            $this->tujuan = $tujuan;
        }
        public function cek() {
            return "Mobil : Merk " . parent::cek() . ", Terminal : {$this->tujuan} Rp. {$this->harga}";
        }
    }


    class infolengkap {

        public function cetak (barang $jenis) {
            $str = "Merk :{$jenis->merk}, Warna : {$jenis->warna} Tujuan {$this->tujuan} Rp. {$jenis->harga}";
            return $str;
        }
    }

    $bukutulis = new bukutulis ('Joyko', 'merah', 10 , 3000);
    $mobil = new mobil ('Toyota', 'biru', 'Poris
    ', 10000000);


    echo $bukutulis->buku();
    echo '<hr>';
    echo $mobil->cek();

    

    // $lengkap = new infolengkap();
    // echo $lengkap->cetak($bukutulis);

?>