<?php
$books = json_decode(file_get_contents('books.json'), true);
$id = $_GET['id'];
$book = $books[$id];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Book</title>
</head>

<body>
    <h1>Edit Book</h1>
    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <label for="title">Title:</label>
        <input type="text" name="title" value="<?php echo htmlspecialchars($book['title']); ?>" required>
        <label for="author">Author:</label>
        <input type="text" name="author" value="<?php echo htmlspecialchars($book['author']); ?>" required>
        <input type="submit" value="Update Book">
    </form>
</body>

</html>