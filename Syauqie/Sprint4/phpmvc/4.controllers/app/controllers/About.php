<?php 
    class About {
        public function index($nama = 'user', $pekerjaan = 'gatau') {
            echo "Halo nama saya $nama, saya seorang $pekerjaan";
        }

        public function page() {
            echo 'About/page';
        }
    }
?>