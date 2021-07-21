### Many fuel

### Explications

#### Visibilité

PHP 5 introduit la notion de visibilité de méthodes et d'attributs. Chaques attributs et méthodes peuvent se voir attribuer un droit d'accès. 

Le principe de l'encapsulation voudrait que l'on mette tous les attributs uniquement modifiables et accessibles à l'intérieur de la classe, et les méthodes accessibles de l'extérieur. En pratique, ce n'est pas toujours le cas.

Les trois mots permettant de gérer les accès sont ceux-ci :

- `public` : n'importe qui a accès à la méthode ou à l'attribut demandé.
- `protected` : seule la classe ainsi que ses sous classes éventuelles (classes héritées, on verra ce que c'est plus loin).
- `private` : seule la classe ayant défini l'élément peut y accéder.

Pour la classe Voiture, vous pouvez constater que les attributs ne sont pas modifiables à l'extérieur de la classe, il faut passer par les **méthodes appropriées**.

Pour accéder à un attribut d'une classe, on utilise ce code : $objet->attribut

Exemple : 

```php
<?php

 class Voiture 
 {
      //  ↙ Visibilité sur les attributs
      private float $niveauCarburant;
      protected int $nombrePortes;
      public int $nombreRoues;

      //  ↙ Visibilité sur les fonctions
      public function __construct()
      {
           $this->niveauCarburant = 45.4;
           $this->nombrePortes = 3;
           $this->nombreRoues = 4;
      }
 }
```

---

#### Accesseurs && mutateurs

En règle générale, on n'accède pas directement aux attributs d'un objet. Pour lire et modifier leurs valeurs, on passe par des méthodes qui permettent de sécuriser leur utilisation.

Ces méthodes s'appellent des accesseurs (getter) pour lire leurs valeurs et des mutateurs (setter) pour modifier leurs valeurs.

Une des conventions souvent utilisée est de reprendre le nom de l'attribut pour créer les méthodes, en ajoutant `get` pour les accesseurs et `set` pour les mutateurs

Exemple : 

```php
<?php

 class Voiture 
 {
      // Attributs && Constructeur    
     
      // ....
     
      // Getters
      public function getNiveauCarburant(): float
      {
          return $this->niveauCarburant;
      }
      
      public function getNombrePortes(): int
      {
          return $this->nombrePortes;
      }
      
      public function getNombreRoues(): int
      {
          return $this->nombreRoues;
      }
     
      // Setters 
      public function setNiveauCarburant(float $niveauCarburant): self
      {
          $this->niveauCarburant = $niveauCarburant;
          
          return $this;
      }
      
      public function setNombrePortes(int $nombrePortes): self
      {
          $this->nombrePortes = $nombrePortes;
          
          return $this;
      }
      
      public function setNombreRoues(int $nombreRoues): self
      {
          $this->nombreRoues = $nombreRoues;
          
          return $this;
      }
 }
```

Résultat : 

```php
<?php

$voiture = new Voiture(); // Instanciation d'une nouvelle voiture

$voiture->niveauCarburant; // Fatal Error !!
$voiture->nombrePortes; // Fatal Error !!
$voiture->nombreRoues; // 4

$voiture->getNiveauCarburant(); // 45.4
$voiture->getNombrePortes(); // 3
$voiture->getNombreRoues(); // 4

$voiture->setNiveauCarburant(100) // Changement du niveau de carburant + nombre de portes 
    ->setNombrePortes(2);
    
$voiture->getNiveauCarburant(); // 100
$voiture->getNombrePortes(); // 2
```

> Tous les accesseurs (setters) retourne le mot clé `$this`, ce principe s'appelle le chainage de méthodes ou plus communément en anglais `Fluent methods`.

### Instructions

Nous voulons mesurer la quantité de carburant que nous avons dans le réservoir de notre voiture. 

La quantité de carburant dans le réservoir dépend du nombre de kilomètres que nous avons parcourus dans notre voiture, ainsi que de la quantité de carburant que nous mettons dans le réservoir.

Créer une classe nommée `Car` avec une propriété privée nommée `tank` le nombre de gallons de carburant que nous avons dans le réservoir de la voiture.

Créer aussi les accesseurs / mutateurs.

Nous devons également ajouter deux méthodes à notre classe `Car` :

- Le mutateur de la propriété `tank` ajoute des gallons de carburant au réservoir de notre voiture.
- La méthode `ride($float)` calcule la quantité de carburant que nous consommons lorsque nous parcourons une certaine distance, puis la soustrait du réservoir.

Dans notre exemple, nous supposons que la voiture consomme 1 gallon de carburant tous les 20 Kilomètres.

⚠ Toutes les méthodes (sauf mutateur) doivent être accessible de manière fluent.

### Notions

- [Visibility](https://www.php.net/manual/en/language.oop5.visibility.php)
- [Accesseurs & Mutateurs](http://fyligrane.fr/3_php/12_POO%20:%20premiers%20pas/5_Accesseurs%20et%20mutateurs.html)
- [Fluent methods](https://smbjorklund.no/php-method-chaining-fluent-interface)