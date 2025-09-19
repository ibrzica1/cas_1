<?php

$name = "Marko";

if($name === "Toma")
{
  echo "Hello Toma";
}
else
{
  echo "Nije Toma";
}

echo $name === "Toma" ? "Hello Toma" : "Nije Toma";

function isLegalAge($age)
{
  return $age >= 18;
}

if(isLegalAge(21))
{
  echo "Imate dovoljno godina";
}
else
{
  echo "Nemate dovoljno godina";
}

// http://localhost/Lessons/Ternary&type-hinting/Ternary.php?city=Belgrade&country=Serbia

// $cityName = 'London';

// if(isset($_GET['city']))
// {
//   $cityName = $_GET['city'];
// }

$cityName = $_GET['city'] ?? "London";
$country = $_GET['country'] ?? "Engleska";

echo $country, $cityName;