<?php

function ordonnerA()
{

  $_SESSION['groupeA'] = [
    'equipe1A' =>
    [
      'nom' =>'<img src=./images/'.$_SESSION['imgA'][0]. '>'.$_SESSION['equipe1A']['nom'],
      'MJ' => $_SESSION['equipe1A']['MJ'],
      'MG' => $_SESSION['equipe1A']['MG'],
      'MN' => $_SESSION['equipe1A']['MN'],
      'MP' => $_SESSION['equipe1A']['MP'],
      'BP' => $_SESSION['equipe1A']['BP'],
      'BC' => $_SESSION['equipe1A']['BC'],
      'DIF' => $_SESSION['equipe1A']['DIF'],
      'Pts' => $_SESSION['equipe1A']['Pts']
    ],
    "equipe2A" =>
    [

      'nom' =>'<img src=./images/'.$_SESSION['imgA'][1]. '>'.$_SESSION['equipe2A']['nom'],
      'MJ' => $_SESSION['equipe2A']['MJ'],
      'MG' => $_SESSION['equipe2A']['MG'],
      'MN' => $_SESSION['equipe2A']['MN'],
      'MP' => $_SESSION['equipe2A']['MP'],
      'BP' => $_SESSION['equipe2A']['BP'],
      'BC' => $_SESSION['equipe2A']['BC'],
      'DIF' => $_SESSION['equipe2A']['DIF'],
      'Pts' => $_SESSION['equipe2A']['Pts']
    ],
    "equipe3A" =>
    [
      'nom' =>'<img src=./images/'.$_SESSION['imgA'][2]. '>'.$_SESSION['equipe3A']['nom'],
      'MJ' => $_SESSION['equipe3A']['MJ'],
      'MG' => $_SESSION['equipe3A']['MG'],
      'MN' => $_SESSION['equipe3A']['MN'],
      'MP' => $_SESSION['equipe3A']['MP'],
      'BP' => $_SESSION['equipe3A']['BP'],
      'BC' => $_SESSION['equipe3A']['BC'],
      'DIF' => $_SESSION['equipe3A']['DIF'],
      'Pts' => $_SESSION['equipe3A']['Pts']
    ],
    "equipe4A" =>
    [
      'nom' =>'<img src=./images/'.$_SESSION['imgA'][3]. '>'.$_SESSION['equipe4A']['nom'],
      'MJ' => $_SESSION['equipe4A']['MJ'],
      'MG' => $_SESSION['equipe4A']['MG'],
      'MN' => $_SESSION['equipe4A']['MN'],
      'MP' => $_SESSION['equipe4A']['MP'],
      'BP' => $_SESSION['equipe4A']['BP'],
      'BC' => $_SESSION['equipe4A']['BC'],
      'DIF' => $_SESSION['equipe4A']['DIF'],
      'Pts' => $_SESSION['equipe4A']['Pts']
    ]

  ];


  usort($_SESSION['groupeA'], function ($x, $y) {
    return $y["Pts"] - $x["Pts"];
  });


  foreach ($_SESSION['groupeA'] as $key => $value) {
    echo  "<tr>";
    foreach ($value as $key => $value) {
      echo "<td>" . $value . "</td>";
    }
    echo "</tr>";
  }
}
