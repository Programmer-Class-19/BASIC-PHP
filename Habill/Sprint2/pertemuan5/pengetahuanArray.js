// - array secara umum = susunan sistematis dari objek objek yang serupa
// - array secara programming = tipe data yang digunakan untuk mendeskripsikan kumpulan
// elemen (nilai atau variable), yang tiap" elemennya memiliki index.
// - array kata sandhika galih = variable yang SAKTI karenabisa menampung lebih dari satu nilai 

// - array = 
// 1.variable jamak, yang mempunyai  banyak elemen  dan diacu dengan  nama yang sama
// 2.kumpulan pasangan key dan nilai / key and value pair
// 3.key adalah index pada array dengan tipe integeryang dimulai dari 0
// 4.array pada javascript bertipe object
// 5.array pada javascript memiliki fungsui / method length untuk menghitung jumlah elemen didalamnya
// 6.elemen pada array boleh memiliki tipe data yang berbeda




// kenapa array?
// - mempermudah pengelolaan nilai/ value/ data ( penelusuran dan pencarian)
// - manajemen memori




// key and value pair

// var binatang =  ['kucing', 'kelinci', 'monyet', 'panda', 'koala', 'sapi'];
//   atau
// var binatang = [];
// binatang =  ['kucing', 'kelinci', 'monyet', 'panda', 'koala', 'sapi'];
// console.log(binatang[4]);

// console.log(tytpeof(binatang)); muncul tulisan object
// console.log(binatang.length); muncul tulisan berapa string

// contoh tipe berbeda
// var hari = ['senin', 'selasa', 'rabu'];
// var mhs = ['jie', 'qibiel', 'mutss'];
// var angka = [10,123,2004];
// var myArr = ['teks',2,false];
// var myfunc = function() {
//     alert('hello wolrd!');
// };
// var myArr2 = ['teks',2,false,myFunc];
// var myArr2 = ['teks',2,false,myFunc,[5,6,7]]; = array multidimensi/array bersarang

// cara menampilkan angka 5 di console
// console.log(myArr3[4][1]);




// MANIPULASI ARRAY

// 1.menambah element pada array
// var arr = [];
// arr [0] = "jie";
// arr [1] = "qibiell";
// arr [2] = "mutss";
// arr [3] = "tiqq";

// console.log(arr);



// 2.menghapus element pada array
// var arr = ["jie", "qibiell", "mutss"];
// arr [1] = undefined;

// console.log(arr);



// 3.menampilkan seluruh array
// var arr = ["jie", "qibiell", "mutss", "tiqq"];

// for(var i = 0; i < arr.length; i++) {
//     console.log("mahasiswa ke-" + (i+1) +  ' : ' + arr[i]);
// }




// ARRAY METHOD (method adalah function yang ada didalam sebuah objek)
// - length (untuk mengetahui berapa jumlah pada array)
// - join (yang menggabung seluruh isi array dan mengubahnya menjadi sebuah string)
// var arr = ['jie','qibiell','mutss'];
// console.log(arr.join(' - '));

// - push, pop, shift, unshiff (untuk menambah atau menghapus element array)

//    push (untuk menambah element array diakhir arraynya)
// var arr = ['jie','qibiell','mutss'];
// arr.push('tiqq', 'curut'); // bisa menambahkan langsung
// console.log(arr.join(' - '));

//    pop (untuk menghilangkan element pada akhir array)
// var arr = ['jie','qibiell','mutss'];
// arr.pop();
// arr.pop(); // harus bikin lagi / harus satu persatu
// console.log(arr.join(' - '));

//    unshift (untuk menambahkan element baru diawal array)
// var arr = ['jie','qibiell','mutss'];
// arr.unshift('kameng');
// console.log(arr.join(' - '));

//     shift (untuk menghilang element diawal array)
// var arr = ['jie','qibiell','mutss'];
// arr.shift();
// console.log(arr.join(' - '));

// slice, splice (menambah dan menghilangkan element di tengah array)

//      splice (indexAwal, mauDihapusBerapa, elemenrBaru, elementBaru2, ...)
// var arr = ['jie','qibiell','mutss'];
// arr.splice(2, 1, 'tiqq', 'curut');
// arr.splice(1, 0, 'TIQQ');
// console.log(arr.join(' - '));

//      slice "menghapus array menjadi array yang baru" (indexAwal,indexAkhir)
var arr = ['jie','qibiell','mutss', 'tiqq', 'curut'];
var arr2 = arr.slice(1,4)
console.log(arr.join(' - '));
console.log(arr2.join(' - '));

