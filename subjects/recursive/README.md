### Recursive

### Explanations

A recursive function is a function that calls itself.

They are generally used to handle a case with an infinite number of possibilities and stop when the exit condition is reached.

Example : 

```php
function recursive($arg1, $arg2, ...) 
{
    // Start code
    // ...
    recursive($arg1 + 2, $arg2 - 1, ...);
    // ...
    // End code
}
```

### Instructions

Create a function `factorial`  who calculate de factorial of the number passed in argument. 

`factorial` with the following available parameters :
- The number : `int`

### Notions

- Recursive function
- [en.wikipedia.org/wiki/Factorial](https://en.wikipedia.org/wiki/Factorial)