<?php
class Exam {
    private $db;

    public function __construct($pdo) {
        $this->db = $pdo;
    }

    public function getAllExams() {
        $stmt = $this->db->prepare("SELECT * FROM exams");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function addExam($name) {
        try {
            $stmt = $this->db->prepare("INSERT INTO exams (name) VALUES (:name)");
            $stmt->bindParam(':name', $name);
            return $stmt->execute();
        } catch (Exception $e) {
            // Tangani kesalahan, misalnya dengan mencetak pesan
            echo "Error: " . $e->getMessage();
            return false; // atau lemparkan kesalahan lebih lanjut
        }
    }

    public function editExam($name) {
        $stmt = $this->db->prepare("INSERT INTO exams (name) VALUES (:name)");
        $stmt->bindParam(':name', $name);
        return $stmt->execute();
    }

    // Mengambil ujian berdasarkan ID
    public function getExamById($id) {
        $stmt = $this->db->prepare("SELECT * FROM exams WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function updateExam($name) {
        $stmt = $this->db->prepare("INSERT INTO exams (name) VALUES (:name)");
        $stmt->bindParam(':name', $name);
        return $stmt->execute();
    }

    public function deleteExam($id) {
        $stmt = $this->db->prepare('DELETE FROM books WHERE id = :id');
        $stmt->execute(['id' => $id]);
    }
}
