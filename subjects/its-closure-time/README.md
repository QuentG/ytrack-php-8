### It's closure time

### Instructions

Créer une fonction `f` qui renvoie un tableau associatif contenant 3 éléments. Les éléments (dans cet ordre) sont `'+'`, `'-'` et `'*'`. Les valeurs pour chaque élément sont des références pour des objets qui représentent des fonctions. 

- Le premier est capable de prendre deux nombres et de retourner leur somme. 
- Le second est capable de prendre deux nombres et de restituer leur différence.
- Le troisième est capable de prendre deux nombres et de retourner leurs multiplications.

**Attention la fonction f ne prend pas de paramètres** !!

__Astuce__ : Une fonction peut retourner une autre fonction. Utiliser des fonctions anonymes, vous verrez c'est cool :D

__Astuce 2__ (parce qu'on est cool) : Voici 2 manières de déclarer une fonction anonyme 
 
```php
static fn () => ....

function () { return ... }
```

### Notions

- [Associative Arrays](https://www.w3schools.com/php/php_arrays_associative.asp)
- [Anonymous functions](https://www.php.net/manual/fr/functions.anonymous.php)