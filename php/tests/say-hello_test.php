<?php

$tests = [];

$tests[] = static fn ($eq): bool => $eq(gettype(sayHello()), 'string');
$tests[] = static fn ($eq): bool => !$eq(gettype(sayHello()), 'NULL');

$tests[] = static fn ($eq): bool => $eq(sayHello(), 'Hello');
$tests[] = static fn ($eq): bool => !$eq(sayHello(), 'hello');
$tests[] = static fn ($eq): bool => !$eq(sayHello(), 'helloo');

