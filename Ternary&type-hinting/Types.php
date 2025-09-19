<?php

declare(strict_types= 1);

function setBio(string $name, string $lastName, int $age): string
{
  return "$name, $lastName, $age";
}

$message = setBio("Igor","Brzica",37);

echo $message;


function isLegalAge(int $age): bool
{
  return $age >= 18;
}

if(isLegalAge(17))
{
  echo "Imate dovoljno godina";
}
else
{
  echo "Nemate dovoljno godina";
}