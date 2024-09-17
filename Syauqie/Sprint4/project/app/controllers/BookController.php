<?php
require_once '../core/config.php';
require_once '../app/models/Book.php';

class BookController {
    public function index() {
        $bookModel = new Book();
        $books = $bookModel->getAllBooks();
        require '../app/views/book/index.php';
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = $_POST['title'];
            $author = $_POST['author'];
            $bookModel = new Book();
            $bookModel->addBook($title, $author);
            header('Location: ' . BASEURL . '/index.php');
        } else {
            require '../app/views/book/create.php';
        }
    }

    public function edit($id) {
        $bookModel = new Book();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = $_POST['title'];
            $author = $_POST['author'];
            $bookModel->updateBook($id, $title, $author);
            header('Location: ' . BASEURL . '/index.php');
        } else {
            $book = $bookModel->getBookById($id);
            require '../app/views/book/edit.php';
        }
    }

    public function delete($id) {
        $bookModel = new Book();
        $bookModel->deleteBook($id);
        header('Location: ' . BASEURL . '/index.php');
    }
}
