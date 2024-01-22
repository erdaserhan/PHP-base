<?php

// 1) Créez une fonction qui prend en paramètre un nombre et qui retourne le carré de ce nombre.

function nbSquare($num1) {
    return $num1 * $num1;
}

// puis affichez le carré de 5, 10 et 15 en utilisant cette fonction.
echo nbSquare(5);
echo "<hr>";
echo nbSquare(10);
echo "<hr>";
echo nbSquare(15);
echo "<hr>";


// 2) Créez une fonction qui prend en paramètre un nombre et qui retourne le cube de ce nombre.

function nbCube($num1) {
    return $num1 * $num1 * $num1;
}

// puis affichez le cube de 5, 10 et 15 en utilisant cette fonction.

echo nbCube(5);
echo "<hr>";
echo nbCube(10);
echo "<hr>";
echo nbCube(15);

// 3) Créez une fonction qui prend une date à n'importe quel format et qui retourne la date au format français
// telle qu'indiquée dans l'exemple en utilisant $semaineFr et $moisFr.
// Exemple: 2018-12-25 -> Mardi 25 décembre 2018
// Exemple: 2018-12-25 12:27:35 -> Mardi 25 décembre 2018 à 12h27
// vous pouvez utiliser strtotime() pour convertir une date en timestamp (temps en secondes depuis le 1er janvier 1970)
// et date() pour convertir un timestamp en date au format de votre choix.

function dateEnFr($date){
    $semaineFr=[1 =>'lundi','mardi','mercredi','jeudi',
        'vendredi','samedi','dimanche',];
    $moisFr=[1 =>'janvier','février','mars','avril','mai','juin','juillet',
        'août','septembre','octobre','novembre','décembre',];
    // A FAIRE

    echo strtotime('l jS \of F Y h:i:s A');
    echo $jourActuel = date('N');
    echo "{$semaineFr[$jourActuel]}.";

}
echo dateEnFr('2021-12-25 12:27:35');
echo '<br>';
echo dateEnFr('2023-01-25 11:20');
echo '<br>';
echo dateEnFr('2024-02-25');