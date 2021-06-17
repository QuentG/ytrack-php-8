<?php

$tests = [];

$reflection = new ReflectionFunction('createCheckboard');

$tests[] = static fn ($eq): bool => $eq($reflection->getNumberOfParameters(), 1);
$tests[] = static fn ($eq): bool => $eq($reflection->getNumberOfRequiredParameters(), 1);
$tests[] = static fn ($eq): bool => $eq($reflection->hasReturnType(), true);

$tests[] = static fn ($eq): bool => $eq(
    createCheckboard(2),
    [
        "0", "X",
        "X", "0"
    ]
);

$tests[] = static fn ($eq): bool => $eq(
    createCheckboard(5),
    [
        "0", "X", "0", "X", "0",
        "X", "0", "X", "0", "X",
        "0", "X", "0", "X", "0",
        "X", "0", "X", "0", "X",
        "0", "X", "0", "X", "0"
    ]
);