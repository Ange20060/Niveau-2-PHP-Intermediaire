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

$retrait= retirer(20000, 5000);
echo $retrait;
