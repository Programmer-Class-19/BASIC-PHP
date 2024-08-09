<?php  

    // class Buku {

    //     public  $judul = "judul",
    //             $rasa = "rasa",
    //             $harga = "harga";

    //     public function __construct($judul, $rasa, $harga) {
    //         $this->judul = $judul;
    //         $this->rasa = $rasa;
    //         $this->harga = $harga;
    //     }
                
    //     public function salam() {
    //         return "ini adalah : $this->judul $this->rasa $harga->harga";
    //     }
    // }

    // $buku1 = new Buku("Naruto", "Anggur", "10k");
        
        

?>

<?php
// Contoh variabel sederhana
$integer = 42;
$string = "Hello, world!";
$float = 3.14;
$array = array("red", "green", "blue");
$associativeArray = array("name" => "John", "age" => 30);
$multiDimensionalArray = array(
    "fruits" => array("apple", "banana", "orange"),
    "vegetables" => array("carrot", "broccoli", "spinach")
);

// Contoh objek
class Person {
    public $name;
    public $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
}

$person = new Person("Alice", 25);

// Menggunakan var_dump() untuk menampilkan informasi variabel
echo "Integer: ";
var_dump($integer);
echo "<br>";

echo "String: ";
var_dump($string);
echo "<br>";

echo "Float: ";
var_dump($float);
echo "<br>";

echo "Array: ";
var_dump($array);
echo "<br>";

echo "Associative Array: ";
var_dump($associativeArray);
echo "<br>";

echo "Multi-dimensional Array: ";
var_dump($multiDimensionalArray);
echo "<br>";

echo "Object: ";
var_dump($person);
echo "<br>";
?>
