<?php //jangan simpan password dan database di file ini
class Mahasiswa_model {
    private $table = 'mahasiswa';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getAllMahasiswa() {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getMahasiswaById($id) {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id'); // id=:id' untuk mengamankan sql injection
        $this->db->bind('id', $id);
        return $this->db->single();
    }
}
