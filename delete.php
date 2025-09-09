<?php
$books = json_decode(file_get_contents('books.json'), true);
$id = $_GET['id'];
unset($books[$id]);
file_put_contents('books.json', json_encode(array_values($books)));
header('Location: index.php');
?>