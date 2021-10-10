<?php


function traitementClassement($posEquipe1,$posEquipe2,$match)
{ 
    $_SESSION[$posEquipe1]['MJ']+=1;
    $_SESSION[$posEquipe2]['MJ']+=1;

    if ($_SESSION[$posEquipe1]['score'][$match]>$_SESSION[$posEquipe2]['score'][$match]) 
    {
        $_SESSION[$posEquipe1]['MG']+=1;
        $_SESSION[$posEquipe1]['BP']+=$_SESSION[$posEquipe1]['score'][$match];
        $_SESSION[$posEquipe1]['BC']+=$_SESSION[$posEquipe2]['score'][$match];
        $_SESSION[$posEquipe1]['DIF']+=($_SESSION[$posEquipe1]['score'][$match] - $_SESSION[$posEquipe2]['score'][$match]);
        $_SESSION[$posEquipe1]['Pts']+=3;

        $_SESSION[$posEquipe2]['MP']+=1;
        $_SESSION[$posEquipe2]['BP']+=$_SESSION[$posEquipe2]['score'][$match];
        $_SESSION[$posEquipe2]['BC']+=$_SESSION[$posEquipe1]['score'][$match];
        $_SESSION[$posEquipe2]['DIF']+=($_SESSION[$posEquipe2]['score'][$match] - $_SESSION[$posEquipe1]['score'][$match]);
    }
    elseif($_SESSION[$posEquipe1]['score'][$match]<$_SESSION[$posEquipe2]['score'][$match])
    {
        $_SESSION[$posEquipe1]['MP']+=1;
        $_SESSION[$posEquipe1]['BP']+=$_SESSION[$posEquipe1]['score'][$match];
        $_SESSION[$posEquipe1]['BC']+=$_SESSION[$posEquipe2]['score'][$match];
        $_SESSION[$posEquipe1]['DIF']+=($_SESSION[$posEquipe1]['score'][$match] - $_SESSION[$posEquipe2]['score'][$match]);


        $_SESSION[$posEquipe2]['MG']=+1;
        $_SESSION[$posEquipe2]['BP']+=$_SESSION[$posEquipe2]['score'][$match];
        $_SESSION[$posEquipe2]['BC']+=$_SESSION[$posEquipe1]['score'][$match];
        $_SESSION[$posEquipe2]['DIF']+=($_SESSION[$posEquipe2]['score'][$match] - $_SESSION[$posEquipe1]['score'][$match]);
        $_SESSION[$posEquipe2]['Pts']+=3;
    }
    else
    {
        $_SESSION[$posEquipe1]['MN']+=1;
        $_SESSION[$posEquipe1]['BP']+=$_SESSION[$posEquipe1]['score'][$match];
        $_SESSION[$posEquipe1]['BC']+=$_SESSION[$posEquipe2]['score'][$match];
        $_SESSION[$posEquipe1]['DIF']+=($_SESSION[$posEquipe1]['score'][$match] - $_SESSION[$posEquipe2]['score'][$match]);
        $_SESSION[$posEquipe1]['Pts']+=1;  
  
        $_SESSION[$posEquipe2]['MN']+=1;
        $_SESSION[$posEquipe2]['BP']+=$_SESSION[$posEquipe2]['score'][$match];
        $_SESSION[$posEquipe2]['BC']+=$_SESSION[$posEquipe1]['score'][$match];
        $_SESSION[$posEquipe2]['DIF']+=($_SESSION[$posEquipe2]['score'][$match] - $_SESSION[$posEquipe1]['score'][$match]);
        $_SESSION[$posEquipe2]['Pts']+=1;
    }
}