<?php
// date
// untuk tanggan dengan format tertentu

//  echo date("L, d-M-Y");
// time
// unix time / epoch time
// detik yang yang sudah berlalu sejak january 1970
//echo time();
//echo date("l", time()-60*60*24*100);

// mktime
// membuat sendiri detik
// mktime(0,0,0,0,0,0,)
// jam, menit, detik, bulan, tanggal, tahun
// echo date ("l", mktime(0,0,0,10,14,2005));


// strtotime
echo date("l", strtotime("14 oct 2005"));