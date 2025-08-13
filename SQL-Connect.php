<?php

$baza = mysqli_connect("localhost","root","","lessonsphp");

if(mysqli_connect_error())
{
  die("Desila se greska prilikom konektovanja na bazu podataka");
}

//mysqli_query($baza, " INSERT INTO korisnici (email, lozinka, datum_rodenja) VALUES ('stevostevanovic@gmail.com','dfg43sdg5edf','1990-05-12') ");

//$baza->query("INSERT INTO proizvodi(ime,opis,cena,dan_nabavke,kolicina)
//VALUES('Sofa','Nesto za sjesti','420.99','2025-06-12','5')");

if(empty($_POST["ime_proizvoda"]) || !isset($_POST["ime_proizvoda"]))
{
  die("Niste unijeli ime proizvoda");
}
else{
  $ime = $_POST["ime_proizvoda"];
}

if(empty($_POST["opis"]) || !isset($_POST["opis"]))
{
  die("Niste unijeli opis proizvoda");
}
else{
  $opis = $_POST["opis"];
}

if(empty($_POST["cena"]) || !isset($_POST["cena"]))
{
  die("Niste unijeli cenu proizvoda");
}
else{
  $cena = $_POST["cena"];
}

if(empty($_POST["datum_nabavke"]) || !isset($_POST["datum_nabavke"]))
{
  die("Niste unijeli datum nabavke");
}
else{
  $datumNabavke = $_POST["datum_nabavke"];
}

if(empty($_POST["kolicina"]) || !isset($_POST["kolicina"]))
{
  die("Niste unijeli kolicinu proizvoda");
}
else{
  $kolicina = $_POST["kolicina"];
}


$insertProizvodi = "INSERT INTO proizvodi(ime,opis,cena,dan_nabavke,kolicina)
VALUES('$ime','$opis',$cena,'$datumNabavke',$kolicina)";

$baza->query($insertProizvodi);

?>