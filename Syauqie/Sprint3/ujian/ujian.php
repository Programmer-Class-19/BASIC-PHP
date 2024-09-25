<?php 
                        //SOAL NO 1
echo "<h1> NOMOR 1</h1>";
    class Manusia {
        public  $nama,
                $usia;

        public function salam($nama, $usia) {
        return "Halloooo namaku $nama, umur ku $usia";
    }
} 
    $orang1 = new Manusia();
    $orang2 = new Manusia();
    $orang3 = new Manusia();
    echo $orang1->salam("jabal", 24);
    echo "<hr>";
    echo $orang2->salam("syauqie", 20);
    echo "<hr>";
    echo $orang3->salam("kholid", 19);
    echo "<hr>";
?>

<?php 
                        //SOAL NO 2

echo "<h1> NOMOR 2</h1>";
    class Hewan {
        public  $jenis,
                $suarakucing,
                $nama;

        public function __construct ($jenis, $nama) {
            $this->jenis = $jenis;
            $this->nama = $nama;
        }

        public function suara () {
            return "$this->jenis $this->nama";
        }
    }

    class anjing extends Hewan {
        public $suaraanjing;
        public function __construct($jenis, $nama, $suaraanjing) {
            parent::__construct ($jenis, $nama);
            $this->suaraanjing = $suaraanjing;
        }
        public function anjing () {
            $str = "ketahuilah ini adalah {$this->jenis} yang bernama {$this->nama} yang bersuara {$this->suaraanjing}";
            return $str;
        }
    }
    class kucing extends Hewan {
        public $suarakucing;
        public function __construct($jenis, $nama, $suarakucing) {
            parent::__construct ($jenis, $nama);
            $this->suarakucing = $suarakucing;
        }
        public function kucing () {
            $str = "ketahuilah ini adalah hwan yang berjenis {$this->jenis} yang bernama {$this->nama} yang bersuara {$this->suarakucing}";
            return $str;
        }
    }

    $anjing = new anjing ('anjing', 'melly', 'keras dan gaharrr');
    $kucing = new kucing ('kucing', 'redo', 'lucu dan imut');

    echo $anjing->anjing();
    echo "<hr>";
    echo $kucing->kucing();
?>

<?php 
                        //SOAL NO 3

echo "<h1> NOMOR 3</h1>";

    class Pesantren {
        public  $ustadz,
                $santri;

        public function __construct ($santri = "santri", $ustadz = "ustadz") {
            $this->santri = $santri;
            $this->ustadz = $ustadz;
        }

        public function setoran() {
            return "$this->santri sedang setoran dengan $this->ustadz";
        }
    }

    $default = new Pesantren();
    $modifikasi = new Pesantren('syauqie', 'ustadz hanan at-taqi');
    echo $default->setoran(); //default
    echo "<hr>";
    echo $modifikasi->setoran(); //modifikasi
?>

<?php 
echo "<h1> NOMOR 4</h1>";

    class Produk {
        public  $nama,
                $diskon = 10,
                $harga;

        public function __construct ($nama = 'laptop', $harga) {
            $this->nama = $nama;
            $this->harga = $harga;
        }
        

        public function setdiskon ($diskon) {
            $this->diskon = $diskon;
        }

        public function getharga() {
            return $this->harga - ($this->harga * $this->diskon / 100);
        }

        public function laptop() {
            $str = " Buruan cekott {$this->nama} ini dari harga Rp. 10.0000.000 cuma bayar Rp.      {$this->getharga()} aja!!";
            return $str;
        }
    }

    $laptop = new Produk('laptop thinkpad', 10000000);
    $laptop->setdiskon(10);
    echo $laptop->laptop();
?>

<?php 
echo "<h1> NOMOR 5</h1>";


    class orang extends Manusia {
        public function nyantri() {
            $str = "aku bernama {$this->nama} aku mengikuti program {$this->program}";
            return $str;
        }
    }

    class santri extends Manusia {
        public  $nama,
                $program;

        public function __construct($nama, $program) {
            $this->nama = $nama;
            $this->program = $program;
        }
        public function nyantri() {
            $str = "aku bernama {$this->nama} aku mengikuti program {$this->program}";
            return $str;
        }
    }


    $NamaSantri = new santri('syauqie', 'santri'); 
    echo $NamaSantri->nyantri();

?>