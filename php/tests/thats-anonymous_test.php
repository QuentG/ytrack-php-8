<?php

$tests = [];

$fileContent = new ReflectionFunction('');

$tests[] = static fn ($eq, $exerciseName): bool => $eq();
$tests[] = static fn ($eq, $exerciseName): bool => $eq();
$tests[] = static fn ($eq, $exerciseName): bool => $eq();
$tests[] = static fn ($eq, $exerciseName): bool => $eq();