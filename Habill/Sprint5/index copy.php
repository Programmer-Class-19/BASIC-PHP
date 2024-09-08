<!-- <?php
$filename = 'tasks.json';

// Fungsi untuk mendapatkan data tugas dari file JSON
function getTasks() {
    global $filename;
    if (file_exists($filename)) {
        $json = file_get_contents($filename);
        return json_decode($json, true);
    }
    return [];
}

// Fungsi untuk menyimpan data tugas ke file JSON
function saveTasks($tasks) {
    global $filename;
    file_put_contents($filename, json_encode($tasks, JSON_PRETTY_PRINT));
}

// Menangani permintaan POST untuk menambah atau menghapus tugas
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'] ?? '';

    if ($action === 'add') {
        $tasks = getTasks();
        $tasks[] = ['id' => uniqid(), 'title' => $_POST['title']];
        saveTasks($tasks);
    } elseif ($action === 'delete') {
        $tasks = getTasks();
        $tasks = array_filter($tasks, function($task) {
            return $task['id'] !== $_POST['id'];
        });
        saveTasks(array_values($tasks));
    }
}

// Mengambil data tugas untuk ditampilkan
$tasks = getTasks();
?>

<!DOCTYPE html>
<html>
<head>
    <title>To-Do List</title>
</head>
<body>
    <h1>To-Do List</h1>
    <form method="post">
        <input type="text" name="title" placeholder="New Task" required>
        <input type="hidden" name="action" value="add">
        <button type="submit">Add</button>
    </form>
    <ul>
        <?php foreach ($tasks as $task): ?>
            <li>
                <?php echo htmlspecialchars($task['title']); ?>
                <form method="post" style="display:inline;">
                    <input type="hidden" name="id" value="<?php echo htmlspecialchars($task['id']); ?>">
                    <input type="hidden" name="action" value="delete">
                    <button type="submit">Delete</button>
                </form>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html> -->
?>



<?php

$name = $_POST['fname'];
echo $name;

?>