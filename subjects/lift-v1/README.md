### Lift v1

### Instructions

We consider an elevator with the following operation : 
  - The elevator goes in priority to the requested floor 
  - If it is called, the elevator goes in the direction of the nearest called-up floor 
  - The elevator stops to the floors requested or called

Create a function called `getFloor` which will take care of retrieving the floor to which the elevator must go.

`getFloor` with the following available parameters :
- The current floor of the elevator : `int`
- The requested floor : `int|null`
- The list of called buttons : `array`

Create a function `getDirection` to give the direction in which the elevator should move. The function must return an integer = 0 if no movement is necessary, -1 to go down, and +1 to go up.

`getDirection` with the following available parameters : 
  - The current floor of the elevator : `int` 
  - The requested floor : `int|null` 
  - The list of called buttons : `array`

### Notions

- [php.net/manual/en/functions.arguments.php](https://www.php.net/manual/en/functions.arguments.php)