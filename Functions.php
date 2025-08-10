<?php

  $ime = "Tomislav";

  $ime = str_replace('o', '0', $ime);

  echo $ime."<br>";

  $prezime = "Nikolic";

  function pozdraviKorisnika()
  {
    echo "Pozdrav"."<br>";
  }

  pozdraviKorisnika();

  function ispisiPoruku($argument)
  {
    echo $argument."<br>";
  }

  ispisiPoruku($ime);

  function izracunaj($broj1,$broj2)
  {
    if($broj1 == 0 || $broj2 == 0)
    {
      die ("Broj ne smije biti 0");
    }
    $rezultat = $broj1 + $broj2;
    echo $rezultat."<br>";
  }

  izracunaj(15,1);

  function daliJeBrojParan($broj)
  {
    if($broj == 0)
    {
      die("Broj 0 se ne moze proslijediti kao argument");
    }
    elseif($broj % 2 == 0)
    {
      echo "Broj je paran"."<br>";
    }
    elseif($broj % 2 == 1)
    {
      echo "Broj je neparan"."<br>";
    }
  }

  daliJeBrojParan(0);

?>