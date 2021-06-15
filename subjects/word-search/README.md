### Word search

### Instructions

I want to be master of crosswords !!
But for that I have to find words in a table... OK LET'S GO !

Create a function `searchWord`  which will look for a string of characters in a given array.

`searchWord` with the following available parameters :
- The board : `array`
- The string to search : `string`

Use this array : 
```php
$board = [
    ['a', 'b', 'c', 'd'],
    ['d', 'k', 'l', 'm'],
    ['m', 'f', 'b', 's']
];
```

Example :
```php
// Word can be constructed form letters of sequentially adjacent cell,
// where 'adjacent' cells are those horizontally or vertically neighboring.
searchWord($board, 'abcd'); // true
searchWord($board, 'abcl'); // true
searchWord($board, 'admfbl'); // true

// It's not allowed to use the same letter twice
searchWord($board, 'abcc'); // false
searchWord($board, 'abcdc'); // false
searchWord($board, 'dklml'); // false
```

### Notions

- Multidimensional array
- [php.net/manual/en/functions.arguments.php](https://www.php.net/manual/en/functions.arguments.php)
- [php.net/manual/en/language.types.array.php](https://www.php.net/manual/en/language.types.array.php)
- [php.net/manual/en/function.array-keys.php](https://www.php.net/manual/en/function.array-keys.php)
- [php.net/manual/en/function.in-array.php](https://www.php.net/manual/en/function.in-array.php)