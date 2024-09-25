<?php
require_once '../config/database.php';
require_once '../controllers/UjianController.php';

$controller = new UjianController($pdo);

$action = $_GET["action"] ?? "list";

switch ($action) {
    case 'add':
        $controller->addUjian();
        break;
    case 'list':
    default:
        $controller->listUjian();
        break;
}
