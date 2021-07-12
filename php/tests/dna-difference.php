<?php

require_once "utils.php";

$tests = [];

$function = new ReflectionFunction('dnaDiff');

$tests[] = static fn ($eq): bool => $eq($function->getNumberOfParameters(), 2);
$tests[] = static fn ($eq): bool => $eq($function->getNumberOfRequiredParameters(), 2);
$tests[] = static fn ($eq): bool => $eq($function->hasReturnType(), true);

$tests[] = static fn ($eq): bool => $eq(dnaDiff('GAGCCTACTAACGGGAT', 'CATCGTAATGACGGCCT'), 7);
$tests[] = static fn ($eq): bool => $eq(dnaDiff('GAGCCTACTAACGGGAT', 'CATCGTAATGACGGCCTAZA'), false);
$tests[] = static fn ($eq): bool => $eq(dnaDiff('AAGCCTATTAACAGGAT', 'GAGCCTACTAACGGGAT'), 3);
