<?php

class NoteController extends Controller {
    public function index() {
        $note = $this->model('Note');
        $data['notes'] = $note->getAllNotes();
        $this->view('note/index', $data);
    }

    public function add() {
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $note = $this->model('Note');
            $note->addNote($_POST['title'], $_POST['content']);
            header('Location: ' . BASEURL . 'note');
        } else {
            $this->view('note/add');
        }
    }

    public function edit($id) {
        $note = $this->model('Note');
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $note->updateNote($id, $_POST['title'], $_POST['content']);
            header('Location: ' . BASEURL . 'note');
        } else {
            $data['note'] = $note->getNoteById($id);
            $this->view('note/edit', $data);
        }
    }

    public function delete($id) {
        $note = $this->model('Note');
        $note->deleteNote($id);
        header('Location: ' . BASEURL . 'note');
    }
}
?>
