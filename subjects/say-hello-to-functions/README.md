### Say hello to functions

### Explications

Maintenant que les bases des `variables` et des `boucles` sont en place, nous allons enfin pouvoir voir comment construire nos propres `fonctions` 👀.

Voyons un exemple et expliquons-le !

```php
function getScore(int $score): string
{
    return "Votre score : " . $score ;
}
```

Pour créer une fonction, nous utilisons l'instruction `function` suivie du nom que nous voulons donner à cette fonction (`getScore` ici), suivi de 2 parenthèses. A l'intérieur de ses parenthèses nous retrouvons les différents paramètres (optionnel ou non).

Depuis _php 5.2_ vous pouvez spécifier le type de retour de la fonction en mettant un deux-points, et le type (`: string` ici).

Les instructions à exécuter lors de l'appel de cette fonction seront placées entre deux accolades.

### Indications 😉

***Pour tous les exercises nécessitant la création de fonction, veuillez bien préciser le type de retour de la fonction avec les***
`: leTypedeRetour`

***Si plusieurs types de retour possible alors :*** `: lePremierTypedeRetour|LeSecond|...`

### Instructions

Créez une fonction `sayHello` qui dit "Bonjour".

Créez une fonction `sayHelloTo` qui dit "Hello $name".

`sayHelloTo` avec les paramètres disponibles suivants :
- Le nom : `string`

### Notions

- [How to create php function](https://www.w3schools.com/php/php_functions.asp)