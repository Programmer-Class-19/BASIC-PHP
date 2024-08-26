<?php
class pesantren {
    public $ustadzA = "ustadzA",
           $santriA = "santriA",
           $ustadzB = "ustadzB";
           



     public function __construck( $ustadzA, $santriA, $ustadzB, $santriB) {
       $this->ustadzA = $ustadzA;
       $this->santriA = $santriA;
       $this->ustadzB = $ustadzB;
       $this->santriB = $santriB;
     }      

 public function getlabel() {
    return "$this->ustadzA, $this->santriA, $this->ustadzB" ;


}



} 


class cetakinfopesantren {
    public function cetak( pesantren $pesantren ){
        $str = "farid | iqmal hafizd, ustadz";
        
    }
}



$pesantren1 = new pesantren("farid", "iqmal hafizd");
$pesantren2 = new pesantren("ridho", "ahmad yusuf");
$pesantren3 = new pesantren("atha", "ifandi");
$pesantren4 = new pesantren("kelvin", "putra" );


echo "ustadzA : " . $pesantren1->getlabel();
echo "<br>";
echo "santriA : " . $pesantren2->getlabel();
echo "<br>";
echo "ustadzB : " . $pesantren3->getlabel();
echo "<br>";
var_dump($pesantren4);


?>