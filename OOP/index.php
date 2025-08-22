<?php

  require_once "klase/Auto.php";

  $audiA4 = new Auto();
  $audiA4->marka = "Audi";
  $audiA4->model = "A4";
  $audiA4->boja = "plava";
  $audiA4->kubikaza = 2000;

  $noviAutomobil = new Auto();
  $noviAutomobil->marka = "Zastava";
  $noviAutomobil->model = "Yugo 55";
  $noviAutomobil->boja = "Bela";
  $noviAutomobil->kubikaza = 1600;

  

  echo "Napravili smo novi automobil pod imenom ".$audiA4->marka;

  $audiA4->otvoriVrata();
  $boja = "plava";
  $noviAutomobil->ofarbaj($boja);
  echo $noviAutomobil->boja;