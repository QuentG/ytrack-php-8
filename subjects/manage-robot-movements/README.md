### Manage robot movements

### Instructions

Les testeurs des robots ont demandé une façon plus simple de diriger les robots à distance. Ils aimeraient saisir une liste de caractères correspondant aux mouvements voulus. Par exemple: 'RRLFBF'.

```
Table de conversion :
----------------
R | RIGHT
L | LEFT
F | FRONT
B | BACKWARDS
```

Créez une fonction `manageMovements` qui prend une chaine de caractères parmi R, L, F, B et retourne un array contenant la liste des instructions à donner au robot.

**Attention** si l'utilisateur a tappé une instruction en double (RR, LL, FF, BB), à la deuxième instruction, indiquez par exemple 'RIGHT AGAIN'.

### Notions

- [Associative Arrays](https://www.w3schools.com/php/php_arrays_associative.asp)
