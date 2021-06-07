<?php

$tests = [];

$reflection = new ReflectionFunction('getDirection');

$tests[] = static fn ($eq): bool => $eq($reflection->getNumberOfParameters(), 3);
$tests[] = static fn ($eq): bool => $eq($reflection->hasReturnType(), true);

$tests[] = static fn ($eq): bool => $eq(getFloor(1, null, []), null);
$tests[] = static fn ($eq): bool => $eq(getFloor(1, 1, []), 1);
$tests[] = static fn ($eq): bool => $eq(getFloor(1, 1, [2]), 1);
$tests[] = static fn ($eq): bool => $eq(getFloor(0, null, [-3, 2]), 2);
$tests[] = static fn ($eq): bool => $eq(getFloor(3, null, [1, 7]), 1);

$tests[] = static fn ($eq): bool => $eq(getDirection(0, 1, []), 1);
$tests[] = static fn ($eq): bool => $eq(getDirection(0, 0, []), 0);
$tests[] = static fn ($eq): bool => $eq(getDirection(5, 4, []), -1);