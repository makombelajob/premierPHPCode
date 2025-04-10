<?php

$numbers = [ 12, 17, 22];

function average_calcul(array $notes){
    $sumNumbers = array_sum($notes);
    $avgNumbers = $sumNumbers / count($notes);
    return $avgNumbers;
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
        <h1>Calcul Moyenne d'une somme</h1>
        <?php
        echo '<p>La somme moyenne est de : ' . average_calcul($numbers) . '</p>';
        ?>
    </main>
</body>
</html>