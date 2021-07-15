### Heat my swimming pool ?

### Explications

Les interfaces objets sont des contrats que les classes qui les implémentent doivent remplir. Ils contiennent des méthodes vides qui forcent une classe à les utiliser, promouvant ainsi un standard de développement.

Si une classe implémente une interface, elle est obligée d'utiliser toutes les méthodes de la même (et les mêmes types d'arguments des méthodes), sinon elle donnera une erreur fatale. Plusieurs interfaces peuvent être utilisées dans chaque classe, et elles peuvent être étendues entre elles à l'aide d'`extends`. Une interface peut étendre une ou plusieurs interfaces.

Toutes les méthodes déclarées dans une interface doivent être publiques.

Pour définir une interface il faut utiliser le mot clé `interface`. Et pour l'implémenter `implements`

Exemple : 

```php
interface Entretien // Création de l'interface
{ 
    // Fonction avec param qui ne retourne rien
    public function peindre(string $couleur): void;
    // Fonction sans param qui ne retourne rien
    public function nettoyer(): void;
}

class Voiture implements Entretien 
{
    private string $couleur = "Vert";
    private bool $propre = false;
    
    // Obligation d'implémenter les deux fonctions sinon erreur fatale.  
    public function peindre(string $couleur): void
    {
       $this->couleur = $couleur;   
    } 
    
    public function nettoyer(): void
    {
       $this->propre = true;
    }
}

class Moto implements Entretien 
{
    private string $couleur = "Rouge";
    private bool $propre = false;
      
    // Obligation d'implémenter les deux fonctions sinon erreur fatale.  
    public function peindre(string $couleur): void
    {
       $this->couleur = $couleur;   
    } 
    
    public function nettoyer(): void
    {
       $this->propre = true;
    }
}
```

### Instructions

On souhaite réaliser la fonction permettant d’allumer le chauffage d’une piscine automatiquement en fonction de la température actuelle, et de la température moyenne des derniers jours.

Créer une interface nommée `PoolTempsInterface` qui définira les fonctions suivantes :
- getActualTemp() : Retourne la température actuelle.
- getLastDaysTemps() : Retourne la liste des températures des 7 derniers jours.
- setHeater(bool) : Allume ou éteint le chauffage de la piscine en fonction du booléen.

Créer ensuite une classe nommée `PoolTemps` qui implémentera la `PoolTempsInterface`. 
Implémenter les différentes fonctions puis créer une fonction `activateHeater` qui permettra de déclencher le chauffage si toutes les conditions sont réunies :

- La température moyenne des 7 derniers jours est supérieure à 20°
- La température actuelle est supérieure à 25°

Exemples d'utilisations : 
```php
$poolTemps = new PoolTemps(25, [19, 20, 21, 16, 19, 23, 20]);
$poolTemps->activateHeater();

var_dump($poolTemps->isActive); // false

$poolTemps2 = new PoolTemps(26, [24, 26, 27, 25, 27, 23, 20]);
$poolTemps2->activateHeater();

var_dump($poolTemps2->isActive); // true
```

### Notions

- [OOP Interface](https://www.php.net/manual/en/language.oop5.interfaces.php)
