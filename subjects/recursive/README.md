### Recursive

### Explications

Une fonction récursive est une fonction qui s'appelle elle-même.

Elles sont généralement utilisées pour traiter un cas avec un nombre infini de possibilités et s'arrêtent lorsque la condition de sortie est atteinte.

Exemple : 

```php
function recursive($arg1, $arg2, ...) 
{
    // Start code
    // ...
    recursive($arg1 + 2, $arg2 - 1, ...);
    // ...
    // End code
}
```

> ⚠ Attention aux boucles infinies

### Instructions

Créez une fonction `factorial` qui calcule la factorielle du nombre passé en argument.

`factorial` avec les paramètres disponibles suivants :
- Le nombre : `int`

### Notions

- Recursive function
- [en.wikipedia.org/wiki/Factorial](https://en.wikipedia.org/wiki/Factorial)