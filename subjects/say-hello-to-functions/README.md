### say-hello-to-functions

### Explanations

Now that the basics of `variables` and `loops` are in place, we will finally be able to see how to build our own `functions` 👀.

Let's see an example and explain him !

```php
function foo(): string 
{
    return "Foo";
}
```

To create a function, we use the `function` instruction followed by the name we want to give to this function (`foo` here), followed by 2 parentheses.
Since _php 7.3_ you can specify the return type of the function by putting a colon, and the type (`: string` here).

The instructions to be executed when this function is called will be placed between two braces.

### Instructions

Create a function `sayHello` who say "Hello".

### Notions

- [How to create php function](https://www.w3schools.com/php/php_functions.asp)