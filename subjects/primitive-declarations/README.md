### Primitive declarations

### Bienvenue !

Bienvenue dans la piscine PHP 8 ! L'idée de cette piscine est de vous présenter `PHP` (langage fabuleux).
Dans ce cours nous verrons les bases du langage, (variables, conditions, ...) jusqu'aux fondamentaux de la POO (Programmation Orientée Objet).

### Explications

La toute **première chose** à apprendre dans n'importe quel langue est *"Comment déclarer une variable ?"*

Voyons un exemple de ce pas : 

```php
$myVariable = "Facile non ?";
```

> Vous pouvez remarquer que nous avons utilisé [camelCase](https://en.wikipedia.org/wiki/Camel_case) (le meilleur de tous 🔥) pour le nom de la variable.

Toute variable doit être déclarée au moyen du signe dollar `$` suivi obligatoirement de lettres (en majuscule ou en minuscule) ou d'un trait de soulignement (trait de soulignement _).

Les variables peuvent représenter n'importe quel type de valeur, et elles peuvent être réaffectées à différents types.

```php
$maVariable = 5 ;
$myVariable = "Maintenant, on m'attribue une chaîne ! Fabuleux.";
```

Vous trouverez ci-dessous un tableau récapitulatif des syntaxes de déclaration de variables incorrectes.

```php
$var 1 = "toto" ; // Pas d'espace
$var-1 = "toto" ; // Pas de tiret
$-var = "toto" ; // Pas de tiret
$20var = "toto" ; // Impossible de commencer par un nombre
var = "toto" ; // Nécessairement un $ devant le nom
```

> **_Note_** : PHP est l'un des rares langages de programmation qui accepte les caractères accentués dans les noms de variables. Cependant, leur utilisation est fortement déconseillée pour des raisons de maintenance et de portabilité.

### Instructions

Créez les variables suivantes :

- `firstStr` qui est une chaîne de mots.
- `firstEscapeStr` qui est une chaîne de mots contenant un nouveau caractère de saut de ligne.
- `firstBool` est un booléen.
- `firstInteger` est un entier.
- `firstFloat` est un float.
- `firstNull` est NULL.
- `firstArray` est un tableau contenant une propriété pour chaque type primitif :
  - Valeurs ordonnées : `2, null, 'Hi', 5.5, false`

### Notions

- Variables
- Primitive types
- [php.net/manual/en/language.variables.basics.php](https://php.net/manual/en/language.variables.basics.php)