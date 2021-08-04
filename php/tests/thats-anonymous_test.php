<?php

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

$month = LETTERS_MONTH[intval(date("m"))];

$tests = [];

$reflecToday = new ReflectionFunction('today');

$tests[] = static fn ($eq, $exerciseName): bool => $reflecToday->isClosure();
$tests[] = static fn ($eq, $exerciseName): bool => $eq($today(), "Nous sommes le " . date('d') . " $month " . date('Y'));

$reflecLeap = new ReflectionFunction('isLeapYear');

$tests[] = static fn ($eq, $exerciseName): bool => $reflecLeap->isClosure();
$tests[] = static fn ($eq, $exerciseName): bool => !$isLeapYear(2017);
$tests[] = static fn ($eq, $exerciseName): bool => !$isLeapYear(2018);
$tests[] = static fn ($eq, $exerciseName): bool => $isLeapYear(2020);
$tests[] = static fn ($eq, $exerciseName): bool => $isLeapYear(1956);