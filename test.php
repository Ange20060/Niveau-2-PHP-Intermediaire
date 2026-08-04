<?php

declare(strict_types=1);
require_once __DIR__ .'/exo/date.php';

$dateNaissance = "2006-06-02";
$date= "2027-06-02";
echo "test de la fonction anniversaire\n";

$age = calculerAge($dateNaissance);
print_r($age);

echo "test de la fonction de prediction\n";

$future = joursAvant($date);
print_r($future);
