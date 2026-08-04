<?php

declare(strict_types=1);

function calculerAge(string $dateNaissance): int
{
	try {
		$birth = new DateTimeImmutable($dateNaissance);
		$now = new DateTimeImmutable();
		$diff = $now->diff($birth);
		return (int)$diff->y;
	} catch (Exception $e) {
		return 0;
	}
}

function joursAvant(string $dateFuture): int
{
  $date = new DateTimeImmutable();
  $prediction = new DateTimeImmutable($dateFuture);

  $resultat = $date->diff($prediction);
  return (int)$resultat->days;

}
