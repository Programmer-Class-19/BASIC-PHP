<?php 

    class syauqie {
        public $makan = "nasi";

        public function salam ($datang, $nama) {
            return "$datang ini, $nama makan $this->makan";
        }

    }

    $syauqie1 = new syauqie;
    echo $syauqie1->salam("pagi", "syauqie");

?>