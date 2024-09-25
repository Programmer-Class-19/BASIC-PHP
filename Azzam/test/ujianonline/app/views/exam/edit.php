<?php
require_once '../database/Database.php';
require_once '../app/models/Exam.php';

class ExamController {
    private $exam;

    public function __construct() {
        $database = new Database();
        $db = $database->getConnection();
        $this->exam = new Exam($db);
    }

    public function edit() {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $id = $_GET["id"];
            $stmt = $this->exam->read($id);
            $exam = $stmt->fetch(PDO::FETCH_ASSOC);
            require_once '../app/views/exam/edit.php';
        } else {
            $id = $_POST['id'];
            $this->exam->title = $_POST['title'];
            $this->exam->description = $_POST['description'];
            $this->exam->date = $_POST['date'];

            if ($this->exam->create($id)) {
                header('Location: ' . BASEURL . '/index.php');
            } else {
                echo "Unable to update exam.";
            }
        }
    }
}