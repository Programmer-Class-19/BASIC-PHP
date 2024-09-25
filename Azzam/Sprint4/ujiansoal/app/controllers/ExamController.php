<?php
require_once "../app/core/Controller.php";
require_once "../app/models/Exam.php";

class ExamController extends Controller {
    private $examModel;

    public function __construct($pdo) {
        $this->examModel = new Exam($pdo);
    }

    // Method untuk menampilkan semua ujian
    public function index() {
        try {
            $exams = $this->examModel->getAllExams();
            require '../app/views/exam_list.php'; // Pastikan file ini ada
        } catch (Exception $e) {
            // Tangani kesalahan, misalnya menampilkan pesan kesalahan
            echo "Error: " . $e->getMessage();
        }
    }

    // Method tambahan untuk menampilkan detail ujian berdasarkan ID
    public function show($id) {
        try {
            $exam = $this->examModel->getALLExams($id);
            require '../app/views/exam_list.php'; // Pastikan file ini ada
        } catch (Exception $e) {
            // Tangani kesalahan
            echo "Error: " . $e->getMessage();
        }
    }

    // Method untuk menambah ujian baru
    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Ambil data dari form dan lakukan validasi
            $examData = $_POST['exam']; // Pastikan Anda menyesuaikan dengan nama input
            try {
                $this->examModel->addExam($examData);
                header('Location: /app/views/exam_list'); // Ganti dengan path yang sesuai
                exit;
            } catch (Exception $e) {
                // Tangani kesalahan
                echo "Error: " . $e->getMessage();
            }
        }
        require '../app/views/add_exam.php'; // Pastikan file ini ada
    }

    // Method untuk menghapus ujian
    public function delete($id) {
        try {
            $this->examModel->deleteExam($id);
            header('Location: /app/views/exam_list'); // Ganti dengan path yang sesuai
            exit;
        } catch (Exception $e) {
            // Tangani kesalahan
            echo "Error: " . $e->getMessage();
        }
    }

    public function edit($id) {
        $examModel = new Exam($id);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = $_POST['title'];
            $author = $_POST['author'];
            $examModel->updateExam($id, $title, $author);
            header('Location: ' . BASEURL . '/index.php');
        } else {
            $exam = $examModel->getExamById($id);
            require '../app/views/edit.php';
        }
    }
}
