### Primitive declarations

### Welcome !

Welcome to the PHP Pool ! The idea of this pool is to introduce you to `PHP` (fabulous language).
In this course we will see the basics of the language, (variables, conditions, ...) to the fundamentals of OOP (Object-oriented programming).

### Explanations

The very **first thing** to learn in any language is *"How do I declare a variable ?"*

```php 
$myVariable = "Easy no ?";
```

> You can notice that we used [camelCase](https://en.wikipedia.org/wiki/Camel_case) (best of all 🔥) for the variable name.

Any variable must be declared by means of the dollar sign `$` followed obligatorily by letters (in upper or lower case) or by an underscore (underscore _). 

Below is a summary table of incorrect variable declaration syntaxes.

```php
$var 1 = "toto"; // No space
$var-1 = "toto"; // No dash
$-var = "toto"; // No dash
$20var = "toto"; // Cannot start with a number
var = "toto"; // Necessarily a $ in front of the name
```

> **_Note_** : PHP is one of the few programming languages that accepts accented characters in variable names. However, using them is strongly discouraged for reasons of maintenance and portability.

### Instructions

Create the following variables :

- `firstStr` which is a string of words.
- `firstEscapeStr` which is a word string containing a new line break character.
- `firstBool` is a boolean.
- `firstInteger` is an integer.
- `firstFloat` is an Float.
- `firstNull` is NULL.

- `firstArray` is an array containing a property for each primitive types :
    - Ordered values : `2, null, 'Hi', 5.5, false`

### Notions

- Variables
- Primitive types
- [php.net/manual/fr/language.variables.basics.php](https://php.net/manual/fr/language.variables.basics.php)