### Foreach letters

### Explications

La structure de langage `foreach` fournit une façon simple de parcourir des tableaux. 

foreach ne fonctionne que pour les tableaux et les objets, et émettra une erreur si vous tentez de l'utiliser sur une variable de type différent ou une variable non initialisée. 

Il existe deux syntaxes :

```php
foreach (iterable_expression as $value) {
    //commandes
}

foreach (iterable_expression as $key => $value) {
//commandes
}
```

### Instructions

A l'aide d'une instruction foreach écrire un programme affichant l'alphabet.

Astuce : utilisé la fonction `range`.

Résultat attendu : 

```php
A | B | C | D | E | F | G | H | I | J | K | L | M | N | O | P | Q | R | S | T | U | V | W | X | Y | Z
```

**Le script ne doit pas faire plus de 5 lignes**

### Notions

- [php.net/manual/en/control-structures.foreach.php](https://www.php.net/manual/en/control-structures.foreach.php)
