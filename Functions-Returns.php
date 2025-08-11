<?php

function mnozenje($broj1,$broj2)
{
  $total = $broj1 * $broj2;
  return $total;
}

$pomnozeniBrojevi = mnozenje(5,5);

echo $pomnozeniBrojevi."<br>";

function izracunajPopust($cijena,$popust)
{
    $total = ($cijena * $popust) / 100;
    return $total;
}

$rezultat = izracunajPopust(1500,22);
echo $rezultat."<br>";

$brojevi = [250, 330, 1000, 2000, 5000];

function kalkulacijaPopusta($array)
{
  $popusti = [];

  foreach($array as $broj)
  {
    $popust = ($broj * 10) / 100;
    array_push($popusti,$popust);
  }
  return $popusti;
}

$ukupanPopust = array_sum(kalkulacijaPopusta($brojevi));

echo $ukupanPopust."<br>";

function iznoskamate($godina)
{
  if($godina < 2000)
  {
    return 0.05;
  }
  elseif($godina >= 2000 && $godina <= 2010)
  {
    return 0.08;
  }
  elseif($godina > 2010 && $godina <= 2020)
  {
    return 0.1;
  }
  elseif($godina > 2020)
  {
    return 0.14;
  }
}

echo iznoskamate(2011);



?>