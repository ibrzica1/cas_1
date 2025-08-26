<?php

require_once "Baza.php";

class User extends Baza
{
  public $ime;
  public $email;
  public $lozinka;

  public function setName($name)
  {
    $name = ucfirst($name);
    return $this->ime = $name;
  }

  public function postojiMail($posta)
  {
    $rezultat = $this->konekcija->query("SELECT * FROM user WHERE email = '$posta' ");

    if($rezultat->num_rows > 0)
    {
      return true;
    }
    else
    {
      return false;
    }
  }

  public function registerUser($naziv,$posta,$sifra)
  {
    if($this->postojiMail($posta))
    {
      die("Korisnik vec postoji u bazi");
    }
    else
    {
      $this->konekcija->query("INSERT INTO user(ime, email, lozinka)
      VALUES ('$naziv','$posta','$sifra') ");
    }
  }
}