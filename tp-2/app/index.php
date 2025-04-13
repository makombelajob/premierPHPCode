<?php

$citations = [
    "Le succès est la somme de petits efforts, répétés jour après jour.",
    "Ils ne savaient pas que c’était impossible, alors ils l’ont fait.",
    "La vie, c’est comme une bicyclette, il faut avancer pour ne pas perdre l’équilibre.",
    "Soyez vous-même, les autres sont déjà pris.",
    "Le plus grand risque est de ne prendre aucun risque.",
    "Le bonheur n'est réel que lorsqu'il est partagé.",
    "Fais de ta vie un rêve, et d’un rêve une réalité."
];

//var_dump($citations);

function randomCitation($citationsRandom){
    $uniqueRandom = array_rand($citationsRandom);
    $citationsRandom = $citationsRandom[$uniqueRandom];
    return $citationsRandom;
}
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
<body>
    <main>
        <p class="fs-5 m-3">Voici une citation au hasard à chaque rafraîchissement de la page.</p>
        <p class="text-center bg-primary py-1 mx-1">👇👇👇</p>
        <p class="text-center fs-3 fw-bold"><?php echo randomCitation($citations); ?></p>
    </main>
</body>
</html>
