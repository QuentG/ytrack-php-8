### What month is it ?

### Explications 

L'instruction `switch` équivaut à une série de structures `if`.

Elle de comparer une variable à un grand nombre de valeurs différentes, et d'exécuter différentes parties de code suivant la valeur de cette variable.

Il est souvent plus fiable, plus pratique, plus "élégant" d'utiliser une seule structure switch plutôt que plusieurs structures if (En plus le déroulement du programme sera plus rapide).

#### Syntaxe : 

```php
<?php

$i = 1;

switch ($i) { // Variable à vérifier
    case 0: // Premier choix
        echo '$i est égal à 0';
        break; // Condition respecté donc on sort de la boucle
    case 1: // Second choix
        echo '$i est égal à 1'; 
        break; // Condition respecté donc on sort de la boucle
    case ($i > 10): // Troisième choix
        echo '$i est supérieur à 10';
        break; // Condition respecté donc on sort de la boucle

     // .... Infini "case" ....
}
```

### Instructions

Créer une variable nommée `$month` qui récupèrera le mois en cours sous forme de chiffre.

Exemples : Janvier => 1 / Février => 2 / Novembre = 11;

A l'aide de l'instruction `switch`, écrire un script qui va afficher "Nous sommes au mois de " + le mois actuel.

### Notions

- [switch](https://www.php.net/manual/fr/control-structures.switch.php)
