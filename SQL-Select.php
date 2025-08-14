<?php

$baza = mysqli_connect("localhost","root","","web_shop");

$rezultat = $baza->query("SELECT * FROM korisnici");

if($rezultat->num_rows > 0)
  {
    echo "Ukupno smo nasli korisnika: ".$rezultat->num_rows."<br>";

    $korisnici = $rezultat->fetch_all(MYSQLI_ASSOC);
    
    foreach($korisnici as $korisnik)
    {
      echo $korisnik["email"]."<br>";
    }
  } 
  else {
    echo "Nismo nasli nijednog korisnika";
  }

  $rezultatProizvodi = $baza->query("SELECT * FROM proizvodi");

  if($rezultatProizvodi->num_rows > 0)
  {
    $proizvodi = $rezultatProizvodi->fetch_all(MYSQLI_ASSOC);

    foreach($proizvodi as $proizvod)
    {
      echo $proizvod["ime"]."<br>";
    }
  }
  else{
    echo "Nismo nasli nijedan proizvod";
  }

