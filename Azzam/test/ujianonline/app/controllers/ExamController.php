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

    public function index() {
        $stmt = $this->exam->read();
        
        // Cek jika $stmt tidak false sebelum mengambil data
        if ($stmt) {
            $exam = $stmt; // Mengambil data tanpa fetchAll di sini
        } else {
            $exam = []; // Jika tidak ada data, inisialisasi sebagai array kosong
        }
        
        require_once '../app/views/exam/index.php';
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Sanitasi dan validasi input
            $this->exam->title = isset($_POST['ujian']) ? trim($_POST['ujian']) : '';
            $this->exam->description = isset($_POST['waktu']) ? trim($_POST['waktu']) : '';
            $this->exam->date = isset($_POST['date']) ? trim($_POST['date']) : ''; // Pastikan ini ada dalam form
            $this->exam->absen = isset($_POST['no_absen']) ? trim($_POST['no_absen']) : ''; // Gunakan penamaan yang konsisten
            $this->exam->nilai = isset($_POST['nilai']) ? trim($_POST['nilai']) : '';
    
            if ($this->exam->create()) {
                header('Location: ' . BASEURL . '/index.php');
                exit;
            } else {
                echo "Unable to create exam.";
            }
        } else {
            require_once '../app/views/exam/create.php';
        }
    }
    
}
