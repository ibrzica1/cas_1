
<?php

  $ime = "Toma";
  $godine = 18;
  $visina = 181;

  if($ime == "Toma")
  {
      echo "Pozdrav Toma". "<br />";
  }

  if($godine == 18)
  {
    echo "Imate 18 godina". "<br />";
  }
  else if($godine == 29)
  {
    echo "Imate 29 godina". "<br />";
  }

  if($visina < 170)
  {
    echo "Niski ste". "<br />";
  }
  else
  {
    echo "Visoki ste". "<br />";
  }


  $godinaRodenja = 1993;
  $tomaGodine = date("Y") - $godinaRodenja;

  if ($godinaRodenja == 1992)
  {
    echo "Imate 31 godinu". "<br />";
  }
  elseif($godinaRodenja == 1999)
  {
    echo "Imate 24 godine". "<br />";
  }
  else
  {
    $tomaGodine = date("Y") - $godinaRodenja;
    echo "Imate $tomaGodine godina". "<br />";
  }

  $programer = true;

  if($programer)
  {
    echo "Vi ste programer". "<br />";
  }
  else
  {
    echo "Vi niste programer". "<br />";
  }

  if(!$programer)
  {
    echo "Vi niste programer". "<br />";
  }

  $kazne = false;

  if($godine >= 18)
  {
    if($kazne == false)
    {
      echo "Mozete polagati za automobil". "<br />";
    }
    else
    {
      echo "Imate kazne". "<br />";
    }
  }
  else
  {
    echo "Nemate 18 godina". "<br />";
  }

  if($godine >= 18 && $kazne == false)
  {
    echo "Mozete polagati za automobil". "<br />";
  }
  else
  {
    echo "Niste ispunili zahtjeve". "<br />";
  }

  if($ime == "Toma")
  {
    echo "Dobrodosao";
  }
  elseif($ime == "Petar")
  {
    echo "Dobrodosao";
  }
  else
  {
    echo "Nisi Toma ili Petar";
  }

  if($ime == "Toma" || $ime == "Petar")
  {
    echo "Dobrodosao";
  }
  else
  {
    echo "Nisi Toma ili Petar";
  }



?>