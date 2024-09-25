<!-- class merupakan template dari object -->
<!-- property dan method bisa di akses dalam konteks class menggunakan static keyword, static property dan static keyword. -->
<!-- static keyword = property dan method yang terikat dengan class, bukan dengan object -->
<!-- nilai static akan selalu tetap meskipun object di instansiasi berulang kali -->
<!-- dengan static membuat kode kita jadi prosedural karena bisa langsung memanggil property dan method lewat class nya tanpa instansiasi-->
<!-- biasnya digunakan untuk membuat fungsi bantuan atau helper -->
<!-- statis biasa digunakan di class utility pada framework -->


<?php
class Mobil {
    public static $angka = 1;

    public static function Nitrous() {
        return "Nitrous " . self::$angka++ . " kali.";
    }
}

echo Mobil::$angka;
echo "<hr>";
echo Mobil::Nitrous();
echo "<br>";
echo Mobil::Nitrous();
echo "<hr>";
echo Mobil::Nitrous();
echo "<br>";
echo Mobil::Nitrous();

?>

<br>
<hr>

<?php
class Motor {
    public static $angka = 1;

    public function Nitrous() {
       return "Nitrous " . self::$angka++ . " kali <br>";
    }
}

$obj1 = new Motor;
echo $obj1->Nitrous();
echo $obj1->Nitrous();
echo $obj1->Nitrous();
echo $obj1->Nitrous();

echo "<hr>";

$obj2 = new Motor;
echo $obj2->Nitrous();
echo $obj2->Nitrous();
echo $obj2->Nitrous();
echo $obj2->Nitrous();

echo "<hr>";

$obj3 = new Motor;
echo $obj3->Nitrous();
echo $obj3->Nitrous();
echo $obj3->Nitrous();
echo $obj3->Nitrous();

?>