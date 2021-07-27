<?php

$tests = [];

$fileContent = getFileContent('its-ricard-time');

$tests[] = static fn ($eq, $exerciseName): bool => countLinesInFile($exerciseName) > 0;
$tests[] = static fn ($eq, $exerciseName): bool => count(executeFile($exerciseName)) > 0;

$tests[] = static fn ($eq): bool => str_contains($fileContent, 'do') && str_contains($fileContent, 'while'); // Use do while loop

$result = executeFile('its-ricard-time');

$tests[] = static fn ($eq): bool =>
    $result[0] === "Aller hop ricard numéro 1" && $result[1] === "Aller hop ricard numéro 2" && $result[2] === "Aller hop ricard numéro 3" && $result[3] === "Il va bientôt falloir que j'arrête !" &&
    $result[4] === "Aller hop ricard numéro 4" && $result[5] === "Aller hop ricard numéro 5" && $result[6] === "Je suis plus très frais..." && $result[7] === "Aller hop ricard numéro 6" &&
    $result[8] === "Aller hop ricard numéro 7";
