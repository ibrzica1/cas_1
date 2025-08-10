<?php

$automobili = [
  "audi" => "a4",
  "bmw" => "x1"
];

foreach($automobili as $marka => $model)
{
  echo $model."<br>";
}

$osobe = [
  "Toma" => [
    "puno_ime" => "Tomislav",
    "prezime" => "Nikolic",
    "godine" => 29
  ],

  "Nidza" => [
    "puno_ime" => "Nikola",
    "prezime" => "Pavlovic",
    "godine" => 34
  ]
];

foreach($osobe as $ime => $osoba)
{
  $godine = $osoba["godine"];
  echo "Osoba $ime ima $godine godina"."<br>";
}

$auti = [
  "Zastava" => [
    "model" => "Yugo 55",
    "godiste" => 1995
  ],
  "Renault" => [
    "model" => "Megane RS",
    "godiste" => 2014
  ],
  "Toyota" => [
    "model" => "Rav4",
    "godiste" => 2021
  ]
];

$trenutnaGodina = date("Y");

foreach($auti as $auto => $karakteristike)
{
  
  $starostAuta = $trenutnaGodina - $karakteristike["godiste"];
  
  if($starostAuta <= 5)
  {
    echo "$auto model {$karakteristike["model"]} je nov auto"."<br>";
  }
  elseif($starostAuta > 5 && $starostAuta < 11)
  {
    echo "$auto model {$karakteristike["model"]} je noviji auto"."<br>";
  }
  elseif($starostAuta >= 11 && $starostAuta <= 20)
  {
    echo "$auto model {$karakteristike["model"]} je stari auto"."<br>";
  }
  elseif($starostAuta > 20)
  {
    echo "$auto model {$karakteristike["model"]} je oldtimer"."<br>";
  }
  
}

$imena = ["Toma", "Petar", "Vlada"];


foreach($imena as &$ime)
{
  $ime = strtolower($ime);
}

$imena = array_map('strtoupper', $imena);

var_dump($imena);

$brojevi = [2, 4, 3, 5];

foreach($brojevi as &$broj)
{
  $broj = pow($broj,2);
}

var_dump($brojevi);
?>

<!DOCTYPE html>

<html lang="en">

<body>

<?php foreach($imena as $ime) { ?>

  <p><?php echo $ime ?></p>

<?php } ?>

<?php foreach($imena as $ime): ?>
    <p><?= $ime ?></p>
<?php endforeach; ?>
  
</body>

</html>