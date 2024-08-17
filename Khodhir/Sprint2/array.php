<?php
/* array
 - adalah variable yang dapat memiliki banyak nilai
 - element yang ada pada array boleh dengan tipe data yang beda.
*/
// Di dalam php ada dua cara bikin array 
//cara lama:
$hari = array("Senin", "Selasa", "Rabu") ;
//cara baru:
$bulan = ["Januari", "Februari", "Maret"]; // echo diganti demgam [].
// cara memunculkannya dengan perintah : Var_dam(), dan print_r().


var_dump($hari); //nnti akan muncul array(3) { [0]=> string(5) "Senin" [1]=> string(6) "Selasa" [2]=> string(4) "Rabu" }
echo"<hr>"; 
print_r($bulan); //ini muculnya lbh ringkas = Array ( [0] => Januari [1] => Februari [2] => Maret )
//setiap elemen pasti punya index, dan itu dimulai dari 0

//Menampilkan array 1 emelen, dan ini baru boleh pakai echo.
echo "<hr>";

echo $bulan[1]; //akan muncul Februari - index elemen dimulai dari 0
$bulan []= "April";// untuk nambahi array ditenganh tengah
var_dump ($bulan); //variable gak perlu dikasih petik


?>