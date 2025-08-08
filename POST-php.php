<?php

$imeProslijedeno = isset($_POST["ime"]);
$lozinkaProslijedena = isset($_POST["lozinka"]);

if($imeProslijedeno == true)
{
  $ime = trim($_POST["ime"]);
  if($ime == "")
  {
    echo "Ime nije upisano". "<br />";
  }
  else
  {
    echo $ime. "<br />";
  }
  
}
else
{
  die("Ime nije proslijedeno"). "<br />";
}

if($lozinkaProslijedena == true)
{
  $lozinka = trim($_POST["lozinka"]);
  if($lozinka == "")
  {
    echo "Lozinka nije upisana". "<br />";
  }
  else
  {
    echo $lozinka. "<br />";
  }
  
}
else
{
  die("Lozinka nije proslijedena"). "<br />";
}





?>