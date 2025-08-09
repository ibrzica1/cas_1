<?php

  $korisnici =[
    "Toma", "Pavle", "Veljko",
    "Marko", "Petar", "Nikola"
  ];

  foreach($korisnici as $korisnik){
    echo "$korisnik"." ";
  }

  $auti = ["Audi", "BMW", "Mercedes"];

  foreach($auti as $auto){

    if($auto == "BMW"){
      continue;
    }
    else{
      echo $auto. " ";
    }
  }

  $vrednosti = [22, 53, 36, 46, 13];

  $total = 0;

  foreach($vrednosti as $vrednost)
  {
    if($vrednost%9 == 0)
    {
      continue;
    }
    else
    {
      $total += $vrednost;
    }
  }
  echo $total. " ";

  echo array_sum($vrednosti). " ";

  for($i = 0; $i < 11; $i++)
  {
    if($i % 5 == 0)
    {
      echo $i. " ";
    }
  }

  $godine = 0;

  while($godine < 18)
  {
    echo "Niste punoletni"." <br>";
    $godine++;
  }
  



?>