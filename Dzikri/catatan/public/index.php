<?php
require_once '../app/config/Constants.php';
require_once '../app/controllers/NoteController.php';

$url = isset($_GET['url']) ? rtrim($_GET['url'], '/') : '';
$url = explode('/', $url);

$controller = new NoteController();

if (empty($url[0])) {
    $controller->index();
} elseif ($url[0] == 'note') {
    if (isset($url[1])) {
        if ($url[1] == 'create') {
            $controller->create();
        } elseif ($url[1] == 'store') {
            $controller->store();
        } elseif ($url[1] == 'edit' && isset($url[2])) {
            $controller->edit($url[2]);
        } elseif ($url[1] == 'update' && isset($url[2])) {
            $controller->update($url[2]);
        } elseif ($url[1] == 'delete' && isset($url[2])) {
            $controller->delete($url[2]);
        }
    }
}
