<?php

// En utilisant toutes les fonctions que nous venons de voir.

/**
 * 1. Vérifiez si cette variable est vide, si c'est le cas, affichez vide si non affichez pas vide.
 */
$var = 0;
// TODO votre code ici.
if (empty($var)) {
    echo "Ouais ouais c'est vide";
}
elseif (!empty($var)) {
    echo "Nan nan c'est pas vide";
}



/**
 * 2. Détruisez la variable déclarée, tentez de l'afficher ensuite en utilisant un print_r.
 */
$eraseMe = "Please erase me !";
// TODO votre code ici.
unset($eraseMe);
print_r($eraseMe);

/**
 * 3. Déclarez vous même un tableau et utilisez var_dump pour afficher toutes les informations de debug.
 */
// TODO votre code ici.
$tab1 = ["pierre", "paul", "jacques"];
var_dump($tab1);
echo "<br>";

/**
 * 4. Faites la même chose avec le même tableau, mais pour la méthode print_r.
 */
// TODO votre code ici.
print_r($tab1);
echo "<br>";


/**
 * 5. A l'aide de la méthode isset, testez si la clé du tableau associatif 'doNotExists' existe ( SANS TOUCHER AU TABLEAU )
 *    Si c'est le cas, affichez le message 'Existe', si ce n'est pas le cas, affichez le message 'Existe pas'.
 */
$tab = ["test" => true, "name" => "Doe", "age" => 32];
// TODO Votre code ici.
if(isset($tab["doNotExists"])) {
    echo "Résiste ! Prouve que tu exiiiistes !";
}
else {
    echo "Nan nan rien à faire elle n'y est pas <br>";
}

/**
 * 6. Créez une variable contenant:
 *    - un booléen
 *    - un nombre entier
 *    - un nombre flottant ( à virgule )
 *    - une chaîne de caractère.
 *
 * Créez une fonction qui prend en paramètre une simple variable, cette fonction doit tester le type du contenu de la variable
 * et afficher le texte "La variable passé en paramètre est de type: TYPE".
 *
 * exemple: funct maFunct(monparam){
 *              si monparam EST boolean {
 *                  afficher -> Ma variable est de type: boolean
 *              }
 *              SI monparam EST ENTIER...
 *              SI...
 *              SI...
 *          }
 * Passez toutes les variables créées précédemment dans cette fonction.
 */

// TODO votre code ici.

$maVar = true;
$maVar2 = 56;
$maVar3 = 2.5;
$maVar4 = "Une chaîne de caractère";


function test($var) {
    $text = "Ma variabe est de type : ";
    if (is_bool($var)) {
        echo $text . "boolean <br>";
    }
    elseif (is_int($var)) {
        echo $text . "entier <br>";
    }
    elseif (is_float($var)) {
        echo $text . "flottant <br>";
    }
    elseif (is_string($var)) {
        echo $text . "une chaîne de caractère <br>";
    }
}

test($maVar);
test($maVar2);
test($maVar3);
test($maVar4);

test($tab);
test($var);
test($tab1);