<?php

    $ime = "Igor";

    $ucenici = ["Toma", "Marko", "Mateja", "Milica", "Teodora", "Petar"];

    echo $ucenici[0];

    $ucenici[0] = "Tomislav";

    echo $ucenici[0];

    array_push($ucenici, $ime);

    echo $ucenici[6];

    $godine = 37;

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Array</title>
</head>
<body>
  <h3> <?php  echo $ime   ?> </h3>
  <h3> <?= $ime ?> </h3>
  <p> <?php  echo $godine   ?>  </p>
</body>
</html>