### Invert binary tree

### Instructions

Créer une fonction `invertTree(BinaryNode): BinaryNode` qui va inverser un arbre binaire.

En utilisant le code suivant : 
```php
// Arborescence des données
class BinaryNode
{
    public ?int $value = null; // Node value
    public ?BinaryNode $left = null; // Left child
    public ?BinaryNode $right = null; // Right child

    public function __construct(int $value)
    {
        $this->value = $value;
    }
}
```

Exemples d'utilisations : 

```php
/**
 * Exemple d'inversion :
 *
 *      1
 *    /   \
 *   2     3
 *  / \   / \
 * 4   5 6   7
 *
 * Vers :
 *
 *      1
 *    /   \
 *   3     2
 *  / \   / \
 * 7   6 5   4
 */

 // Usage de base
 $root = new BinaryNode(1);
 $rootLeftChild = new BinaryNode(2);
 $rootRightChild = new BinaryNode(3);

 $root->left = $rootLeftChild;
 $root->right = $rootRightChild;
 
 echo $root->value; // 1
 echo $root->left->value; // 2
 echo $root->right->value; // 3 

 $invertedTree = invertTree($root);

 echo $invertedTree->value; // 1
 echo $invertedTree->left->value; // 3
 echo $invertedTree->right->value; // 2
```

### Notions

- [Binary tree](https://en.wikipedia.org/?title=Binary_tree)