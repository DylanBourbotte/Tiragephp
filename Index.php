<?php
/** 
 * Le but de ce petit exercice est de manipuler ENCORE les tableaux multidimensionnels et OUI hahaha
 * OBJECTIFS : 
 * Votre super formateur facilitateur que vous adorez surtout le lundi matin souhaite une affichage des données dans un tableau html 
 * Le prénom sera dans un <H3></H3>
 * l'email sera un lien clickable qui doit ouvrir le service de messagerie ;)
 * Puis enfin le lien github doit s'ouvrir dans une nouvelle fenêtre ... 
 * TEMPS NÉCESSAIRE :
 * 20 à 30 minutes
 * 
 * Une fois terminé vous êtes libres d'ajouté des données et/ou de stylisé tout cela
 * 
*/
require('conf.php');

/** 
 * La fonction require agit de la même manière que "include", mais elle génère une erreur si le fichier à inclure n'est pas trouvé. 
 * Comme son nom l'indique, le fichier est requis pour que l'application fonctionne.
*/


// A VOUS 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exo lundi 04 Mars 2019</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<table class="main-array">
</table>
<?php

function groupe ($students) { // Je crée une fonction groupe avec le parametre de mon tableau students ! 
    shuffle($students); // Je mélange mon tableau students
    $groups = (array_chunk($students, 2, false)); // Je crée la variable Chunk qui sépare mes tableau par des partie de deux et je lui passe la valeur false
    if(sizeof(end($groups)) === 1) { // Si la fin du tableau comporte un élement 
        array_push($groups[0], end($students)); // Il met ce dernier élement dans le premiers groupe
        array_pop($groups);  //array_pop() dépile et retourne la valeur du dernier élément du tableau array, le raccourcissant d'un élément. 
    }
    foreach ($groups as $key => $group) { // Pour groups la clé => élement 
        echo '<h3>Groupe'. ($key +1) . '</h3>'; // J'affiche dans un h3 groupe1 groupe2 group3 etc..
    foreach ($group  as $k => $g) {  // Pour group : k => g
        echo $g['first-name'] . "<br>"; // J'affiche dans chaque groupe les apprenant.es 
        }
    }
};

groupe($students); // J'apelle ma fonction
        
?>


<link rel='stylesheet' href='style.css'     
    
    

    

    
</body>
</html>
