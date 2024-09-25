<?php
require_once "config/database.php";

class Ujian {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getAllUjian() {
        $stmt = $this->pdo->query("SELECT * FROM ujian");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function addUjian($title, $description) {
        $stmt = $this->pdo->prepare("INSERT INTO ujian (title, description) VALUES (:title, :description)");
        $stmt->execute([":title" => $title, ":description" => $description]);
    }
}
