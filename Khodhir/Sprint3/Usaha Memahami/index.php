<!-- SEKOLAH KODING -->
 <?php
 // Class
class robot{
//varible disini disebut dengan property
//di properti ini kita bisa langusung deklarasikan dengan mnggunakna kata kunci "public"

    public $suara = "ngik ngik";
    public $berat = 30;

//methode / fungctions
public function bersuara(){
echo 'suara robotnya ...' . $this->suara;
}

public function berat_robot(){
    return $this->berat;
}
}



// kalau kita hendak menggunakan si robot ini, kita menggunakannya di luar classnya sendiri atau boleh di lain halaman.
    $robot1 = new robot; // ini disebut sebagai object tp ini ditulis dalam variabel
    // var_dump($robot1);
    $robot1->bersuara();
    echo $robot1->berat_robot();
 ?>