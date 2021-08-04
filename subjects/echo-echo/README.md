### Echo echo

### Explications

Pour afficher une chaine de caractères en PHP, nous passons par la fonction `echo`.

Exemples : 
```php
echo "Hello guys"; // Affiche Hello guys

echo "Hello", "guys"; // Affiche Helloguys
echo "Helloguys"; // Affiche Helloguys

$name = 'toto';
echo "My name is : $name"; // Affiche My name is : toto
```

### Indications 😉

**Pour chaque exercise nécessitant des affichages à la fonction `echo`. N'oubliez de sauter une ligne a la fin chaque echo.**

Exemple : 

```php
echo "Mon premier echo" . PHP_EOL;

echo "Mon second echo" . PHP_EOL;

echo "Mon dernier echo"
```

> `PHP_EOL` est la constante qui contient le caractère de saute de ligne `\n`

### Instructions

- Créer une variable `myVariable` avec la valeur 12.
- Afficher à l'aide d'un echo la phrase : "This is my first echo !" avec un espace à la fin de la ligne.
- Afficher à l'aide d'un echo la phrase : "My variable : (contenu de la variable myVariable)".

**Le script doit faire exactement 3 lignes**.

_Ps : Les lignes blanches + la ligne "<?php" ne sont pas prises en compte._

### Notions

- [php.net/manual/en/function.echo.php](https://www.php.net/manual/en/function.echo.php)
- [php.net/manual/fr/language.types.string.php](https://www.php.net/manual/fr/language.types.string.php)
