<?php
require_once 'components/books.php';
require_once 'components/functions.php';
//var_dump($bookStore);


var_dump($bookStore);

$bookStore = addBook('Négritude', 'Léopold', 1945, $bookStore);

var_dump($bookStore);
