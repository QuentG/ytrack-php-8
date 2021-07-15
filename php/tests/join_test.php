<?php

$tests = [];

$reflection = new ReflectionFunction('joinWords');
$functionContent = getFunctionContent($reflection);

$tests[] = static fn ($eq): bool => $eq($reflection->getNumberOfParameters(), 2);
$tests[] = static fn ($eq): bool => $eq($reflection->getNumberOfRequiredParameters(), 1);
$tests[] = static fn ($eq): bool => $eq($reflection->hasReturnType(), true);
$tests[] = static fn ($eq): bool => $eq(str_contains($functionContent, "join"), false); // Not authorized to use php function "join"
$tests[] = static fn ($eq): bool => $eq(str_contains($functionContent, "implode"), false); // Not authorized to use php function "implode"

$tests[] = static fn ($eq): bool => $eq(gettype(joinWords([])), 'string');
$tests[] = static fn ($eq): bool => $eq(gettype(joinWords([], "-")), 'string');

$tests[] = static fn ($eq): bool => $eq(joinWords(['La', 'fonction', 'join']), "La fonction join");
$tests[] = static fn ($eq): bool => $eq(joinWords(['La', 'fonction', 'join'], "-"), "La-fonction-join");
$tests[] = static fn ($eq): bool => !$eq(joinWords(['La', 'fonction', 'join'], "-"), "La fonction join");

