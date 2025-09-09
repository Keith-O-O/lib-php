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
    <title>View Book</title>
</head>

<body>
    <h1><?php echo htmlspecialchars($book['title']); ?></h1>
    <p><strong>Author:</strong> <?php echo htmlspecialchars($book['author']); ?></p>
    <a href="index.php">Back to Library</a>
</body>

</html>