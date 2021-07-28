### That's anonymous

#### Explications

#### Fonction anonyme

Lorsque vous définissez une fonction, vous lui spécifiez un nom. Plus tard, vous pouvez appeler la fonction par le nom.

Par exemple, pour définir une fonction qui multiplie deux nombres, vous pouvez procéder comme suit :

```php
<?php

function multiply(int|float $x, int|float $y): int|float
{
    return $x * $y;
}
```

La fonction multiply() accepte deux arguments et renvoie le résultat. Pour appeler la fonction multiply(), vous lui passez les arguments comme ceci :

```php
<?php

multiply(10, 20);
```

Dans cet exemple, multiply() est une fonction nommée. Et vous pouvez le réutiliser autant de fois que vous le souhaitez.

Outre les fonctions nommées, PHP vous permet de définir des fonctions `anonymes`.

Une fonction anonyme est une fonction qui n'a pas de nom.

L'exemple suivant définit une fonction anonyme qui multiplie deux nombres :

```php
<?php

function (int|float $x, int|float $y): int|float 
{
    return $x * $y;
};
```

Comme la fonction n'a pas de nom, vous devez la terminer par un point-virgule (;) car PHP la traite comme une expression.

Cette fonction anonyme n'est pas du tout utile car vous ne pouvez pas l'utiliser comme une fonction nommée.

Pour utiliser une fonction anonyme, vous devez l'affecter à une variable et appeler la fonction via la variable.

L'exemple suivant affecte la fonction anonyme à la variable $multiply :

```php
<?php

$multiply = function (int|float $x, int|float $y): int|float {
    return $x * $y;
};
```

Et cela appelle la fonction anonyme via la variable $multiply :

```php
<?php

echo $multiply(10, 20);
```

#### Portée des fonctions anonymes

Par défaut, une fonction anonyme ne peut pas accéder aux variables depuis sa portée parent. Par exemple :

```php
<?php

$message = 'Salut';
$say = function () {
    echo $message;
};

$say();
```

Retour PHP : 

```
PHP Notice:  Undefined variable: message in ...
```

Dans cet exemple, la fonction anonyme tente d'accéder à la variable $message à partir de sa portée parent. Cependant, il ne le pouvait pas. Par conséquent, PHP a retourné une erreur.

Pour utiliser les variables de la portée parent dans une fonction anonyme, vous placez les variables dans la construction `use` comme suit :

```php
<?php

$message = 'Salut';
$say = function () use ($message) {
    echo $message;
};

$say();
```

Maintenant, cela devrait fonctionner correctement.

Notez que le message $ est passé à la fonction anonyme par valeur, et non par référence. Si vous le modifiez à l'intérieur de la fonction anonyme, le changement ne se reflétera pas à l'extérieur de la fonction. Par exemple:

```php
<?php

$message = 'Salut';

$say = function () use ($message) {
    $message = 'Bonjour';
    echo $message;
};

$say();

echo $message;
```

Dans cet exemple, à l'intérieur de la fonction anonyme, la valeur du message $ est 'Salut'. Cependant, en dehors de la fonction anonyme, la valeur du message reste la même que 'Bonjour'.

Si vous souhaitez passer une variable à une fonction anonyme par référence, vous devez utiliser l'opérateur `&` comme dans l'exemple suivant :

```php
<?php

$message = 'Salut';

// $message passage par référence
$say = function () use (&$message) {
    $message = 'Bonjour';
    echo $message;
};

$say();

echo $message;
```

Maintenant, vous voyez les messages « Bonjour » deux fois.

### Instructions



### Notions

- [Anonymous functions](https://www.php.net/manual/fr/functions.anonymous.php)