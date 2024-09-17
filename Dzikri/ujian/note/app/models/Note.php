<?php

class Note {
    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=note_app', 'root', '');
    }

    public function getAllNotes() {
        $stmt = $this->db->prepare("SELECT * FROM notes");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getNoteById($id) {
        $stmt = $this->db->prepare("SELECT * FROM notes WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function addNote($title, $content) {
        $stmt = $this->db->prepare("INSERT INTO notes (title, content) VALUES (:title, :content)");
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':content', $content);
        $stmt->execute();
    }

    public function updateNote($id, $title, $content) {
        $stmt = $this->db->prepare("UPDATE notes SET title = :title, content = :content WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':content', $content);
        $stmt->execute();
    }

    public function deleteNote($id) {
        $stmt = $this->db->prepare("DELETE FROM notes WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
}
?>
