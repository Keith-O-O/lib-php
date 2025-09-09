<?php
$books = json_decode(file_get_contents('books.json'), true);
$id = $_POST['id'];
$books[$id]['title'] = $_POST['title'];
$books[$id]['author'] = $_POST['author'];
file_put_contents('books.json', json_encode($books));
header('Location: index.php');
?>