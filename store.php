<?php
$books = json_decode(file_get_contents('books.json'), true);
$newBook = [
    'title' => $_POST['title'],
    'author' => $_POST['author']
];
$books[] = $newBook;
file_put_contents('books.json', json_encode($books));
header('Location: index.php');
?>