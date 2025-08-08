<?php

  //http://localhost/Lessons/GET.php?broj_1=123&broj_2=4444

    var_dump($_GET);

    
    $broj1 = $_GET["broj_1"];
    $broj2 = $_GET["broj_2"];
    $metoda = $_GET["metoda"];

    if($metoda == "sabiranje") 
    {
      $racunica = $broj1 + $broj2;
    }
    elseif($metoda == "oduzimanje")
    {
      $racunica = $broj1 - $broj2;
    }
    

    echo $racunica;

?>