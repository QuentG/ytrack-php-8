### Spotify 🎶

### Instructions

Créez une base de données de vos musiques préférées ! Elle devra conserver des informations sur toutes les chansons ajoutées. 

Sur la première ligne, vous obtiendrez le nombre de chansons que vous allez essayer d'ajouter. 

Sur les lignes suivantes, vous obtiendrez les chansons à ajouter au format : 

`<nom de l'artiste>;<nom de la chanson>;<minutes:secondes>` 

Pour être valide, chaque chanson doit avoir un nom d'artiste, un nom de chanson et une durée.

Pour ce faire vous allez devoir créer les classes suivantes : 

---

- `Song` : 
    - string artist
    - string title
    - string duration

Un constructeur est attendu.

Faites le nécessaire pour pouvoir récupérer + modifier toutes ces propriétés.    

---
- `Playlist`
    - array[Song] songs
    - int totalMedias

Aucun constructeur n'est attendu.

Méthodes attendues : 
 - addMedia(Song) : mettra à jour la liste des sons + le nombre total de sons.
 - __toString(): cette méthode retournera le texte suivant 

Si nous ajoutons 3 sons : 

```
Songs added: 3
Playlist length: 0h 10m 45s
```

---

Pour finir vous allez devoir créer une classe nommée `App` qui sera le point central pour faire fonctionner notre nouveau Spotify !

Cette classe devra avoir une propriété nommée `content` qui sera de type string. Ceci correspond aux différentes musiques à ajouter à nos playlist.

Exemple du contenu : 

```php
["ABBA;Mamma Mia;3:35\n", "Nasko Mentata;Shopskata salata;4:123\n", "Nasko Mentata;Shopskata salata;4:12"];
```

Faites le nécessaire pour pouvoir récupérer + modifier cette propriété. 

Aucun constructeur n'est attendu.

Cette classe devra avoir les méthodes suivantes : 
- start() : lance le programme
- readLine(bool): lis le contenu du tampon de sortie
- write(string): écrit une nouvelle ligne avec dans le tampon de sortie

En utilisant le code suivant : 
```php
private function readLine(bool $asArray = false): array|bool|string
{
    ob_start();

    echo implode("", $this->getContent());

    $data = ob_get_contents();
    if ($asArray) {
        $data = explode("\n", ob_get_contents());
    }

    ob_clean();

    return $data;
}
```

Resultat attendu : 

```php
$app = new App();
$app->setContent(["ABBA;Mamma Mia;3:35\n", "Nasko Mentata;Shopskata salata;4:123\n", "Nasko Mentata;Shopskata salata;4:12"]);
$app->start();

Sortie : 
Songs added: 3
Playlist length: 0h 10m 45s

$app2 = new App();
$app2->setContent(["JUL;Alors la zone;3:25\n", "Naps;La kiffance;2:59\n", "2TH;Si seulement;4:09\n", "Vayn;24H chrono;3:48"]);
$app2->start();

Sortie :

Songs added: 4
Playlist length: 0h 13m 40s
```

### Notions

- [Tampon de sortie](https://tutowebdesign.com/flux-sortie-php.php)