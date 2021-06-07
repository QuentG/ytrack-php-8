<?php

$tests = [];

$board = [
    ['a', 'b', 'c', 'd'],
    ['d', 'k', 'l', 'm'],
    ['m', 'f', 'b', 's']
];

$tests[] = static fn ($eq): bool => $eq(searchWord($board, 'abcd'), true);
$tests[] = static fn ($eq): bool => $eq(searchWord($board, 'abcl'), true);
$tests[] = static fn ($eq): bool => $eq(searchWord($board, 'admfbl'), true);
$tests[] = static fn ($eq): bool => $eq(searchWord($board, 'admfkb'), true);

$tests[] = static fn ($eq): bool => $eq(searchWord($board, 'abcc'), false);
$tests[] = static fn ($eq): bool => $eq(searchWord($board, 'abcdc'), false);
$tests[] = static fn ($eq): bool => $eq(searchWord($board, 'dklml'), false);