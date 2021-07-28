### Geometry master

### Explications

#### Qu'est-ce qu'une classe abstraite ?

Nous définissons une classe abstraite en utilisant le mot-clé `abstract`. Une classe définie comme abstraite ne **peut pas être instanciée**.

Voici quelques points importants concernant la classe et la méthode abstraites :

- Une classe abstraite peut avoir des méthodes et des propriétés comme n'importe quelle autre classe normale.
- Une classe abstraite ne peut pas être instanciée, nous devons créer une classe enfant qui l'étend, puis nous pouvons créer un objet de la classe enfant.
- Si une classe a ne serait-ce qu'une seule méthode abstraite, alors la classe devrait également être abstraite.
- Une méthode abstraite n'est que la déclaration où nous fournissons le nom de la méthode et l'argument, tandis que la partie corps est vide.
  
Ne vous inquiétez pas si c'est trop dur pour vous de comprendre. Nous allons couvrir tous les points étape par étape avec des exemples, commençons par comprendre comment nous créons une classe abstraite ;). 

---

#### Créer une classe abstraite

Pour déclarer une classe abstraite, nous devons utiliser le mot-clé `abstract` avant le nom de la classe.

Exemple : 

```php
<?php

// abstract class
abstract class Vehicule {
  // abstract function mileage
  abstract public function kilometrage() {}
}
```

Dans l'exemple ci-dessus, notre classe Vehicule est une classe abstraite, qui a une méthode abstraite.

> L'idée derrière la création d'une classe abstraite est de contraindre les développeurs à suivre un ensemble de directives, par exemple, si vous souhaitez créer une nouvelle classe qui étend notre classe Vehicule, vous devrez alors fournir une définition pour la méthode abstraite kilometrage(), sinon le la classe enfant doit également être abstraite. 
> Par conséquent, il est obligatoire pour toutes les classes enfants de fournir une définition pour la méthode kilometrage().

---

#### Méthode non abstraite en classe abstraite

Toute classe avec même une seule méthode abstraite doit être déclarée abstraite. Mais une classe abstraite peut également avoir des méthodes non abstraites, qui peuvent être consultées et utilisées directement par les classes enfants, sans les écraser.

Étendons l'exemple ci-dessus et incluons une méthode non abstraite dans notre classe Véhicule :

```php
<?php
// abstract class
abstract class Vehicule {
    // protected variable
    protected string $name;
    
    // Non-abstract public function demarrer
    public function demarrer() {
        echo $this->name. " - La voiture démarre... \n";
    }
    
    // non-abstract public function arreter
    public function arreter() {
        echo $this->name. " - La voiture s'arrête... \n";
    }
    
    // non-abstract public function setName
    public function setName(string $name) {
        $this->name = $name;
    }
    
    // abstract function kilometrage
    abstract public function kilometrage() {}
}
```

Dans le code ci-dessus, nous avons ajouté trois méthodes non abstraites, à savoir `demarrer()`, `arreter()` et `setName()` à notre classe `Vehicule` abstraite.

---

#### Hériter des classes abstraites

Comme toute autre classe, nous pouvons également créer des classes étendant des classes abstraites.

La seule différence ici est que la classe enfant doit fournir une définition pour la méthode abstraite déclarée dans la classe parent abstraite.

Si la classe enfant ne fournit pas de définition pour la méthode abstraite, elle doit également être définie en tant que classe abstraite.

Créons deux classes enfants héritant de la classe Vehicle et qui auront une définition pour la méthode abstraite kilometrage() :

```php
<?php
// Classe enfant 1
class Voiture extends Vehicule {
    public function kilometrage() {
        echo "Je suis une " . $this->name . PHP_EOL;
        echo "Mon kilométrage moyen est entre 15 et 22 L/km";
    } 
}

// Classe enfant 2
class Moto extends Vehicule {
    public function kilometrage() {
        echo "Je suis un " . $this->name . PHP_EOL;
        echo "Mon kilométrage moyen est 35 et 47 L/km";
    }
}
```

Comme mentionné ci-dessus, une classe abstraite ne peut avoir aucun objet, une fois que nous avons défini les classes enfants appropriées, nous pouvons créer un objet pour elles.

```php
<?php

 $car = new Car();
 $car->setName("Twingo");
 $car->kilometrage();
 
 // Je suis une Twingo
 // Mon kilométrage moyen est entre 15 et 22 L/km
```

**Attention ! Si vous essayez de créer un objet de la classe Vehicule, vous obtiendrez une erreur.**

### Instructions

Créer une classe abstraite nommée `AbstractGeometry` qui aura les méthodes abstraites suivantes : 

- area() - calcule l'air de la forme géométrique
- perimeter() - calcule le périmètre de la forme géométrique

Créer ensuite une classe `Rectangle`, `Square` et `Triangle`.

Chacune de ses classes (Rectangle, Square) doit avoir un contructeur qui prend en paramètre la largeur (et la hauteur pour le rectangle).

La classe Triangle doit avoir un constructeur qui prend trois paramètres.

### Notions

- [Abstract class](https://www.php.net/manual/fr/language.oop5.abstract.php)
