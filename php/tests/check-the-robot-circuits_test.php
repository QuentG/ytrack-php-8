<?php

require_once "utils.php";

$tests = [];

$function = new ReflectionFunction('checkCircuits');

$tests[] = static fn ($eq): bool => $eq($function->getNumberOfParameters(), 1);
$tests[] = static fn ($eq): bool => $eq($function->hasReturnType(), true);

$tests[] = static fn ($eq): bool => $eq(checkCircuits(9), ['Bras droit']);
$tests[] = static fn ($eq): bool => $eq(checkCircuits(12), ['Bras gauche', 'Bras droit']);
$tests[] = static fn ($eq): bool => $eq(checkCircuits(312), ['Bras gauche', 'Bras droit', 'Moteur']);
$tests[] = static fn ($eq): bool => $eq(checkCircuits(825), ['Bras droit', 'Carte mère', 'Défluxeur de zip']);