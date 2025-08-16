<?php

if( !isset($_POST['email']) || empty($_POST['email']))
{
  die("Niste unijeli email");
}
if( !isset($_POST['password']) || empty($_POST['password']))
{
  die("Niste unijeli lozinku");
}

require_once "baza.php";

$email = $_POST["email"];
$lozinka = $_POST["password"];

$rezultat = $baza->query("SELECT * FROM korisnici WHERE email = '$email'");

if($rezultat->num_rows == 1)
{
  $korisnik = $rezultat->fetch_assoc();
}
else
{
  echo "Korisnik ne postoji";
  exit();
}

$sifraIzBaze = $korisnik["sifra"];


if(password_verify($lozinka, $sifraIzBaze))
{
  echo "Uspjesno logiranje";
}
else
{
  echo "Pogresna lozinka";
}

