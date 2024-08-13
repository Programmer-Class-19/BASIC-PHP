<?php
//   echo date("l, d-M-Y"); 

// time
// unix timestamp / epoch time
// detik yang sudah berlalu sejak 1 januari 1970
// echo time();
// echo date("l", time()+60*60*24*100);

// mktime
// membuat sendiri detik
// mktime(0,0,0,0,0,0,)
// jam, menit, detik, bulan, tanggal, tahun
// echo date("l",mktime(0,0,0,8,5,1985));

// strtotime
echo date("l", strtotime( "13, aug, 2024" ));




?>