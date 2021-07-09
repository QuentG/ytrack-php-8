### I want a car

### Explications

La `POO` ⚡ (programmation orientée objet) est une forme particulière de programmation destinée à faciliter la maintenance et la réutilisation / adaptation de vos scripts PHP. Elle consiste à représenter des objets (du monde réel ou non) sous une forme d'entités informatiques. On représente généralement un objet global par ce que l'on appelle une classe. 

Une classe va regrouper un ensemble de fonctions et de propriétés pouvant agir sur l'objet. Si on prend par exemple une voiture dans le monde réel, on peut modéliser une voiture par une classe `Voiture` qui aura comme propriétés le nombre de roues, le nombre de portes, etc ...

#### Les classes : 

Une classe regroupe des fonctions et des variables (appelées cette fois `attributs`, car il s'agit des attributs d'une classe) qui interragissent avec l'objet. C'est à dire que pour un objet `voiture` par exemple, vous aurez une classe nommée `Voiture` et vous pourrez avoir une fonction qui modifie le niveau de carburant (le niveau de carburant étant un attribut de la classe que l'on ne peut modifier que via une fonction (appelée `méthode`) qui ira modifier cet attribut). 

On appelle ce principe **l'encapsulation des données**, le but de l'encapsulation des données étant de ne pas pouvoir accéder aux données de l'objet directement mais via des fonctions (appelées ici `méthodes`). Chaque attribut peut donc disposer de droits d'accès à l'extérieur de la classe

Voyons de suite un exemple pour illuster tout cela :

```php
<?php

 class Voiture 
 {
      /** Déclaration des attributs */
      private int $niveauCarburant;
      private int $nombrePortes;
      private int $nombreRoues;

      /**
      * Cette méthode un peu spéciale est le constructeur, 
      * elle est exécutée lorsque vous "créez" votre objet. 
      * Elle doit initialiser les attributs de la classe.
      */
      public function __construct()
      {
           $this->niveauCarburant = 50;
           $this->nombrePortes = 3;
           $this->nombreRoues = 4;
      }
 }
```

Okkkk bon maintenant que l'on a notre objet... comment on fait pour s'en servir ? 🤔

#### Créer un objet (instanciation d'une classe)

Voici comment on crée un objet Voiture en PHP :

- Instanciation grâce au mot clé new suivi du nom de l'objet.

```php
<?php

$voiture1 = new Voiture(); // Instanciation d'une nouvelle voiture

var_dump($voiture1);

-> object(Voiture)#1 (3) {
  ["niveauCarburant"] => int(50)
  ["nombrePortes"] => int(3)
  ["nombreRoues"] => int(4)
}
```



### Instructions



### Notions

- Programmation orientée objet (POO)