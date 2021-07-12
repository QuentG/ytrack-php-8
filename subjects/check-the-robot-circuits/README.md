### Check the robot circuits

### Instructions

Les scientifiques ont réussi à implémenter des nombres premiers dans le robot, de sorte à pouvoir détecter d'où viennent les bugs. En fait, le robot émmet un nombre lorsqu'il a un bug. Pour détecter l'emplacement du bug, on trouve par quels nombres premiers il est divisible et on se reporte à la table suivante :

```
TABLE DE DEBUG
--------------
2       |   Bras gauche
3       |   Bras droit
5       |   Carte mère
7       |   Processeur
11      |   Défluxeur de zip
13      |   Moteur
```

Créer une fonction nommée `checkCircuits`.

Exemples :

9 : divisible par 3 uniquement, la fonction doit retourner un array avec 1 élément : Bras droit

12 : divisible par 2 et 3, la fonction doit retourner un array avec 2 éléments : Bras gauche et Bras droit.

### Notions

- [Associative Arrays](https://www.w3schools.com/php/php_arrays_associative.asp)
