<?php
require_once "core/constants.php";
require_once "models/Ujian.php";

class UjianController {
    private $ujianModel;

    public function __construct($pdo) {
        $this->ujianModel = new Ujian($pdo);
    }

    public function listUjian() {
        $ujian = $this->ujianModel->getAllUjian();
        include "views/ujian/list.php";
    }

    public function addUjian() {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $title = $_POST["title"];
            $description = $_POST["description"];
            $this->ujianModel->addUjian($title, $description);
            header("Location: index.php");
        } else {
            include "views/ujian/add.php";
        }
    }
}
