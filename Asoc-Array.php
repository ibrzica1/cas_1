
<?php

    $informacije = ["Igor", "Brzica", 37];

    $osoba = [
      "ime" => "Toma",
      "prezime" => "Nikolic"

    ];

    echo $osoba["ime"];
    echo $osoba["prezime"];

    $automobili = [
      "Zastava" => ["Yuko", "Skala", "101"],
    ];

    echo "{$automobili["Zastava"][0]}";

    $osobe = [

      "Toma" => [
          "pravo_ime" => "Tomislav",
          "prezime" => "Nikolic",
          "godine" => 30,
          "programer" => true
      ],

      "Petar" => [
          "pravo_ime" => "Petar",
          "prezime" => "Jovanovic",
          "godine" => 34,
          "programer" => false,
          "jmbg" => 05053411123354
      ]
    ];

    echo $osobe["Toma"]["prezime"];
    echo $osobe["Petar"]["jmbg"];


      $osobe["Jelena"] = [
          "pravo_ime" => "Jelena",
          "prezime" => "Mitrovic",
          "godine" => 25,
          "programer" => true,
          "jmbg" => 05012545566732
      ];


    echo $osobe["Jelena"]["godine"];
    echo var_dump($osobe);

    $imena = array_keys($osobe);
    $prezimena = array_column($osobe, "prezime");

    
    
    //keyless asoc. array
    $ljudi = [

        [
          "ime" => "Tomislav",
          "prezime" => "Nikolic",
          "godiste" => 1993
        ],

        [
          "ime" => "Igor",
          "prezime" => "Brzica",
          "godiste" => 1988
        ],

        [
          "ime" => "Marina",
          "prezime" => "Mitrovic",
          "godiste" => 2000
        ],

      ];

      $godine = date("Y") - $ljudi[1]["godiste"];
    
    echo "{$ljudi[1]["ime"]} {$ljudi[1]["prezime"]} ima {$godine} godina.";
?>