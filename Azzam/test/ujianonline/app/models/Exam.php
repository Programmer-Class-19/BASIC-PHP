<?php
class Exam {
    private $databaseConnection;
    private $tableName = "online";

    public $id;
    public $title;
    public $description;
    public $date;
    public $nilai;
    public $absen;

    public function __construct($db) {
        $this->databaseConnection = $db;
    }

    public function getexam() {
        $query = 'SELECT * FROM ' . $this->tableName;
        $stmt = $this->databaseConnection->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function read() {
        try {
            $query = "SELECT * FROM " . $this->tableName;
            $stmt = $this->databaseConnection->prepare($query);
            $stmt->execute();
            
            return $stmt->fetchAll(PDO::FETCH_ASSOC); // Kembalikan hasil sebagai array
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }

    public function create() {
        try {
            if (empty($this->title) || empty($this->description) || empty($this->date) || empty($this->nilai) || empty($this->absen)) {
                throw new Exception("Data tidak lengkap");
            }

            $query = "INSERT INTO " . $this->tableName . " (title, description, date, nilai, absen) VALUES (:title, :description, :date, :nilai, :absen)";
            $stmt = $this->databaseConnection->prepare($query);

            // Mengikat parameter
            $stmt->bindParam(':title', $this->title);
            $stmt->bindParam(':description', $this->description);
            $stmt->bindParam(':date', $this->date);
            $stmt->bindParam(':nilai', $this->nilai);
            $stmt->bindParam(':absen', $this->absen);

            return $stmt->execute(); // Kembalikan hasil eksekusi
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }
}
?>
