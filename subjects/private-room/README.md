### Private room

### Explications


```php
<?php

 class Voiture 
 {
      //  ↙ Visibilité        
      private float $niveauCarburant;
      protected int $nombrePortes;
      public int $nombreRoues;

      public function __construct()
      {
           $this->niveauCarburant = 45.4;
           $this->nombrePortes = 3;
           $this->nombreRoues = 4;
      }
      
      public function getNiveauCarburant(): float
      {
           return $this->niveauCarburant;
      }
      
      public function getNombrePortes(): int
      {
          return $this->nombrePortes;
      }
 }
```

Resultat : 

```php
<?php

$voiture = new Voiture(); // Instanciation d'une nouvelle voiture

$voiture->niveauCarburant; // Fatal Error !!
$voiture->nombrePortes; // Fatal Error !!
$voiture->nombreRoues; // 4

$voiture->getNiveauCarburant(); // 45.4
$voiture->getNombrePortes(); // 3
```

### Instructions

### Notions

- [Visibility](https://www.php.net/manual/en/language.oop5.visibility.php)
