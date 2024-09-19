<!-- model mengelola data aplikasi -->
<!-- data base, membaca, dan proses data -->
<?php
require_once '../system/database/Database.php';

class Note {
    public $id;
    public $title;
    public $content;

    public static function getAllNotes() {
        $db = Database::getInstance();
        $query = $db->prepare("SELECT * FROM notes");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_CLASS, 'Note');
    }

    public static function getNoteById($id) {
        $db = Database::getInstance();
        $query = $db->prepare("SELECT * FROM notes WHERE id = :id");
        $query->bindParam(':id', $id);
        $query->execute();
        return $query->fetchObject('Note');
    }

    public function save() {
        $db = Database::getInstance();
        $query = $db->prepare("INSERT INTO notes (title, content) VALUES (:title, :content)");
        $query->bindParam(':title', $this->title);
        $query->bindParam(':content', $this->content);
        $query->execute();
    }

    public function update() {
        $db = Database::getInstance();
        $query = $db->prepare("UPDATE notes SET title = :title, content = :content WHERE id = :id");
        $query->bindParam(':title', $this->title);
        $query->bindParam(':content', $this->content);
        $query->bindParam(':id', $this->id);
        $query->execute();
    }

    public function delete() {
        $db = Database::getInstance();
        $query = $db->prepare("DELETE FROM notes WHERE id = :id");
        $query->bindParam(':id', $this->id);
        $query->execute();
    }
}
