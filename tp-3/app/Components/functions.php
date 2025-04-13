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

function searchBooks($title, $books){

    foreach ($books as $book){
        if (($book['title']) === $title){
            return $book;
        }
    }
    return null;
}