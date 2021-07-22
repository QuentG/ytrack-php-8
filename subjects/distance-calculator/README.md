### Distance calculator 🚀

### Explications

Pour définir une méthode statique, vous placez le mot-clé static devant le mot-clé function comme suit :

```php
<?php

 class MyClass
 {
	public static function staticMethod()
	{
	     // Static method code...
	}
 }
```

Puisqu'une méthode statique est liée à une classe, et non à une instance individuelle de la classe, vous ne pouvez pas accéder à $this à l'intérieur de la méthode. Cependant, vous pouvez accéder à une variable spéciale appelée self. 

La variable `self` désigne la classe actuelle.

Ce qui suit montre comment appeler une méthode statique depuis l'intérieur de la classe :
```php
self::staticMethod(arguments);
```

Pour appeler une méthode statique depuis l'extérieur de la classe, vous utilisez la syntaxe suivante :
```php
className::staticMethod(arguments);
```

Exemple :

```php
MyClass::staticMethod();
```

### Instructions

Créer une classe `Geolocation`.

Dans cette classe créer une méthode statique `fromGeoPoints` qui va calculer la distance en deux coordonnées géographiques.

Le résultat retourné sera un tableau avec la distance en `kilomètre`

⚠ Le résultat doit être arrondi à deux chiffres après la virgule.

Exemple : 
```php
<?php

$calc = Geolocation::fromGeoPoints(40.76, -73.984, 38.89, -77.032); // 333.09
```

### Notions 

- [php.net/manual/en/language.oop5.static.php](https://www.php.net/manual/en/language.oop5.static.php)