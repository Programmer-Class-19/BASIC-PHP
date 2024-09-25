<?php 
    class buah {
        private $warna;

        public function makan() {
            //kunyah
            //nyam..nyam..nyam
        }

        public function setwarna($warna) {
            $this->warna = $warna;
        }
    }

    class apel extends buah {
        
        public function makan() {
            //kunyah
            //sampai bagian tengah
        }
    }

    class jeruk extends buah {

        public function makan() {
            //kupas
            //kunyah
        }
    }

?>