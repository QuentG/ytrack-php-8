<?php

$tests = [];

$reflection = new ReflectionFunction('joinWords');

$tests[] = static fn ($eq): bool => $eq($reflection->getNumberOfParameters(), 2);
$tests[] = static fn ($eq): bool => $eq($reflection->getNumberOfRequiredParameters(), 1);
$tests[] = static fn ($eq): bool => $eq($reflection->hasReturnType(), true);
$tests[] = static fn ($eq): bool => $eq(gettype(joinWords([])), 'string');
$tests[] = static fn ($eq): bool => $eq(gettype(joinWords([], "-")), 'string');

$tests[] = static fn ($eq): bool => $eq(joinWords(['La', 'fonction', 'join']), "La fonction join");
$tests[] = static fn ($eq): bool => $eq(joinWords(['La', 'fonction', 'join'], "-"), "La-fonction-join");
$tests[] = static fn ($eq): bool => !$eq(joinWords(['La', 'fonction', 'join'], "-"), "La fonction join");

