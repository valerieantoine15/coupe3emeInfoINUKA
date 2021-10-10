<?php
function ordonnerB()
{

  $_SESSION['groupeB'] = [
    'equipe1B' =>
    [
      'nom' => '<img src=./images/' . $_SESSION['imgB'][0] . '>' . $_SESSION['equipe1B']['nom'],
      'MJ' => $_SESSION['equipe1B']['MJ'],
      'MG' => $_SESSION['equipe1B']['MG'],
      'MN' => $_SESSION['equipe1B']['MN'],
      'MP' => $_SESSION['equipe1B']['MP'],
      'BP' => $_SESSION['equipe1B']['BP'],
      'BC' => $_SESSION['equipe1B']['BC'],
      'DIF' => $_SESSION['equipe1B']['DIF'],
      'Pts' => $_SESSION['equipe1B']['Pts']
    ],
    "equipe2B" =>
    [

      'nom' => '<img src=./images/' . $_SESSION['imgB'][1] . '>' . $_SESSION['equipe2B']['nom'],
      'MJ' => $_SESSION['equipe2B']['MJ'],
      'MG' => $_SESSION['equipe2B']['MG'],
      'MN' => $_SESSION['equipe2B']['MN'],
      'MP' => $_SESSION['equipe2B']['MP'],
      'BP' => $_SESSION['equipe2B']['BP'],
      'BC' => $_SESSION['equipe2B']['BC'],
      'DIF' => $_SESSION['equipe2B']['DIF'],
      'Pts' => $_SESSION['equipe2B']['Pts']
    ],

    "equipe3B" =>
    [
      'nom' => '<img src=./images/' . $_SESSION['imgB'][2] . '>' . $_SESSION['equipe3B']['nom'],
      'MJ' => $_SESSION['equipe3B']['MJ'],
      'MG' => $_SESSION['equipe3B']['MG'],
      'MN' => $_SESSION['equipe3B']['MN'],
      'MP' => $_SESSION['equipe3B']['MP'],
      'BP' => $_SESSION['equipe3B']['BP'],
      'BC' => $_SESSION['equipe3B']['BC'],
      'DIF' => $_SESSION['equipe3B']['DIF'],
      'Pts' => $_SESSION['equipe3B']['Pts']
    ],
    "equipe4B" =>
    [
      'nom' => '<img src=./images/' . $_SESSION['imgB'][3] . '>' . $_SESSION['equipe4B']['nom'],
      'MJ' => $_SESSION['equipe4B']['MJ'],
      'MG' => $_SESSION['equipe4B']['MG'],
      'MN' => $_SESSION['equipe4B']['MN'],
      'MP' => $_SESSION['equipe4B']['MP'],
      'BP' => $_SESSION['equipe4B']['BP'],
      'BC' => $_SESSION['equipe4B']['BC'],
      'DIF' => $_SESSION['equipe4B']['DIF'],
      'Pts' => $_SESSION['equipe4B']['Pts']
    ]

  ];


  usort($_SESSION['groupeB'], function ($x, $y) {
    return $y["Pts"] - $x["Pts"];
  });


  foreach ($_SESSION['groupeB'] as $key => $value) {
    echo  "<tr>";
    foreach ($value as $key => $value) {
      echo "<td>" . $value . "</td>";
    }
    echo "</tr>";
  }
}
