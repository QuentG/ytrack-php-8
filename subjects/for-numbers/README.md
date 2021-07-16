### For numbers ! 🦾

### Explications

La boucle for en PHP ne fonctionne pas comme la boucle while ou do... while, dans le cas d'une boucle for, nous devons déclarer à l'avance combien de fois nous voulons que la boucle s'exécute.

```php
<?php

for(initialisation; condition; increment/decrement) {
    /* 
        Exécuter ce code jusqu'à ce que le
        la condition soit vraie
    */
}
```
Les paramètres utilisés ont la signification suivante :

- Initialisation : Ici, nous initialisons une variable avec une certaine valeur. Cette variable agit comme le compteur de boucle.


- Condition : On définit ici la condition qui est vérifiée après chaque itération/cycle de la boucle. Si la condition retourne vrai, alors seule la boucle est exécutée.


- Incrémenter/décrémenter : Ici, nous incrémentons ou décrémentons le compteur de boucle selon les exigences.

Exemples : 
```php
<?php

// Afficher les 10 premiers chiffres.
for ($i = 1; $i <= 10; ++$i) {
    echo $i; // 12345678910
}

// Afficher que les chiffres qui sont un modulo de 2
for ($p = 0; $p < 10; ++$p) {
    if ($p % 2) {
        echo $p . ' '; // 1 3 5 7 9
    }
}
```

### Instructions

A l'aide d'une boucle for afficher les nombres premiers inférieurs à 100.
Séparer chaque nombre premier par une virgule (sauf pour le dernier).

Résultat attendu :
```php
3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41, 43, 47, 53, 59, 61, 67, 71, 73, 79, 83, 89, 97
```

**Le script doit faire maximum 10 lignes**

Vous n'êtes pas autorisé à utiliser la fonction 'range'.

### Notions

- <a href="https://www.php.net/manual/en/control-structures.for.php" target="_blank">php.net/manual/en/control-structures.for.php</a>
- <a href="https://fr.wikipedia.org/wiki/Nombre_premier" target="_blank">Nombre premier</a>