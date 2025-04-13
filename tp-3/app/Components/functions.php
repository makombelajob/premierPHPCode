<?php
function addBook($title, $author, $year, $book){

    $newBook = [
        'title' => $title,
        'author' => $author,
        'year' => $year
    ];
    $book[] = $newBook;
    return $book;
}