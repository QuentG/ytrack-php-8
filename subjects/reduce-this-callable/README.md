### Reduce this callable

### Explications

#### Callable

Le mot clé `callable` est utilisé pour forcer un argument de fonction à être une référence à une fonction.

Un `callable` (appelable en français) peut être l'un des suivants :

- Une fonction anonyme
- Une chaîne contenant le nom d'une fonction
- Un tableau décrivant une méthode de classe statique
- Un tableau décrivant une méthode objet

---

Exemples basiques : 

```php
// Cette fonction attend un callable en premier paramètre.
function printFormatted(callable $format, string $str) {
  echo $format($str);
  echo PHP_EOL;
}

// Fonction anonyme
$func = static fn ($str) => substr($str, 0, 5);
printFormatted($func, "Hello World");

// Une chaîne contenant le nom d'une fonction
printFormatted("strtoupper", "Hello World");
```

Output : 
```php
Hello
HELLO WORLD
```
---

Exemples avec un objet : 

```php
class MyClass 
{
  public static function ask(string $str): string 
  {
     return $str . "?";
  }
  
  public function brackets(string $str): string 
  {
     return "[$str]";
  }
}

// Un tableau décrivant une méthode de classe statique
printFormatted(["MyClass", "ask"], "Hello World");

//  Un tableau décrivant une méthode objet
printFormatted([new MyClass(), "brackets"], "Hello World");
```

Output :
```php
Hello World?
[Hello World]
```

### Instructions

Recréer la fonction native `array_reduce` qui vous nommerez `myArrayReduce`.

Bien évidemment vous n'êtes pas autorisé à utiliser `array_reduce`.

### Notions

- [Callable](https://www.php.net/manual/fr/language.types.callable.php)
- [php.net/manual/fr/function.array-reduce.php](https://www.php.net/manual/fr/function.array-reduce.php)
