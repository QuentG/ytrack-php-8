### Line breaker

### Instructions

Créez une fonction `breakLines` qui effectue des sauts de ligne automatiques.

Il doit retourner une chaîne de caractères incluant des sauts de ligne : "\n" respectant les critères suivants :

1. Une ligne ne peut pas dépasser la longueur de la ligne.
2. Chaque ligne doit être aussi longue que possible.
3. Les sauts de ligne sont entre deux mots (sur un espace).
4. La fonction conserve les sauts de ligne déjà présents.
5. La fonction ne peut pas (erreur) diviser une ligne avec un mot plus grand que la taille maximale de la ligne.

`breakLines` avec les paramètres disponibles suivants :
- La chaîne à casser : `string`
- La longueur max de chaque phrase : `int`

Exemple : 
```php
breakLines('Line with words', 15); // Line with words

breakLines("Line with words should break", 15); // Line with words\nshould break

breakLines("Line with words should break at this spot", 15); // Line with words\nshould break at\nthis spot
```