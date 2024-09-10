<?php 
    require_once 'App/init.php';

    // $produk1 = new komik("doraemon ", " reizuka ", " slaps ",  300000 , " - 100 halaman ");  
    // $produk2 = new game("free fire ", " rexy ", " garena ",  200000 , " ~ 50 jam ");

    // $cetakproduk = new CetakinfoProduk();
    // $cetakproduk->tambahproduk($produk1);
    // $cetakproduk->tambahproduk($produk2);
    // echo $cetakproduk->cetak();

    // echo "<hr>";    
    use App\service\user as serviceuser;
    use App\produk\user as produkuser;
    
    new serviceuser(); 
    echo'<hr>';
    new produkuser();
?>