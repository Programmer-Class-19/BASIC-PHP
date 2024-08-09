// function
// "function adalah kunci utama dalam javascript,
// yang membuat javascript sangat powerfull"
// -douglas crockford

// didalam function juga mengandung
// -method
// -class 
// -constructor 
// -module

// definisi function
// -sebuah sub program /  sub routine yang dapat 'dipanggil'
// dibagian lain pada prgogram.
// -merupakan struktur dasar pembentuk dari java script
// -disebut  juda sebagai prosedur ( kumpulan statement untukj
//     melakukan tugas atau menghitung sebuah nilai)
// -untuk dapat menggunakannya, kita harus membuat terlebih 
// dahulu function tersebut, lalu memanggilnya


// kenapa function?
// -reusability/penggunaan kembali dari kode yang sudah kita buat (DRY : do not repeat yourself)
// -dekomposisi / abstraksi
// -modularitas

// kategori FUNCTION :
// built-in function {
//  fungsi yang sudah disediakan / dibuat oleh javascript
// kita hanya memanggilnya saja
// contoh :
// alert()
// confirm()
// prompt()
// dan masih banyak yang lain


// built-function : string
// charAt(), slice(), split(), tostring(), 
// tolowerCase(), toUpperCase(),...
// https://www.w3schools.com/jsref/jsref_obj_string.asp

// contoh:
// var nama= "sandhika galih";
// console.log(nama.charAt(5));


// built-function : math
// sin(), cos(), tan(), random(), round(),
// floor(), ceil(), log(),...
// https://www.w3schools.com/jsref/jsref_obj_string.asp

// contoh:
// var bil = Math.random();
// console.log(bil);

// tugas selanjutnya mencari sendiri buitl-in functoin apa aja di javascript?? 


// user-defined function 
// fungsi yang kita buat sendiri
// menggunakan kyewoard function
// nama function (optional)\
// parameter / argument (bahan baku yang bisa digunakan didalam function)
// -disimpan didalam ()
// -boleh ada boleh tidak, jika adqa boleh lebih dari satu
// -jika lebih dari satu pisahkan dengan koma (,)
// fucntion body, dibungkus dengan{}
// dapat mengembalikan nilai (return value) atau tidak

//  caara membuat user-defined function
// dengan deklarasi / function declaration
// denganb ekpresi / function expression


// contoh dengan deklarasi / function declaration :
// function jumlahDuaBilangan(a, b) {
//     var total;
//     total = a + b;

//     return total;
// }

// contoh denganb ekpresi / function expression:
// var jumlahDuaBilangan = function(a, b) {
//     var total;
//     total = a + b;

//     return total;
// }
// alert(jumlahDuaBilangan(1,2));
// alert(jumlahDuaBilangan(25,30));
// alert(jumlahDuaBilangan(1500,17.5))

// function = keyword
// () = parameter


// next belaja??
// user-defined function
// function declaration vs. function expresiion
// parameter / argument
// return value
// scope
// refactoring
// hoisting
// closure
// recursion


// cara kerja function
// 1. input = masukkan bahan / material kedalam function
// 2. funtion = lakukan sesuatu / meterial tadi
// 3. output = menghasilkan sesuatu


// "function yang baik adalah function yang hanya mengerjakan satu hal saja." (secara spesifik)
// "function adalah  blok kode yang dibuat unutk melakukan tugas spesifik."
// -dapat dipanggil berulang kali
// -memudahkan penelusuran
// -reusability

// cara menjumlhkan volume 2 kubus
// 1.ketahui sisi masing" kubus a = 8, b = 3
// 2.hitung volume masing" kubus a 8pangkat3=512 b 3pangkat3 = 27
// 3.jumlahkan hasilnya 512 + 27
// 4.kembalikan nilai jawabannya = 539



// function (keyword function, untuk memberitahu interpreter javascript
//         bahwa kita akan mulai menulkis sebuah fungsi).
// -beri nama function yang menjelaskan  apa yang akan dilakukan.\
//-selalu tuliskan kurung untuk menyimpan parameter/argument/bahan baku untuk nantinya
//  digunakan didalam function.
//-parameter / argument :
//  data  yang dikirim dari luar saat pemanggilan function, untuk digunakan didalam function.
//  anggap aja sebagai variable khusus untuk function.
//  optional, boleh ada atau tidak.
//  jika adqa boleh lebih dari satu.
//  jika lebih dari satu pisahkan dengan koma (,)
//-sebuah function biasanya mengembalikan nilai.
//-menggunakan keyword return, lalu diikuti dengan nilai kembaliannya.
//-kegunaannya adalah untuk membritahu interpreter bahwa kit atelah selesai mengerjakan sesuatu
//   dan inilah hasilnya
//-setelah sampai pada keyword return, function akan berhenti berjalan.
// {} = bungkus function dengan kurung kurawal, untuk menandai awal dan akhir sebuah fungsi.

// algoritma memasukkan dari function sampai return:
// function jumlahVolumeDuaKubus() {

//     1.ketahui sisi masing" kubus
//     2.hitung volume masing" kubus
//     3.jumlahkan hasilnya
//     4.kembalikan nilai jawabannya

//     return
// }

// contoh:
// function jumlahVolumeDuaKubus(a, b){
//     var total, volumeA, volumeB;

//     volumeA = a * a * a;
//     volumeB = b * b * b;
//     total = volumeA + volumeB;

//     return total;
// }

// console.log(jumlahVolumeDuaKubus(8,3));
// alert(jumlahVolumeDuaKubus(8,3));
// alert(jumlahVolumeDuaKubus(10,15));


// PARAMETER 
// variable yang ditulis di dalam kurung pada saat function dibuat,
// digunakan untuk menampung nilai yang dikirimkan saat  functio dipanggil.

// ARGUMENT
// nilai yang dikirimkan ke parameter saat fungsi dipanggil.

// contoh:
// function tambah(a, b) { //a, b adalah parameter
//     return a + b;
// }
// var a = parseInt(prompt('masukkan nilai 1 :'));
// var b = parseInt(prompt('masukkan nilai 2 :'));
// var hasil = tambah(5,10); //5,10 adalah argument 
// var hasil = tambah(a*2,b*2); //5,10 adalah argument 
// console.log(hasil);

// function tambah(a,b) {
//     return a + b;
// }

// function kali(a,b) {
//     return a * b;
// }

// var hasil = kali(tambah(1,2), tambah(3,4));
// console.log(hasil);


// "jika parameter lebih sedikit daripada argument,
// maka argument kelebihannya akan diabaikan."

//contoh:
// function tambah(a,b){
//     return a + b;
// }

// var hasil = tambah(5,10,20);
// console.log(hasil);

// "jika parameternya lebih banyak daripada argument,
// maka parameter kelebihannya akan diisi dengan nilai (default) undefined."

// contoh:
// function tambah(a,b,c){
//     return a + b;
// }

// var hasil = tambah(5,10);
// console.log(hasil);

//   ARGUMENT
//  "array yang berisi nilai yang dikirimkan saat fungsi dipanggil"

//contoh:
// function tambah() {
//     return arguments;
// }

// var coba = tambah(5,10,20,"hi",false);
// console.log(coba);

// contoh lain sudo variable arguments:
function tambah() {
    var hasil = 0;
    for( var i = 0; i < arguments.length; i++){
        hasil += arguments[i];
    }
    return hasil;
}

var coba = tambah(1,2,3,4,5);
console.log(coba);