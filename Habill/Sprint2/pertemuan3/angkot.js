// latihan 1
// var jmlAngkot = 10;
// var noAngkot = 1;

// while(noAngkot <= jmlAngkot) {
//     console.log('Angkot No. ' + noAngkot + ' beroperasi dengan baik');
//     noAngkot++;
// }


// latihan 2
var noAngkot = 1;
var jmlAngkot = 10;
var beropBaik = 6;
while(noAngkot <= beropBaik) {
    console.log('angkot no.' + noAngkot + ' beroperasi dengan baik')
    noAngkot++;
}

for( var noAngkot = beropBaik + 1; noAngkot <= jmlAngkot; noAngkot++ ) {
    console.log('angkot no.' + noAngkot + ' sedang tidak beroperasi')
}
