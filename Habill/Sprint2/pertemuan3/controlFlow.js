// normal flow
// "apabila program klita memiliki lebih dari satu statementm, maka statement tersebut akan dieksekusi
// dari atas kebawah atau dari kiri kek kanan".

// alert('halo');
// alert('nama');
// alert('saya');
// alert('jie');
// alert('qibiell');

// contoh yang salah atau kurang tepat :
// var angka = prompt ('masukkan angka :');
// alert('angka yang anda masukkan adalah : ' + angka);

// control flow
// PENGULANGAN (LOOP / ITERATION /  ITERASI)
// "jika program kita sedang mengeksekusi serangakian statement dari atas kebawah, lalu dibawah nanti
// ada satu titik statement yang ingin kita lakukan secara berulang, ada banyak statement yang banyak
// kita lakukan lebih dari satu kali maka kita akan lakukan dulu pengulangannya, setelah itu baru kita 
// lanjut ke statement selanjutnya".

// sintaks :
// for()
// while()
// do while() 

// contoh :
// alert('mulai');
// alert('hello world!');
// alert('hello world!');
// alert('hello world!');
// alert('hello world!');
// alert('hello world!'); // kata hello wolrd! bisa di ganti dengan contoh dibawah
// alert('selesai');

// contoh simple:
// alert('mulai');
// for(var i = 0; i < 5; i++) {
//     alert('hello world!');
// }
// alert('selesai');

// while:
// console.log('hello wolrd!');
// console.log('hello wolrd!');
// console.log('hello wolrd!');
// console.log('hello wolrd!');
// console.log('hello wolrd!');
// console.log('hello wolrd!');
// console.log('hello wolrd!');
// console.log('hello wolrd!');
// console.log('hello wolrd!');
// console.log('hello wolrd!');


// while(//selama kondisi didalam bernilai true){
    //maka lakukan aksi didalam blok kurung kurawa
// }
// contoh infinite loop/looping forever:
// while(true){
//     console.log('hello world!');
// }

// contoh dihentikan oleh user:
// var ulang = true;
// while(ulang){
//     console.log('hello world!');
//     ulang = confirm('ulang?');
// }


// contoh dihentikan oleh program:
// nilai awal 
// while(kondisi ternimasi) {
//     aksi

//     incerement (penambahan)/decrement(pengurangan) > terhadap nilai awal
// }

// var nilaiAwal = 1;
// while(nilaiAwal <= 10000) {
//     console.log('hello world!');
//     nilaiAwal++;
// }

// contoh manggil hellor world! 10x;
// var nilaiAwal = 1;
// while(nilaiAwal <= 10) {
//     console.log('hello world!' + nilaiAwal + 'x');
//     nilaiAwal++;
// }








// PENGKONDISIAN / PERCABANGAN
// "setelah kita mengeksekusi serangkaian statement program kita dari atas kebawahnanti pada satu titik
// program kita akan diberi kondisi, jika kondisi tersebut bernilai true maka akan lanjut  mengeksekusi 
// statement dibawahnya, tapi jika kondisi tadi bernilai false, maka yang dieksekusi adalah statement lain"

// sintaks:
// if()
// if.. else()
// if.. else if.. else()
// switch()

// contoh:
// var angka = prompt('masukkan angka :');
// if(angka % 2 === 0) {
//     alert(angka +  ' adalah bilangan GENAP');
// }else {
//     alert(angka + ' adalah bilangan GANJIL');
// }