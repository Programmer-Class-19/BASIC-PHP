<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TO-DO-LIST</title>
</head>
<body>
<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Todo</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($todos as $todo) : ?>
            <tr>
                <td><?= $todo->id ?></td>
                <td><?= $todo->todo ?></td>
                <td><?= $todo->status ? 'Done' : 'Not Done' ?></td>
                <td>
                    <a href="./delete.php?todo_id=<?= $todo->id ?>" class="font-medium text-blue-600">Hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>