<?php

declare(strict_types=1);


function genererSlug(string $titre): string{
    $slug = trim(mb_strtolower($titre));
    $slug = preg_replace('/[^a-z0-9]+/', '-', $slug);
    $slug = trim($slug, '-');
    return $slug;
}

$titre= "PAPA MANGE DU PAIN";

$trans= genererSlug($titre);

echo $trans;
