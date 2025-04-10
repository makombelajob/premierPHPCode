<?php

$citations = [
    "Pourquoi les plongeurs plongent-ils toujours en arrière et jamais en avant ? Parce que sinon ils tombent dans le bateau.",
    "Si un mot est mal écrit dans le dictionnaire, comment s’en apercevra-t-on ?",
    "Un jour, j'irai vivre en théorie, parce qu'en théorie, tout se passe bien.",
    "Je connais un super site pour apprendre à compter : www.un-deux-trois.com",
    "Pourquoi les canards sont toujours à l'heure ? Parce qu'ils sont dans l'étang.",
    "Un aveugle entre dans un bar... Et dans une table... Et dans une chaise...",
    "Quelle est la boisson préférée des informaticiens ? Le Java.",
    "C’est l’histoire d’un pingouin qui respire par les fesses. Un jour il s’assoit… et il meurt.",
    "Pourquoi les squelettes ne se battent-ils jamais entre eux ? Ils n’ont pas le cran.",
    "Quel est le comble pour un électricien ? De ne pas être au courant."
];
/***/
function randomCitation($citation_hasard){
    $blagueChoice =  array_rand($citation_hasard);
    return $citation_hasard[$blagueChoice];
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
    <h1>Blague des citations</h1>
    <?php
    echo randomCitation($citations);
    ?>
</body>
</html>