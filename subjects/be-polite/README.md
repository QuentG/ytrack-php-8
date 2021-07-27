### Be polite

### Explications 

Comme la plupart des langages de programmation, PHP vous permet également d'écrire du code qui effectue différentes actions en fonction des résultats de conditions de test logiques ou comparatives au moment de l'exécution.

Cela signifie que vous pouvez créer des conditions de test sous la forme d'expressions évaluées à vrai ou faux et sur la base de ces résultats, vous pouvez effectuer certaines actions.

Il existe plusieurs instructions en PHP que vous pouvez utiliser pour prendre des décisions :

- L'instruction if
- L'instruction if... else
- L'instruction if...elseif....else

#### La déclaration if

L'instruction if est utilisée pour exécuter un bloc de code uniquement si la condition spécifiée est vraie. Il s'agit des instructions conditionnelles PHP les plus simples et peuvent être écrites comme :

```php
<?php

 if (condition) {
   // Code à exécuter 
 }
```

--- 

#### La déclaration if... else

Vous pouvez améliorer le processus de prise de décision en proposant un choix alternatif en ajoutant une instruction else à l'instruction if. 

L'instruction if...else vous permet d'exécuter un bloc de code si la condition spécifiée est évaluée à true et un autre bloc de code si elle est évaluée à false. Il peut s'écrire, comme ceci :

```php
<?php
 if (condition) {
   // Code à exécuter si la condition est vraie
 } else {
   // Code à exécuter si la condition est fausse
 }
```

--- 

#### L'instruction if...elseif...else 

C'est une instruction spéciale utilisée pour combiner plusieurs instructions if...else.

```php
<?php

 if (condition1) {
   // Code à exécuter si condition1 est vraie
 } elseif (condition2) {
  // Code à exécuter si la condition1 est fausse et la condition2 est vraie
 } else {
  // Code à exécuter si condition1 et condition2 sont fausses
 }
```

### Instructions

Créer une variable nommée `$hour` qui récupère l'heure actuelle.

A l'aide de l'instruction `if elseif else`, écrire un script qui va afficher une chaine de caractère en fonction de l'heure du jour.

- Si l'heure est entre 6h et 12h inclus affichez : Bonjour ! Passe une bonne journée :)


- Si l'heure est entre 12h et 18h inclus affichez : Passe une bonne après midi !


- Si l'heure est entre 18h et 21h inclus affichez : Passe une bonne après midi !


- Sinon affichez : Bonne nuit ! A demain :) 

### Notions

- [if elseif else](https://www.php.net/manual/fr/control-structures.elseif.php)
