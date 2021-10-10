<?php
function Equipe($placement, $nom)
{
  $_SESSION[$placement] =
    [
      'nom' => $nom,
      'score'=>[0,0,0],
      'MJ' => 0,
      'MG' => 0,
      'MN' => 0,
      'MP' => 0,
      'BP' => 0,
      'BC' => 0,
      'DIF' => 0,
      'Pts' => 0
    ];
}

function demiFinale()
{

  $_SESSION['dfM1Score1'] =0;
  $_SESSION['dfM1Score2'] =0;
  $_SESSION['dfM1Etat'] =false;
  $_SESSION['dfM2Score1'] =0;
  $_SESSION['dfM2Score2'] =0;
  $_SESSION['dfM2Etat'] =false;

}

function petiteFinale()
{

  $_SESSION['equipe1pf'] ="";
  $_SESSION['equipe2pf'] ="";
  $_SESSION['pfM1Score1'] =0;
  $_SESSION['pfM1Score2'] =0;
  $_SESSION['pfM1Etat'] =false;
  $_SESSION['championpf'] ="";
  $_SESSION['2eplacepf'] ="";

}

function grandeFinale()
{
  $_SESSION['equipe1gf'] ="";
  $_SESSION['equipe2gf'] ="";
  $_SESSION['gfM1Score1'] =0;
  $_SESSION['gfM1Score2'] =0;
  $_SESSION['gfM1Etat'] =false;
  $_SESSION['championgf'] ="";
  $_SESSION['2eplacegf'] ="";
}