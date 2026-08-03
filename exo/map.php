<?php

declare(strict_types=1);

$nombres = [4, 7, 2, 9, 1, 8, 5];

array_map(function($n) { return $n * 2; }, $nombres);

array_filter($nombres, function($n){ return $n % 2 === 0; });

array_reduce($nombres, function($carry, $n) { return $carry + $n; }, 0);
