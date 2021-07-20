### This is magic

### Explications

Certaines fonctions prédéfinies par le compilateur php qui s'exécutent sur certains événements sont appelées `méthodes magiques` 🧙‍♂️. 

Les méthodes magiques commencent par le préfixe `__`, par exemple __construct, __get, __set. Il existe différents types de méthodes magiques en php. 

Liste ci-dessous : 

- __construct : est appelée lorsque nous créons un objet de notre classe. Fondamentalement, cela est utilisé pour créer un constructeur dans php5.


- __destruct : est appelée lorsque l'objet de notre classe n'est pas défini. C'est juste à l'opposé de __construct.


- __get : est appelé lorsque notre objet tente de lire une propriété ou une variable de la classe qui est inaccessible ou indisponible.


- __set : est appelé lorsqu'un objet de notre classe tente de définir la valeur de la propriété qui est vraiment inaccessible ou indisponible dans notre classe.


- __isset : les méthodes __isset se déclenchent lorsque la fonction isset() est appliquée sur n'importe quelle propriété de la classe qui est inaccessible ou indisponible.


- __unset : __unset est quelque chose à l'opposé de la méthode isset. Cette méthode se déclenche lorsque la fonction unset() est appelée sur une propriété inaccessible ou indisponible de la classe.


- __call : déclencheur de méthode magique __call lorsque nous essayons d'appeler une méthode ou une fonction de la classe qui est soit inaccessible, soit indisponible.


- __callstatic : __callstatic execture lorsque la méthode inaccessible ou indisponible est dans un contexte statique.


- __sleep : les méthodes __sleep se déclenchent lorsque nous allons sérialiser votre objet de classe.


- __wakeup : __wakeup s'exécute lorsque nous dé-sérialisons un objet de classe.


- __toString : __toString s'exécute lorsque vous utilisez echo sur votre objet.


- __invoke : __invoke appelé lorsque nous utilisons l'objet de votre classe comme fonction

Les méthodes magiques ci-dessus de php s'exécutent lorsque certains événements spécifiques se produisent sur votre objet de classe. 

Par exemple, si vous faites simplement écho à votre objet, la méthode __toString se déclenche.

### Instructions

Créer une classe nommée `Magic` et implémentez-y les méthodes magiques suivantes : 

- __construct
- __destruct
- __get
- __set
- __isset
- __toString

Dans chacune de ses méthodes implémenter un echo qui signalera bien l'utilisation de chaque méthode.

Créer aussi une propiété publique nommée `card` qui sera de type string et qui aura pour valeur par defaut : 'As'

### Notions

- [Magic methods](https://www.php.net/manual/en/language.oop5.magic.php)
