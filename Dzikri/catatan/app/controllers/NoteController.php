<?php
require_once '../app/models/Note.php';

class NoteController {
    public function index() {
        $notes = Note::getAllNotes();
        require_once '../app/views/notes/index.php';
    }

    public function create() {
        require_once '../app/views/notes/create.php';
    }

    public function store() {
        $note = new Note();
        $note->title = $_POST['title'];
        $note->content = $_POST['content'];
        $note->save();
        header('Location: ' . BASE_URL);
    }

    public function edit($id) {
        $note = Note::getNoteById($id);
        require_once '../app/views/notes/edit.php';
    }

    public function update($id) {
        $note = Note::getNoteById($id);
        $note->title = $_POST['title'];
        $note->content = $_POST['content'];
        $note->update();
        header('Location: ' . BASE_URL);
    }

    public function delete($id) {
        $note = Note::getNoteById($id);
        $note->delete();
        header('Location: ' . BASE_URL);
    }
}
