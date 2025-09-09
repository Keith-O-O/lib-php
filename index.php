<?php
$books = json_decode(file_get_contents('books.json'), true);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Books</title>
</head>

<body>
    <h1>Library Books</h1>
    <a href="create.php">Add New Book</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Author</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($books as $index => $book): ?>
            <tr>
                <td><?php echo $index + 1; ?></td>
                <td><a href="view.php?id=<?php echo $index; ?>"><?php echo htmlspecialchars($book['title']); ?></a></td>
                <td><?php echo htmlspecialchars($book['author']); ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $index; ?>">Edit</a>
                    <a href="delete.php?id=<?php echo $index; ?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>