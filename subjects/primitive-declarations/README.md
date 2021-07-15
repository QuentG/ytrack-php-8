### Primitive declarations

### Bienvenue !

Bienvenue dans la piscine PHP 8 ! L'idée de cette piscine est de vous présenter `PHP` (langage fabuleux).
Dans ce cours nous verrons les bases du langage, (variables, conditions, ...) jusqu'aux fondamentaux de la POO (Programmation Orientée Objet).

### Explications

#### La syntaxe de PHP

La syntaxe et la sémantique de PHP sont similaires à celles de la plupart des autres langages de programmation, avec en plus le fait que tout code PHP est contenu entre des sortes d'étiquette appelé ***balise***.

Tout code PHP doit être placé à l'intérieur de ce qui suit :

```php
<?php // On indique à notre fichier / navigateur que l'on va écrire/exécuter du code PHP

...Code PHP....

?> Cette balise n'est utile que dans le cas ou l'on met du PHP directement dans une page HTML.
```

_Note : Pour tous les exercises de ce parcours il ne sera pas nécessaire de mettre la balise `?>` à la fin de vos fichiers 😉._

***

#### Le Point-virgule
En PHP comme dans beaucoup d'autre langage, il faut marquer l’arrêt d'une instruction.
Le point-virgule signifie la fin de celle-ci. Il est indispensable au bon fonctionnement du script. 

Si nous voulions afficher "Hello !" plusieurs fois, nous aurions besoin de mettre un point-virgule à la fin de chaque instructions comme dans cet exemple :

```php
<?php

echo "Hello !";
echo "Hello !";
echo "Hello !";
```

Affiche :

Hello !Hello !Hello !

---

#### C'est parti ? 🙌

Maintenant que nous avons vu les bases syntaxiques du langage, nous allons pouvoir commencer à rentrer dans le vif du sujet. 

***Du Développement !*** 

***

#### Variables

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