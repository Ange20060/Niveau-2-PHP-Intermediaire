<?php

declare(strict_types=1);

use LDAP\Result;

function sauvegarder(array $donnees, string $fichier): void
{
  $items = [
    'donnees'=>$donnees,
    'fichier'=> $fichier
    ];

    $result = json_encode($items);

    }

function charger(string $fichier): array
{
  $solution = [];
  if(!file_exists($fichier)){
    return $solution;
  }

  $contenu = file_get_contents($fichier);

  if(!$contenu){
    return $solution;
  }

  $result = json_decode($contenu, true);
  return $result;
  
  if(!array($result)){
    return $solution;
  }
}
