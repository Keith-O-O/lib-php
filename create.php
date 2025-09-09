<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Book</title>
</head>

<body>
    <h1>Add New Book</h1>
    <form action="store.php" method="POST">
        <label for="title">Title:</label>
        <input type="text" name="title" required>
        <label for="author">Author:</label>
        <input type="text" name="author" required>
        <input type="submit" value="Add Book">
    </form>
</body>

</html>