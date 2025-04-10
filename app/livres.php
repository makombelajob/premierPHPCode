<?php

$livres = [
    [
        'title' => 'Négritude',
        'author' => 'Léopold Sédar Senghor',
        'publish_year' => 1945
    ],
    [
        'title' => 'Mandarins',
        'author' => 'Simone de Beauvoir',
        'publish_year' => 1954
    ]

];

function addBook($title, $author, $publish_year){
    $newBook = [$title, $author, $publish_year];
}
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<main>
    <h1>Bibliothèques</h1>
    <?php
    foreach ($livres as $livre) {
        echo '<h3>Le contenue de la bibliothèques</h3>';
        echo '<p> Nom du livre :' . $livre['title'] . '</p>';
        echo '<p> Nom auteur :' . $livre['author'] . '</p>';
        echo '<p> Année de publication :' . $livre['publish_year'] . '</p>';
    }
    ?>
</main>
</body>
</html>