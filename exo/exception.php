<?php

declare(strict_types=1);

class SoldeInsuffisantException extends Exception{}

function retirer(float $solde, float $montant): float
{
  if ($montant > $solde) {
    throw new SoldeInsuffisantException('Solde insuffisant');
  }

  return $solde - $montant;
}

try {
    retirer(100.0, 150.0);
} catch (SoldeInsuffisantException $e) {
    echo $e->getMessage();
}
