### Word search

### Instructions

Je veux être maître des mots croisés !!
Mais pour cela je dois d'abord réussir à trouver des mots dans un tableau... OK C'EST PARTI !

Créez une fonction `searchWord` qui recherchera une chaîne de caractères dans un tableau donné.

`searchWord` avec les paramètres disponibles suivants :
- Le plateau : `array`
- La chaîne à rechercher : `string`

Utiliser ce tableau : 
```php
$board = [
    ['a', 'b', 'c', 'd'],
    ['d', 'k', 'l', 'm'],
    ['m', 'f', 'b', 's']
];
```

Exemple :
```php
// Le mot peut être construit sous forme de lettres de cellules adjacentes séquentiellement
// où les cellules 'adjacentes' sont celles voisines horizontalement ou verticalement
searchWord($board, 'abcd'); // true
searchWord($board, 'abcl'); // true
searchWord($board, 'admfbl'); // true

// Il n'est pas permis d'utiliser deux fois la même lettre
searchWord($board, 'abcc'); // false
searchWord($board, 'abcdc'); // false
searchWord($board, 'dklml'); // false
```

### Notions

- Multidimensional array
- [php.net/manual/en/language.types.array.php](https://www.php.net/manual/en/language.types.array.php)
- [php.net/manual/en/function.array-keys.php](https://www.php.net/manual/en/function.array-keys.php)
- [php.net/manual/en/function.in-array.php](https://www.php.net/manual/en/function.in-array.php)