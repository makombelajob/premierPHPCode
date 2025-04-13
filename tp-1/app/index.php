<?php

$notesInit = [10, 20, 30];

//var_dump($notesInit);

function avgCalcul($notes)
{
    $sumNotes = array_sum($notes);
    $finalAvg = $sumNotes / count($notes);
    return $finalAvg;
}

?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>tp-1</title>
</head>
<body>
<main>
    <h1>Voici toutes les notes
        <h2> Les notes :
            <?php
            echo $notesInit[0];
            ?> ,
            <?php
            echo $notesInit[1];
            ?> ,
            <?php
            echo $notesInit[2];
            ?>
        </h2>
    </h1>
    <p>La note obtenue est de :
        <?php
        echo avgCalcul($notesInit);
        ?>
        sur la moyenne totale.
    </p>
</main>
</body>
</html>
