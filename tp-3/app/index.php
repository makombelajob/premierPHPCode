<?php
require_once 'components/books.php';
require_once 'components/functions.php';
//var_dump($bookStore);


//var_dump($bookStore);

$bookStore = addBook('Négritude', 'Léopold', 1945, $bookStore);

$searchResult = searchBooks('Les Misérables', $bookStore);
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href=" 	https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body class="container">
    <main class="row">
        <div class="clo-12">
            <h1 class="text-center fs-1 m-3">Liste des livres dans le stock</h1>
        </div>
        <?php foreach ($bookStore as $bookOneByOne) :
            ?>
            <div class="col-6">
                <article class="card my-3 shadow bg-info">
                    <div class="card-body">
                        <h2 class="card-title"><?php echo $bookOneByOne["title"] ;?></h2>
                        <p class="card-text"><?php echo $bookOneByOne['author'] ;?></p>
                        <p><?php echo $bookOneByOne['year'] ;?></p>
                    </div>
                </article>
            </div>
        <?php
        endforeach;
        ?>
        <p class="fs-1 text-center text-uppercase my-3">Partie du livre réchercher</p>
        <?php
        if ($searchResult){
        ?>
            <div class="col-6">
                <article class="card my-3 shadow bg-info">
                    <div class="card-body">
                        <h2><?php echo $searchResult['title'] ;?></h2>
                        <p><?php echo $searchResult['author'] ;?></p>
                        <p><?php echo $searchResult['year'] ;?></p>
                    </div>
                </article>
            </div>
        <?php
        } else {
            echo '<p class="fs-1 color-danger text-uppercase">Livre non trouvé</p>';
        }
        ?>
    </main>
</body>
</html>
