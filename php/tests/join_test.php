<?php

$tests = [];

$tests[] = static fn ($eq): bool => $eq(gettype(joinWords([])), 'string');
$tests[] = static fn ($eq): bool => $eq(gettype(joinWords([], "-")), 'string');

$tests[] = static fn ($eq): bool => $eq(joinWords(['La', 'fonction', 'join']), "La fonction join");
$tests[] = static fn ($eq): bool => $eq(joinWords(['La', 'fonction', 'join'], "-"), "La-fonction-join");
$tests[] = static fn ($eq): bool => !$eq(joinWords(['La', 'fonction', 'join'], "-"), "La fonction join");

