<?php

$tests = [];

$fileContent = getFileContent('what-month-is-it');

$tests[] = static fn ($eq, $exerciseName): bool => countLinesInFile($exerciseName) > 0;
$tests[] = static fn ($eq, $exerciseName): bool => count(executeFile($exerciseName)) > 0;

$tests[] = static fn ($eq): bool => str_contains($fileContent, '$month');
$tests[] = static fn ($eq): bool => str_contains($fileContent, 'switch') && str_contains($fileContent, 'case'); // Use switch loop

const LETTERS_MONTH = [
    1 => 'Janvier',
    2 => 'Février',
    3 => 'Mars',
    4 => 'Avril',
    5 => 'Mai',
    6 => 'Juin',
    7 => 'Juillet',
    8 => 'Aout',
    9 => 'Septembre',
    10 => 'Octobre',
    11 => 'Novembre',
    12 => 'Décembre',
];

$month = LETTERS_MONTH[date("m")];

$tests[] = static fn ($eq, $exerciseName): bool => $eq(executeFile($exerciseName), "Nous sommes au mois de $month");