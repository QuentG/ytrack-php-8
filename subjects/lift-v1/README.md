### Lift v1

### Instructions

On considère un ascenseur avec le fonctionnement suivant :
- L'ascenseur va en priorité à l'étage demandé
- S'il est appelé, l'ascenseur va en direction de l'étage appelé le plus proche
- L'ascenseur s'arrête aux étages demandés ou appelés

Créez une fonction appelée `getFloor` qui s'occupera de récupérer l'étage auquel l'ascenseur doit aller.

`getFloor` avec les paramètres disponibles suivants :
- L'étage actuel de l'ascenseur : `int`
- L'étage demandé : `int|null`
- La liste des boutons appelés : `array`

Créez une fonction `getDirection` pour donner la direction dans laquelle l'ascenseur doit se déplacer. La fonction doit retourner un entier = 0 si aucun mouvement n'est nécessaire, -1 pour descendre et +1 pour monter.

`getDirection` avec les paramètres disponibles suivants :
- L'étage actuel de l'ascenseur : `int`
- L'étage demandé : `int|null`
- La liste des boutons appelés : `array`

### Notions

- [php.net/manual/en/functions.arguments.php](https://www.php.net/manual/en/functions.arguments.php)