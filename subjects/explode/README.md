### Explode

### Instructions

Créez une fonction `explodeWords` qui prend une chaîne comme premier argument, un séparateur comme deuxième argument et une limite comme troisième argument.

Cette fonction pourra renvoyer un tableau de chaînes, chacune étant une sous-chaîne de chaîne formée en la divisant sur des limites formées par le séparateur de chaîne.

Le deuxième paramètre sera par défaut égal à un espace s'il n'est pas renseigné.

Le troisième paramètre sera par défaut égal à `PHP_INT_MAX` s'il n'est pas renseigné.

/!\ Attention au paramètre limit /!\
- Si limit est défini et positif, le tableau renvoyé contiendra un maximum d'éléments limit avec le dernier élément contenant le reste de la chaîne.
- Si le paramètre limit est négatif, tous les composants sauf le dernier -limit sont renvoyés.
- Si le paramètre limite est égal à zéro, alors celui-ci est traité comme 1.

Exemple : 
```php
explodeWords('My name is John'); // ['My', 'name', 'is', 'John']

explodeWords('My-name/is-John', '/'); // ['My-name', 'is-John']

explodeWords('My-name/is-John/and-i-love-apple', '/', 2); // ['My-name', 'is-John']

explodeWords('My-name/is-John', '/', -1); // ['My-name']
```

Vous n'êtes pas autorisé à utiliser `explode`, faites la vôtre.

### Notions

- [How to create php function](https://www.w3schools.com/php/php_functions.asp)
- [php.net/manual/en/function.array-push.php](https://www.php.net/manual/en/function.array-push.php)
- [explode](https://www.php.net/manual/en/function.explode.php)