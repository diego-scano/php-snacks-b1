<!-- SNACK 1
Creiamo un array 'matches' contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario. Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo. -->

<?php

  $matches = [
    [
      "homeTeam" => "Virtus Bologna",
      "awayTeam" => "Varese",
      "homeTeamPts" => 24,
      "awayTeamPts" => 10
    ],
    [
      "homeTeam" => "Dinamo Sassari",
      "awayTeam" => "Venezia",
      "homeTeamPts" => 24,
      "awayTeamPts" => 24
    ],
    [
      "homeTeam" => "Brindisi",
      "awayTeam" => "Trieste",
      "homeTeamPts" => 24,
      "awayTeamPts" => 18
    ],
    [
      "homeTeam" => "Cremona",
      "awayTeam" => "Trento",
      "homeTeamPts" => 12,
      "awayTeamPts" => 12
    ],
    [
      "homeTeam" => "Olimpia Milano",
      "awayTeam" => "Fortitudo Bologna",
      "homeTeamPts" => 30,
      "awayTeamPts" => 14
    ],
    [
      "homeTeam" => "Cantù",
      "awayTeam" => "Universo Treviso",
      "homeTeamPts" => 10,
      "awayTeamPts" => 16
    ],
    [
      "homeTeam" => "Brescia",
      "awayTeam" => "Reggiana",
      "homeTeamPts" => 16,
      "awayTeamPts" => 14
    ]
  ];

  for ($i = 0; $i < count($matches); $i++) {
    echo $matches[$i]["homeTeam"] . " - " . $matches[$i]["awayTeam"] . " | " . $matches[$i]["homeTeamPts"] . " - " . $matches[$i]["awayTeamPts"] . "<br>";
  }
