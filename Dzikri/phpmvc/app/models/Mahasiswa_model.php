<?php

class Mahasiswa_model {
    private $dbh;
    private $stmt;

    public function __construct()  // Perbaiki penulisan __construct
    {
        // Data Source Name (DSN)
        $dsn = 'mysql:host=localhost;dbname=phpmvc';  // Hapus :8081 dari host, gunakan port terpisah jika perlu
        
        try {
            $this->dbh = new PDO($dsn, 'root', '');  // Koneksi ke database
        } catch (PDOException $e) {
            die($e->getMessage());  // Tangkap dan tampilkan error jika koneksi gagal
        }
    }

    public function getAllMahasiswa() {
        $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
        $this->stmt->execute();
        return $this->stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
}
