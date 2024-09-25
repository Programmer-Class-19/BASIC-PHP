<?php 
    class produk {
        protected   $judul,
                    $penulis,
                    $penerbit,
                    $diskon,
                    $harga,
                    $jam,
                    $halaman;

        public function __construct($judul, $penulis, $penerbit, $harga) {
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
        }

        public function panggil () {
            return "$this->judul | $this->penulis";
        }

        public function nambah () {
            return "$this->penerbit $this->harga";
        }

        public function setdiskon ($diskon) {
            $this->diskon = $diskon;
        }

        public function getharga () {
            return $this->harga - ($this->harga * $this->diskon / 100);
        }

    }

    class novel extends produk {
        public $halaman;
        public function __construct ($judul, $penulis, $penerbit, $harga, $halaman) {
            parent::__construct($judul, $penulis, $penerbit,  $harga) ;
            $this->halaman = $halaman;
        }
        public function panggilnovel() {
            $str = "novel : ". parent::panggil() . "{$this->penerbit} Rp. {$this->harga} - {$this->halaman}  Halaman.";
            return $str;
        }
    }
    class game extends produk {
        public $jam;
        public function __construct ($judul, $penulis, $penerbit, $harga, $jam) {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jam = $jam;
    }
        public function infolengkap() {
            $str = "game : ". parent::panggil() . "{$this->penerbit} Rp. {$this->harga} ~ {$this->jam} Jam.";
            return $str;
        }
    }

    class getinfolengkap {
        public $lengkap = [];

        public function tambahproduk (produk $produk) {
            $this->lengkap[] = $produk;
        }

        public function cetak () {
            $str = "DAFTAR  PRODUK <BR>";
            
                foreach ($this->lengkap as $l) {
                    $str .= "{$l->infolengkap()} <br>";
                }
                return $str;
        }
    }


    $novel = new novel ('1001 malam ', 'Roman Picisan ', 'gramedia ', 50000 , 50);
    echo $novel->panggilnovel();

    echo '<hr>';

    $game = new game ('Free Fire ', 'Asashi Kisimoto ', 'Playstore', 100000 , 10);
    echo $game->infolengkap();

    echo '<hr>';

    // $apaja = new getinfolengkap();  
    // echo $apaja->info($novel);

    echo '<hr>';

    $game->setdiskon(20);
    echo $game->getharga();

    echo '<hr>';

    $cobain = new getinfolengkap ();
    $cobain->tambahproduk($novel);
    $cobain->tambahproduk($game);
    echo $cobain->cetak();

?>
<hr>

<?php 

define ('NAMA', 'SYAUQIE BILLAH'); //untuk constanta global

echo NAMA;

echo '<hr>';

const UMUR = 30; // dapat dijalankan di metode oop  
echo UMUR;

echo '<hr>';

class nama {
    const NAMA =  'syauqie billah';
}

echo nama::NAMA;
?>