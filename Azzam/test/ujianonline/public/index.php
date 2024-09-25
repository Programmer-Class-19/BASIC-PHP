<?php
require_once "../config/config.php";
require_once "../app/controllers/ExamController.php";

$action = isset($_GET["action"]) ? $_GET["action"] : "index";

$controller = new ExamController();

switch ($action) {
    case "create":
        $controller->create();
        break;
    case "index":
    default:
        $controller->index();
        break;
}
