<?php //jangan simpan password dan database di file ini
class Mahasiswa_model {
    private $dbh;
    private $stmt;

    public function __construct() {
        $dsn = 'mysql:host=localhost;dbname=phpmvc'; //tidak di sarankan untuk menyimpan database dan user

        try { //blok trycatch memeriksa apakah koneksinya berhasil atau tidak
            $this->dbh = new PDO($dsn, 'root', '');
        } catch(PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getAllMahasiswa() {
        $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
        $this->stmt->execute();
        return $this->stmt->fetchALL(PDO::FETCH_ASSOC);
    }
}
